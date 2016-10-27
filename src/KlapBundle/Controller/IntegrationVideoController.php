<?php

namespace KlapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KlapBundle\Entity\IntegrationVideo;
use KlapBundle\Form\IntegrationVideoType;

/**
 * IntegrationVideo controller.
 *
 */
class IntegrationVideoController extends Controller
{
    /**
     * Lists all IntegrationVideo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $integrationVideos = $em->getRepository('KlapBundle:IntegrationVideo')->GetThreeLastVideo($em);
        $showvideosbycategory = $em->getRepository('KlapBundle:IntegrationVideo')->i($em);

        return $this->render('integrationvideo/index.html.twig', array(
            'integrationVideos' => $integrationVideos,
            'showvideosbycategory' => $showvideosbycategory,
        ));
    }

    /**
     * Creates a new IntegrationVideo entity.
     *
     */
    public function newAction(Request $request)
    {
        $integrationVideo = new IntegrationVideo();
        $form = $this->createForm('KlapBundle\Form\IntegrationVideoType', $integrationVideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($integrationVideo);
            $em->flush();

            return $this->redirectToRoute('integrationvideo_show', array('id' => $integrationVideo->getId()));
        }

        return $this->render('integrationvideo/new.html.twig', array(
            'integrationVideo' => $integrationVideo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a IntegrationVideo entity.
     *
     */
    public function showAction(IntegrationVideo $integrationVideo)
    {
        $deleteForm = $this->createDeleteForm($integrationVideo);

        return $this->render('integrationvideo/show.html.twig', array(
            'integrationVideo' => $integrationVideo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing IntegrationVideo entity.
     *
     */
    public function editAction(Request $request, IntegrationVideo $integrationVideo)
    {
        $deleteForm = $this->createDeleteForm($integrationVideo);
        $editForm = $this->createForm('KlapBundle\Form\IntegrationVideoType', $integrationVideo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($integrationVideo);
            $em->flush();

            return $this->redirectToRoute('integrationvideo_edit', array('id' => $integrationVideo->getId()));
        }

        return $this->render('integrationvideo/edit.html.twig', array(
            'integrationVideo' => $integrationVideo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a IntegrationVideo entity.
     *
     */
    public function deleteAction(Request $request, IntegrationVideo $integrationVideo)
    {
        $form = $this->createDeleteForm($integrationVideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($integrationVideo);
            $em->flush();
        }

        return $this->redirectToRoute('integrationvideo_index');
    }

    /**
     * Creates a form to delete a IntegrationVideo entity.
     *
     * @param IntegrationVideo $integrationVideo The IntegrationVideo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IntegrationVideo $integrationVideo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('integrationvideo_delete', array('id' => $integrationVideo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
