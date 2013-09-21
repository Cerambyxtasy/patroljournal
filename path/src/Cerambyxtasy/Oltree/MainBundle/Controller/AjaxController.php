<?php

namespace Cerambyxtasy\Oltree\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use FOS\UserBundle\Doctrine\UserManager;
use Cerambyxtasy\Oltree\MainBundle\Form\Type\JournalEntryType;
use Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry;
use Cerambyxtasy\Oltree\MainBundle\Entity\Satrap;
use Cerambyxtasy\Oltree\MainBundle\Entity\Journal;
use Cerambyxtasy\Oltree\MainBundle\Entity\Map;
use Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon;

class AjaxController extends Controller {

    //all current objects used 

    public function indexAction($action, Request $request) {
        try {
            return $this->$action($request);
        } catch (Exception $e) {
            throw new \Symfony\Component\Locale\Exception\MethodNotImplementedException();
        }
    }

    /**
     * Used for operations appening after map drop 
     * the user is retrived to map image name with it's encoded mail
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function uploadmap(Request $request) {
        //session launch
        $session = $this->getRequest()->getSession();

        //Get the connected user mail, encode it to use as image name      
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());
        $mail = $user->getEmail();
        $satrap = unserialize($session->get('satrap'));
        //The name of file is a combination of sha encoded usermail + satrap id
        $fileName = sha1($mail . $satrap->getId());
        $name = $fileName . '.jpg';

        // Encode it correctly
        $fileData = $request->get('fileData');
        $encodedData = str_replace(' ', '+', $fileData);
        $decodedData = base64_decode($encodedData);

        // Finally, save the image
        $rootPath = $this->get('kernel')->getRootDir();
        $path = $rootPath . '/../web/bundles/cerambyxtasyoltreemain/images/uploads/' . $name;

        //If everything's alright, register map image
        if (file_put_contents($path, $decodedData)) {
            $map = unserialize($session->get('map'));
            $map->setMapImageName($name);

            $em = $this->getDoctrine()->getManager();
            $em->merge($map);
            $em->flush();
        }
        return new Response(json_encode($name));
    }

    /**
     * Upload a journal entry
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function uploadJournalEntry(Request $request) {
        //session launch
        $session = $this->getRequest()->getSession();

        //Serializer initilisation
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        //Grab important ids from form
        $extendedId = $request->get('hexagonId');
        $journalEntryId = $request->get('journalEntryId', 0);

        //we use a service to grab a static entity manager, not 100% sur if it's useful   
        $manager = $this->get('cerambyxtasy.utils.managerservice');
        $em = $manager::$em;

        //Is already there a journalEntry with this id ?
        //If so, create a form with it
        $journalEntry = '';
        $journalEntry = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->find($journalEntryId);
//        $journalEntry = $this->getDoctrine()
//                    ->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')
//                    ->findOneById($journalEntryId);        

        $form = $this->createForm(new JournalEntryType(), $journalEntry);
        $form->handleRequest($request);

        //If there isn't a journal entry yet, or a new hexagon, make a new one from form datas
        if (!$journalEntry) {
            $journalEntry = new JournalEntry();    
            $journalEntry = $form->getData();
        }

        if ($form->isValid()) {

            $mapSession = unserialize($session->get('map'));
            //get the session map repository
            $map = $this->getDoctrine()
                    ->getRepository('CerambyxtasyOltreeMainBundle:Map')
                    ->findOneById($mapSession->getId());

            //get hexagon by id and map id
            $hexagonRepository = $this->getDoctrine()
                    ->getRepository('CerambyxtasyOltreeMainBundle:Hexagon');
            $hexagon = $hexagonRepository->findOneBy(array(
                'extended_id' => $extendedId,
                'map' => $map
            ));

            //if there isn't any hexagon yet, let's create one !
            if (!$hexagon) {
                $hexagon = new Hexagon();
                $hexagon->setExtendedId($extendedId);
                //this was causing doctrine persistence problems ! fuck it
                $hexagon->setMap($map);
                $em->persist($hexagon);
                $em->flush();

                //if it's a new hexagon, we need to create a new journal entry too !!!!
                //TODO: FIX THE UGLY CODE REDDIT !
                
                $journalEntry = new JournalEntry();
                $journalEntry = $form->getData();
                $em->detach($journalEntry);                                
            }

            //persistence of journal and map solely suffice to persist linked entities (previously cascade error)
            $journalFromSession = unserialize($session->get('journal'));
            $journal = $this->getDoctrine()
                    ->getRepository('CerambyxtasyOltreeMainBundle:Journal')
                    ->findOneById($journalFromSession->getId());
            $em->persist($journal);
            $em->persist($map);

            $journalEntry->setJournal($journal);
            $journalEntry->setHexagon($hexagon);

            $em->persist($journalEntry);
            $em->flush();
            return new Response(json_encode($journalEntry->getId()));
        }
        return new Response(json_encode("form error"));
    }

}

?>
