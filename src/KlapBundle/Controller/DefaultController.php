<?php

namespace KlapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KlapBundle:Default:index.html.twig');
    }
}
