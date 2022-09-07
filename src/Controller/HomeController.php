<?php

namespace App\Controller;

use App\Classes\Mail;
use App\Entity\Header;
use App\Entity\Product;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use App\Repository\MarqueRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        return $this->em = $em;
    }
    
    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        // $mail = new Mail();
        // $mail->send('trainingDev@protonmail.com', 'jojo', 'Mon premier mail', 'Je tente un mail');

        // dd($mail);

        $products = $this->em->getRepository(Product::class)->findByIsBest([
            "isBest" => true,
        ]);

        $headers = $this->em->getRepository(Header::class)->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'headers' => $headers,
        ]);
    }

    #[Route('/nous-contacter', name: 'contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        // dd($_POST);


        // $form = $this->createForm(ContactType::class);
        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid())
        //     {
                
                if ($request->request->all()) {
                    $email = new Email();
                    $email
                        ->from($request->request->get('email'))
                        ->to(new Address("contact@dosport4.fr", "Contact DoSport4"))
                        ->subject($request->request->get('sujet'))
                        ->text($request->request->get('message'));
                    $mailer->send($email);
                    
                    $this->addFlash('success', 'Merci pour votre message. Nous vous répondrons dans les meilleurs délais');
                }
            // }

        // return $this->render('contact/index.html.twig', [
        //     'form' => $form->createView(),
        // ]);

        return $this->render('home/contact.html.twig');
    }

    #[Route('/qui_sommes_nous', name: 'nous')]
    public function nous(): Response
    {
        return $this->render('home/nous.html.twig');
    }

    #[Route('/conditions_generales_vente', name: 'cgv')]
    public function cgv(): Response
    {
        return $this->render('home/cgv.html.twig');
    }

    #[Route('/mentions_legales', name: 'mentions')]
    public function mentions(): Response
    {
        return $this->render('home/mentionLegal.html.twig');
    }
}
