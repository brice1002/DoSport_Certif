<?php

namespace App\Controller;

use App\Classes\Cart;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'order_success')]
    public function index(Cart $cart, $stripeSessionId): Response
    {
        $order = $this->em->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        if (!$order  || $order->getUser() != $this->getUser()) {
            return $this->redirectToRoute('home');
        }

        if (!$order->getIsPaid()) {

            // Vider la session cart
            $cart->remove();

            // Modiication du statut isPaid de la commande en mettant 1
            $order->setIsPaid(1);
            $this->em->flush();

        // Envoyer un email au client pour lui confirmer sa commande
        }
        
        
        return $this->render('order_success/index.html.twig', [
        
            // Afficher les infos de la commande de l'utilisateur
            'order' => $order,
        ]);
    }
}
