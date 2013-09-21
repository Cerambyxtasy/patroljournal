<?php

namespace Cerambyxtasy\Oltree\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Cerambyxtasy\Oltree\MainBundle\Form\Type\RegistrationType;
use Cerambyxtasy\Oltree\MainBundle\Form\Model\Registration;

class SecurityController extends Controller {

    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        //the registration form
        $registrationForm = $this->createForm(new RegistrationType(), new Registration());
        
        return $this->render('CerambyxtasyOltreeMainBundle:Default:index.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                    'registrationForm' => $registrationForm->createView(),
        ));
    }

}

?>
