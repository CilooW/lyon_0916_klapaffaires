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

    public function videosAction()
    {

        $repository = $this->getDoctrine()->getRepository("KlapBundle:IntegrationVideo");
        $videos = $repository->findAll();

       $repository = $this->getDoctrine()->getRepository("KlapBundle:CategoryVideo");
        $elements = $repository->findAll();


        return $this->render('front/videos.html.twig', array(
           "videos" => $videos, "elements" => $elements));
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
    public function newAction($gRecaptchaResponse, $remoteIp)
    {
        $Request = $this->container->get('request_stack')->getCurrentRequest();
        $secret = '6LdV8AoUAAAAAERXn7qnXYC5zIkKpgp6eV_1I6jT';
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
        if ($resp->isSuccess()) {

        } else {
            $errors = $resp->getErrorCodes();
        }
        if ($Request->getMethod() == "POST") {
            //$Subject = $Request->get("Subject");
            $email = $Request->get("email");
            $message = $Request->get("message");
            $last_name = $Request->get("last_name");
            $first_name = $Request->get("first_name");
            $tel = $Request->get("tel");

            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('etudiants.wcs.lyon@gmail.com')
                ->setPassword('Teamsocket88');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                ->setSubject("Un nouveau message sur klapaffaires")
                ->setFrom($email)
                ->setTo('etudiants.wcs.lyon@gmail.com')
                ->setContentType("text/html")
                ->setBody('email : ' . $email . '<br />' . 'Prénom : ' . $first_name . '<br />' . 'Nom : ' . $last_name . '<br />' .
                    'N° de téléphone : ' . $tel . '<br /><br />' . $message);
            $this->get('mailer')->send($message);

        }
        return $this->render('front/contact.html.twig');
    }
}
