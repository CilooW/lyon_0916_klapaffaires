<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 10:56
 */

namespace KlapBundle\Controller;

use KlapBundle\Entity\CategoryVideo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KlapBundle\Repository\IntegrationVideoRepository;
use KlapBundle\Entity\IntegrationVideo;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    public function indexAction()
    {

        $repository = $this->getDoctrine()->getRepository("KlapBundle:IntegrationVideo");
        $videos = $repository->getThreeLastVideo();

        $repository = $this->getDoctrine()->getRepository("KlapBundle:Testimony");
        $testimonies = $repository->getLastTestimony();

        return $this->render('front/index.html.twig',
                        array("videos" => $videos, "testimonies" => $testimonies)
        );
    }


    public function aboutUsAction()
    {
        $repository = $this->getDoctrine()->getRepository("KlapBundle:Employees");
        $employees = $repository->findAll();

        return $this->render('front/aboutus.html.twig',
                            array("employees" => $employees)
        );
    }

    public function videosAction(IntegrationVideo $integrationVideo, CategoryVideo $categoryVideo)
    {
        $repository = $this->getDoctrine()->getRepository("KlapBundle:IntegrationVideo");
        $videos = $repository->findVideoByCategoryId($integrationVideo->getId());

        $repository = $this->getDoctrine()->getRepository("KlapBundle:CategoryVideo");
        $categoryVideos = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository("KlapBundle:CategoryVideo");
        $elements = $repository->findElementById($categoryVideo->getId());

        return $this->render('front/videos.html.twig', array(
            "videos" => $videos, "categoryVideos" => $categoryVideos, "elements" => $elements));
    }

    public function videosCategoryAction()
    {
        $repository = $this->getDoctrine()->getRepository("KlapBundle:CategoryVideo");
        $categoryVideos = $repository->findAll();
        return $this->render('front/videos_category.html.twig',
            array("categoryVideos" => $categoryVideos));
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