<?php

namespace KlapBundle\Controller;

use KlapBundle\Entity\category_video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Category_video controller.
 *
 */
class category_videoController extends Controller
{
    /**
     * Lists all category_video entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $category_videos = $em->getRepository('KlapBundle:category_video')->findAll();

        return $this->render('category_video/index.html.twig', array(
            'category_videos' => $category_videos,
        ));
    }

    /**
     * Creates a new category_video entity.
     *
     */
    public function newAction(Request $request)
    {
        $category_video = new Category_video();
        $form = $this->createForm('KlapBundle\Form\category_videoType', $category_video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category_video);
            $em->flush($category_video);

            return $this->redirectToRoute('category_video_show', array('id' => $category_video->getId()));
        }

        return $this->render('category_video/new.html.twig', array(
            'category_video' => $category_video,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a category_video entity.
     *
     */
    public function showAction(category_video $category_video)
    {
        $deleteForm = $this->createDeleteForm($category_video);

        return $this->render('category_video/show.html.twig', array(
            'category_video' => $category_video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing category_video entity.
     *
     */
    public function editAction(Request $request, category_video $category_video)
    {
        $deleteForm = $this->createDeleteForm($category_video);
        $editForm = $this->createForm('KlapBundle\Form\category_videoType', $category_video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_video_edit', array('id' => $category_video->getId()));
        }

        return $this->render('category_video/edit.html.twig', array(
            'category_video' => $category_video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a category_video entity.
     *
     */
    public function deleteAction(Request $request, category_video $category_video)
    {
        $form = $this->createDeleteForm($category_video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category_video);
            $em->flush($category_video);
        }

        return $this->redirectToRoute('category_video_index');
    }

    /**
     * Creates a form to delete a category_video entity.
     *
     * @param category_video $category_video The category_video entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(category_video $category_video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_video_delete', array('id' => $category_video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
