<?php

namespace KlapBundle\Controller;

use KlapBundle\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Formulaire controller.
 *
 */
class FormulaireController extends Controller
{
    /**
     * Lists all formulaire entities.
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
     * Creates a new formulaire entity.
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
            $em->flush($formulaire);

            return $this->redirectToRoute('formulaire_show', array('id' => $formulaire->getId()));
        }

        return $this->render('formulaire/new.html.twig', array(
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formulaire entity.
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
     * Displays a form to edit an existing formulaire entity.
     *
     */
    public function editAction(Request $request, Formulaire $formulaire)
    {
        $deleteForm = $this->createDeleteForm($formulaire);
        $editForm = $this->createForm('KlapBundle\Form\FormulaireType', $formulaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formulaire_edit', array('id' => $formulaire->getId()));
        }

        return $this->render('formulaire/edit.html.twig', array(
            'formulaire' => $formulaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formulaire entity.
     *
     */
    public function deleteAction(Request $request, Formulaire $formulaire)
    {
        $form = $this->createDeleteForm($formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formulaire);
            $em->flush($formulaire);
        }

        return $this->redirectToRoute('formulaire_index');
    }

    /**
     * Creates a form to delete a formulaire entity.
     *
     * @param Formulaire $formulaire The formulaire entity
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
