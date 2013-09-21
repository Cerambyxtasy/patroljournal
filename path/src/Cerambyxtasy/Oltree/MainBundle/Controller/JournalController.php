<?php

namespace Cerambyxtasy\Oltree\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cerambyxtasy\Oltree\MainBundle\Form\Type\JournalEntryType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry;
use Cerambyxtasy\Oltree\MainBundle\Entity\Satrap;
use Cerambyxtasy\Oltree\MainBundle\Entity\Journal;
use Cerambyxtasy\Oltree\MainBundle\Entity\Map;
use Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class JournalController extends Controller {

    public function indexAction() {
        //session launch
        $session = $this->getRequest()->getSession();

        //Get the current user
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());

        //initialisation of satrap and journal if there aren't any
        $sartrapRepository = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Satrap');
        $satrap = $sartrapRepository->findOneByPatroller($user->getId());
        
        //we initialize the manager    
        $manager = $this->get('cerambyxtasy.utils.managerservice');
        $em = $manager::$em;
        
        if (!$satrap) {
            //if there isn't any satrap yet... Make one !
            $satrap = new Satrap();
            $satrap->setName('Satrapie');
            $satrap->setPatroller($user);
            
            $em->persist($satrap);                        

            //and now we make a journal
            $journal = new Journal();
            $journal->setSatrap($satrap);
            $journal->setName('Journal de patrouille');
            $em->persist($journal);            

            //and a map
            $map = new Map();
            $map->setSatrap($satrap);
            $map->setName('Carte de ' . $satrap->getName());
            $em->persist($map);            

            $em->flush();
        }

        //We grab the objects with doctrine, to have updated version with ids
        $sartrapRepository = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Satrap');
        $journalRepository = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Journal');
        $mapRepository = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Map');

        $satrap = $sartrapRepository->findOneByPatroller($user->getId());
        $journal = $journalRepository->findOneBySatrap($satrap->getId());
        $map = $mapRepository->findOneBySatrap($satrap->getId());        

        //put entities in sessions
        $session->set('satrap', serialize($satrap));
        $session->set('journal', serialize($journal));
        $session->set('map', serialize($map));


        //create the form for journal entries
        $entry = new JournalEntry();
        $entry->setJournal(unserialize($session->get('journal')));

        $form = $this->createForm(new JournalEntryType(), $entry);

        //grab the map image name from map object
        $mapImageName = $map->getMapImageName();

        return $this->render('CerambyxtasyOltreeMainBundle:Journal:index.html.twig', array('formJournal' => $form->createView(),
                    'mapImageName' => $mapImageName));
    }

    /**
     * Get a journal with a given id
     * @param integer $id
     */
    protected function getJournalById($id) {
        $journal = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Journal')
                ->find($id);

        if (!$journal) {
            throw $this->createNotFoundException(
                    'Aucun produit trouvé pour cet id : ' . $id
            );
        }
    }

    /**
     * Get a satrap with a given id
     * @param integer $id
     */
    protected function getSatrapById($id) {
        $sartrap = $this->getDoctrine()
                ->getRepository('CerambyxtasyOltreeMainBundle:Satrap')
                ->find($id);

        if (!$sartrap) {
            throw $this->createNotFoundException(
                    'Aucun produit trouvé pour cet id : ' . $id
            );
        }
    }

}

?>
