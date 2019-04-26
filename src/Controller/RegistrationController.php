<?php
// src/Controller/RegistrationController.php
namespace App\Controller;
 
use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="user_registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // création du formulaire
        $user = new User();
        // instancie le formulaire avec les contraintes par défaut, + la contrainte registration pour que la saisie du mot de passe soit obligatoire
        $form = $this->createForm(UserType::class, $user,[
           'validation_groups' => array('User', 'registration'),
        ]);        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
 
            // Encode le mot de passe
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
 
            // Enregistre le membre en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', "Vous vous êtes inscrit. Vous pouvez maintenant vous connecter !");
            return $this->redirectToRoute('connexion');
        }
 
        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}