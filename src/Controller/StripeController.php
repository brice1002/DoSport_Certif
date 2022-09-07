<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Classes\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Stripe\Checkout\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class StripeController extends AbstractController
{
    #[Route('/commande/create-session/{reference}', name: 'stripe_create_session')]
    public function index(EntityManagerInterface $entityManager, Cart $cart, $reference): Response
    {
        $product_for_stripe = [];
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        $order = $entityManager->getRepository(Order::class)->findOneByReference($reference);

        // dd($order);

        if (!$order) {
            $this->redirectToRoute('order');
        }

        foreach ($order->getOrderDetails()->getValues() as $product) {
            $product_object = $entityManager->getRepository(Product::class)->findOneBy(['name' => $product->getProduct()]);
            $product_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $product->getPrice(),
                    'product_data' => [
                        'name' => $product->getProduct(),
                        'images' => [$YOUR_DOMAIN."/uploads/".$product_object->getIllustration()],
                    ],
                ],
                'quantity' => $product->getQuantity(),
            ];
        }

        $product_for_stripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $order->getCarrierPrice(),
                'product_data' => [
                    'name' => $order->getCarrierName(),
                    'images' => [$YOUR_DOMAIN],
                ],
            ],
            'quantity' => 1,
        ];

        Stripe::setApiKey('sk_test_51KsPLUK8BKtT7Z0SYlgGLt65NX9e8XJlsFdWpu9Bl9kDH9tt8gf0Sy4aknCix9ffzLzJSK36zEWyfmMZwxza6oMa00uS99g7hc');

        $checkout_session = Session::create([
            'customer_email' => $this->getUser()->getEmail(),
            'line_items' => [
                $product_for_stripe
            ],
            'payment_method_types' => [
                'card',
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
            'cancel_url' => $YOUR_DOMAIN . '/commande/erreur/{CHECKOUT_SESSION_ID}',
        ]);


        $order->setStripeSessionId($checkout_session->id);
        $entityManager->flush();


        // foreach ($cart->getFull() as $product) {
        //     $product_for_stripe[] = [
        //         'price_data' => [
        //             'currency' => 'eur',
        //             'unit_amount' => $product['product']->getPrice(),
        //             'product_data' => [
        //                 'name' => $product['product']->getName(),
        //                 'images' => [$YOUR_DOMAIN."/uploads/".$product['product']->getIllustration()],
        //             ],
        //         ],
        //         'quantity' => $product['quantity'],
        //     ];
        // }
 
        // Stripe::setApiKey('sk_test_51KsPLUK8BKtT7Z0SYlgGLt65NX9e8XJlsFdWpu9Bl9kDH9tt8gf0Sy4aknCix9ffzLzJSK36zEWyfmMZwxza6oMa00uS99g7hc');
 

        
        // $checkout_session = Session::create([
        //     'line_items' => [
        //         $product_for_stripe
        //     ],
        //     'payment_method_types' => [
        //         'card',
        //     ],
        //     'mode' => 'payment',
        //     'success_url' => $YOUR_DOMAIN . '/success.html',
        //     'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        // ]);

        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkout_session->url);


        return $this->redirect($checkout_session->url);
    }
}
