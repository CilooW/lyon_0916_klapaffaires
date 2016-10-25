<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 10:56
 */

namespace KlapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoryVideos = $em->getRepository('KlapBundle:CategoryVideo')->findAll();

        return $this->render('front/videos.html.twig', array(
            'categoryVideos' => $categoryVideos,
        ));
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

    public function contact()
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

}