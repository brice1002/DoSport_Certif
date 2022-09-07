<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/nous-contacter', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {


        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
            {
                
                if ($request->request->all()) {
                    $email = new Email();
                    $email
                        ->from($request->request->get('email'))
                        ->to(new Address("contact@dosport4.fr", "Contact DoSport4"))
                        ->subject($request->request->get('subject'))
                        ->text($request->request->get('message'));
                    $mailer->send($email);
                    
                    $this->addFlash('success', 'Merci pour votre message. Nous vous répondrons dans les meilleurs délais');
                }
            }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
