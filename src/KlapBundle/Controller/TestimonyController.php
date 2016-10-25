<?php

namespace KlapBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KlapBundle\Entity\Testimony;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use KlapBundle\Form\TestimonyType;
use Symfony\Component\HttpFoundation\File\File;



/**
 * Testimony controller.
 *
 */
class TestimonyController extends Controller
{
    /**
     * Lists all testimony entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $testimonies = $em->getRepository('KlapBundle:Testimony')->findAll();

        return $this->render('testimony/index.html.twig', array(
            'testimonies' => $testimonies,
        ));
    }

    /**
     * Creates a new testimony entity.
     *
     */
    public function newAction(Request $request)
    {
        $testimony = new Testimony();
        $form = $this->createForm('KlapBundle\Form\TestimonyType', $testimony);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $testimony->getWPicturePath();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('wpictures_directory'),
                $fileName
            );


            $testimony->setWPicturePath($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($testimony);
            $em->flush($testimony);

            return $this->redirect($this->generateUrl('testimony_new'));
        }

        return $this->render('testimony/new.html.twig', array(
            'testimony' => $testimony,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a testimony entity.
     *
     */
    public function showAction(Testimony $testimony)
    {
        $deleteForm = $this->createDeleteForm($testimony);

        return $this->render('testimony/show.html.twig', array(
            'testimony' => $testimony,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing testimony entity.
     *
     */
    public function editAction(Request $request, Testimony $testimony)
    {
        $deleteForm = $this->createDeleteForm($testimony);
        $editForm = $this->createForm('KlapBundle\Form\TestimonyType', $testimony);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('testimony_edit', array('id' => $testimony->getId()));
        }

        return $this->render('testimony/edit.html.twig', array(
            'testimony' => $testimony,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a testimony entity.
     *
     */
    public function deleteAction(Request $request, Testimony $testimony)
    {
        $form = $this->createDeleteForm($testimony);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($testimony);
            $em->flush($testimony);
        }

        return $this->redirectToRoute('testimony_index');
    }

    /**
     * Creates a form to delete a testimony entity.
     *
     * @param Testimony $testimony The testimony entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Testimony $testimony)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('testimony_delete', array('id' => $testimony->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
