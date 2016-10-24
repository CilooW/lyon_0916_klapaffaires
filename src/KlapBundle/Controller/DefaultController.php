<?php

namespace KlapBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KlapBundle:Default:index.html.twig');
    }

    /**
     * @return Response
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
