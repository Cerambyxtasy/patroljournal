<?php

namespace Cerambyxtasy\Oltree\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry;
use Cerambyxtasy\Oltree\MainBundle\Form\JournalEntryType;

/**
 * JournalEntry controller.
 *
 */
class JournalEntryController extends Controller
{

    /**
     * Lists all JournalEntry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->findAll();

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new JournalEntry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new JournalEntry();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('journalentry_show', array('id' => $entity->getId())));
        }

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a JournalEntry entity.
    *
    * @param JournalEntry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(JournalEntry $entity)
    {
        $form = $this->createForm(new JournalEntryType(), $entity, array(
            'action' => $this->generateUrl('journalentry_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new JournalEntry entity.
     *
     */
    public function newAction()
    {
        $entity = new JournalEntry();
        $form   = $this->createCreateForm($entity);

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a JournalEntry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JournalEntry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing JournalEntry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JournalEntry entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a JournalEntry entity.
    *
    * @param JournalEntry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(JournalEntry $entity)
    {
        $form = $this->createForm(new JournalEntryType(), $entity, array(
            'action' => $this->generateUrl('journalentry_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing JournalEntry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JournalEntry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('journalentry_edit', array('id' => $id)));
        }

        return $this->render('CerambyxtasyOltreeMainBundle:JournalEntry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a JournalEntry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CerambyxtasyOltreeMainBundle:JournalEntry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find JournalEntry entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('journalentry'));
    }

    /**
     * Creates a form to delete a JournalEntry entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('journalentry_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
