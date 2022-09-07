<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Security\EmailVerifier;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\SecurityBundle\Security\UserAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
// use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $em;

    private EmailVerifier $emailVerifier;

    
    public function __construct(EntityManagerInterface $em, EmailVerifier $emailVerifier){
        $this->em = $em;
        $this->emailVerifier = $emailVerifier;
    }
    
        
    
    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request, UserPasswordHasherInterface $encoder, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $loginAuthenticator): Response
    {
        $user = new User;
        $form = $this->createForm(RegisterType::class, $user);
        // $notification = null;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $search_email = $this->em->getRepository(User::class)->findOneByEmail($user->getEmail());

            if(!$search_email){
                $password = $encoder->hashPassword($user, $user->getPassword());

                $user->setPassword($password);

                $this->em->persist($user);
                $this->em->flush();

                // $this->addFlash("success", "Merci pour votre inscription ! Nous vous avons fait parvenir un email à votre adresse. Merci de confirmer votre inscription.");

                // return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);


                // generate a signed url and email it to the user
                $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('contact@DoSport.fr', 'mon site'))
                    ->to($user->getEmail())
                    ->subject('Merci de confirmer votre email')
                    ->htmlTemplate('register/confirmation_email.html.twig')
                );

                // $notification = "Merci pour votre inscription ! <br> Nous vous avons fait parvenir un email à votre adresse Merci de confirmer votre inscription.";
                $this->addFlash("success", "Merci pour votre inscription ! Nous vous avons fait parvenir un email à votre adresse. Merci de confirmer votre inscription.");


                return $userAuthenticator->authenticateUser(
                    $user,
                    $loginAuthenticator,
                    $request
                );
            } else {
                // $notification = "L'email que vous avez renseigné existe déjà";
                $this->addFlash("danger", "L'email que vous avez renseigné existe déjà.");

            }

            
        }

        // dd();

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
            // 'notification' => $notification
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository): Response
    {
        $notification = null;

        $id = $request->get('id');

        if (null === $id) {
            return $this->redirectToRoute('app_register');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('app_register');
        }

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse email a été vérifiée');

        return $this->redirectToRoute('account');
    }
}
