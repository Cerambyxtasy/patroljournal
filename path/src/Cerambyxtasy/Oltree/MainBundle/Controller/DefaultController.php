<?php

namespace Cerambyxtasy\Oltree\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cerambyxtasy\Oltree\MainBundle\Form\Type\RegistrationType;
use Cerambyxtasy\Oltree\MainBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        $registrationForm = $this->createForm(new RegistrationType(), new Registration());
        return $this->render('CerambyxtasyOltreeMainBundle:Default:index.html.twig', array('registrationForm' => $registrationForm->createView()));
    }

    public function createUserAction() {
        $em = $this->getDoctrine()->getManager();

        $registrationForm = $this->createForm(new RegistrationType(), new Registration());
        $registrationForm->bind($this->getRequest());

        if ($registrationForm->isValid()) {
            $registration = $registrationForm->getData();

            try {
                $em->persist($registration->getUser());
                $em->flush();
            } catch (Exception $e) {
                
            }
            return $this->redirect($this->generateUrl('journal'));
        }

        return $this->render('CerambyxtasyOltreeMainBundle:Default:index.html.twig', array('registrationForm' => $registrationForm->createView()));
    }
//
//    public function journalAction() {
//
//        //Get the connected user mail, encode it to use as image name
//        $userManager = $this->container->get('fos_user.user_manager');
//        $user = $userManager->findUserByUsername($this->container->get('security.context')
//                        ->getToken()
//                        ->getUser());
//        $mail  = $user->getEmail();
//        $encodedMail = sha1($mail);
//    
//        return $this->render('CerambyxtasyOltreeMainBundle:Default:journal.html.twig',array('mapImageName' => $encodedMail));
//    }

}
