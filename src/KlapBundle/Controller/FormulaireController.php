<?php

namespace KlapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KlapBundle\Entity\Formulaire;
use KlapBundle\Form\FormulaireType;

/**
 * Formulaire controller.
 *
 */
class FormulaireController extends Controller
{
    /**
     * Lists all Formulaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formulaires = $em->getRepository('KlapBundle:Formulaire')->findAll();

        return $this->render('formulaire/index.html.twig', array(
            'formulaires' => $formulaires,
        ));
    }

    /**
     * Creates a new Formulaire entity.
     *
     */
    public function newAction(Request $request)
    {
        $formulaire = new Formulaire();
        $form = $this->createForm('KlapBundle\Form\FormulaireType', $formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulaire);
            $em->flush();

            return $this->redirectToRoute('formulaire_show', array('id' => $formulaire->getId()));
        }

        return $this->render('formulaire/new.html.twig', array(
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formulaire entity.
     *
     */
    public function showAction(Formulaire $formulaire)
    {
        $deleteForm = $this->createDeleteForm($formulaire);

        return $this->render('formulaire/show.html.twig', array(
            'formulaire' => $formulaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formulaire entity.
     *
     */
    public function editAction(Request $request, Formulaire $formulaire)
    {
        $deleteForm = $this->createDeleteForm($formulaire);
        $editForm = $this->createForm('KlapBundle\Form\FormulaireType', $formulaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulaire);
            $em->flush();

            return $this->redirectToRoute('formulaire_edit', array('id' => $formulaire->getId()));
        }

        return $this->render('formulaire/edit.html.twig', array(
            'formulaire' => $formulaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formulaire entity.
     *
     */
    public function deleteAction(Request $request, Formulaire $formulaire)
    {
        $form = $this->createDeleteForm($formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formulaire);
            $em->flush();
        }

        return $this->redirectToRoute('formulaire_index');
    }

    /**
     * Creates a form to delete a Formulaire entity.
     *
     * @param Formulaire $formulaire The Formulaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formulaire $formulaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formulaire_delete', array('id' => $formulaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
