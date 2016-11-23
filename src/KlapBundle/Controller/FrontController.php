<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 10:56
 */

namespace KlapBundle\Controller;


use KlapBundle\Entity\Formulaire;


use KlapBundle\Entity\CategoryVideo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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


    public function videosAction(CategoryVideo $categoryVideo)
    {


        $repository = $this->getDoctrine()->getRepository("KlapBundle:CategoryVideo");
        $elements = $repository->findAll();

        return $this->render('front/videos.html.twig', array(

            "videos" => $categoryVideo->getIntegrationVideo(),
            "elements" => $elements,
        ));
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
    public function newAction($gRecaptchaResponse, $remoteIp, Request $request)
    {
        $session = $request->getSession();
        $secret = '6LdV8AoUAAAAAERXn7qnXYC5zIkKpgp6eV_1I6jT';
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
        if (!$resp->isSuccess()) {
            $errors = $resp->getErrorCodes();
        }
        if ($request->getMethod() == "POST") {
            //$Subject = $Request->get("Subject");
            $email = $request->get("email");
            $message = $request->get("message");
            $last_name = $request->get("last_name");
            $first_name = $request->get("first_name");
            $society = $request->get("society");

            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('info@klapaffaires.fr')
                ->setPassword(' ');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                ->setSubject("Un nouveau message sur klapaffaires")
                ->setFrom('info@klapaffaires.fr')
                ->setTo('info@klapaffaires.fr')
                ->setContentType("text/html")
                ->setBody('email : ' . $email . '<br />' . 'Prénom : ' . $first_name . '<br />' . 'Nom : ' . $last_name . '<br />' .
                    'Nom de la société: ' . $society . '<br /><br />' . $message);
            $mailer->send($message);
            $session->getFlashBag()->add('info', 'Votre message a bien été envoyé');

        }
        return $this->render('front/contact.html.twig');
    }
}
