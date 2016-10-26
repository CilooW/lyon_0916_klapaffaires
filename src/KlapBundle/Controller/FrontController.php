<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 10:56
 */

namespace KlapBundle\Controller;


use KlapBundle\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('front/index.html.twig');
    }

    public function aboutUsAction()
    {
        return $this->render('front/aboutus.html.twig');
    }

    public function videosAction()
    {
        return $this->render('front/videos.html.twig');
    }

    public function videosCategoryAction()
    {
        return $this->render('front/videos_category.html.twig');
    }

    public function serviceAction()
    {
        return $this->render('front/service.html.twig');
    }

    public function contactAction()
    {
        return $this->render('front/contact.html.twig');
    }

    public function legalAction()
    {
        return $this->render('front/legal.html.twig');
    }

    public function footerAction()
    {
        return $this->render('front/footer.html.twig');
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

            return $this->redirectToRoute('front_contact', array('id' => $formulaire->getId()));
        }

        return $this->render('front/contact.html.twig', array(
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ));
    }
}