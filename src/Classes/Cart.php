<?php
namespace App\Classes;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class Cart 
{
    private $stack;

    public function __construct(EntityManagerInterface $em, RequestStack $stack)
    {
        $this->stack = $stack;
        $this->em = $em;
    }

    public function add($id)
    {
        $session = $this->stack->getSession();
        $cart = $session->get('cart', []);

        if(!empty($cart[$id])){
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $session->set('cart', $cart);
    }

    public function get()
    {
        $session = $this->stack->getSession();
        return $session->get('cart');
    }
    
    public function remove()
    {
        $session = $this->stack->getSession();

        return $session->remove('cart');
    }

    public function delete($id)
    {
        // dd($this->stack->getSession());
        $session = $this->stack->getSession();
       
        $cart = $session->get('cart', []);

        unset($cart[$id]);

        return $session->set('cart', $cart);
    }

    public function decrease($id)
    {
        $session = $this->stack->getSession();
        $cart = $session->get('cart', []);

    // on va avant verifier que la quantité de produit n'est pas eagale a 1

        if ($cart[$id] > 1) {
            // retirer une quantité
            $cart[$id]--;
        } else {
            //supprimer une quantité
            unset($cart[$id]);
        }

        return $session->set('cart', $cart);
    }

    public function getFull()
    {
        $cartComplete = [];

        if($this->get()){
          foreach ($this->get() as $id => $quantity) {
              $product_object = $this->em->getRepository(Product::class)->findOneById($id);

              if (!$product_object) {
                  $this->delete($id);
                  continue;
              }
            $cartComplete[] = [
                'product' => $product_object,
                'quantity' => $quantity
                ];
            }  
        }

        return $cartComplete;
    }
}