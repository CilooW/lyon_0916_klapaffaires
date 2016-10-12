<?php

namespace KlapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $t_his->render('KlapBundle:Default:index.html.twig');
    }
}
