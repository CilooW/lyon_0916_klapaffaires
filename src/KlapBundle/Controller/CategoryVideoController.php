<?php

namespace KlapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KlapBundle\Entity\CategoryVideo;
use KlapBundle\Form\CategoryVideoType;

/**
 * CategoryVideo controller.
 *
 */
class CategoryVideoController extends Controller
{
    /**
     * Lists all CategoryVideo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoryVideos = $em->getRepository('KlapBundle:CategoryVideo')->findAll();

        return $this->render('categoryvideo/index.html.twig', array(
            'categoryVideos' => $categoryVideos,
        ));
    }

    /**
     * Creates a new CategoryVideo entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoryVideo = new CategoryVideo();
        $form = $this->createForm('KlapBundle\Form\CategoryVideoType', $categoryVideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryVideo);
            $em->flush();

            return $this->redirectToRoute('categoryvideo_show', array('id' => $categoryVideo->getId()));
        }

        return $this->render('categoryvideo/new.html.twig', array(
            'categoryVideo' => $categoryVideo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoryVideo entity.
     *
     */
    public function showAction(CategoryVideo $categoryVideo)
    {
        $deleteForm = $this->createDeleteForm($categoryVideo);

        return $this->render('categoryvideo/show.html.twig', array(
            'categoryVideo' => $categoryVideo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CategoryVideo entity.
     *
     */
    public function editAction(Request $request, CategoryVideo $categoryVideo)
    {
        $deleteForm = $this->createDeleteForm($categoryVideo);
        $editForm = $this->createForm('KlapBundle\Form\CategoryVideoType', $categoryVideo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryVideo);
            $em->flush();

            return $this->redirectToRoute('categoryvideo_edit', array('id' => $categoryVideo->getId()));
        }

        return $this->render('categoryvideo/edit.html.twig', array(
            'categoryVideo' => $categoryVideo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CategoryVideo entity.
     *
     */
    public function deleteAction(Request $request, CategoryVideo $categoryVideo)
    {
        $form = $this->createDeleteForm($categoryVideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryVideo);
            $em->flush();
        }

        return $this->redirectToRoute('categoryvideo_index');
    }

    /**
     * Creates a form to delete a CategoryVideo entity.
     *
     * @param CategoryVideo $categoryVideo The CategoryVideo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategoryVideo $categoryVideo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoryvideo_delete', array('id' => $categoryVideo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
