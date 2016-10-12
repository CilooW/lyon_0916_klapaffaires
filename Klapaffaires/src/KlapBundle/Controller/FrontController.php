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
}