<?php

namespace KlapBundle\Controller;

use KlapBundle\Entity\Integration_video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Integration_video controller.
 *
 */
class Integration_videoController extends Controller
{
    /**
     * Lists all integration_video entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $integration_videos = $em->getRepository('KlapBundle:Integration_video')->findAll();

        return $this->render('integration_video/index.html.twig', array(
            'integration_videos' => $integration_videos,
        ));
    }

    /**
     * Creates a new integration_video entity.
     *
     */
    public function newAction(Request $request)
    {
        $integration_video = new Integration_video();
        $form = $this->createForm('KlapBundle\Form\Integration_videoType', $integration_video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($integration_video);
            $em->flush($integration_video);

            return $this->redirectToRoute('integration_video_show', array('id' => $integration_video->getId()));
        }

        return $this->render('integration_video/new.html.twig', array(
            'integration_video' => $integration_video,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a integration_video entity.
     *
     */
    public function showAction(Integration_video $integration_video)
    {
        $deleteForm = $this->createDeleteForm($integration_video);

        return $this->render('integration_video/show.html.twig', array(
            'integration_video' => $integration_video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing integration_video entity.
     *
     */
    public function editAction(Request $request, Integration_video $integration_video)
    {
        $deleteForm = $this->createDeleteForm($integration_video);
        $editForm = $this->createForm('KlapBundle\Form\Integration_videoType', $integration_video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('integration_video_edit', array('id' => $integration_video->getId()));
        }

        return $this->render('integration_video/edit.html.twig', array(
            'integration_video' => $integration_video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a integration_video entity.
     *
     */
    public function deleteAction(Request $request, Integration_video $integration_video)
    {
        $form = $this->createDeleteForm($integration_video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($integration_video);
            $em->flush($integration_video);
        }

        return $this->redirectToRoute('integration_video_index');
    }

    /**
     * Creates a form to delete a integration_video entity.
     *
     * @param Integration_video $integration_video The integration_video entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Integration_video $integration_video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('integration_video_delete', array('id' => $integration_video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
