<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 12/10/16
 * Time: 14:50
 */

namespace KlapBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function categoryAction()
    {
        return $this->render('front/category.html.twig');
    }

    public function contact()
    {
        return $this->render('front/contact.html.twig');
    }
}