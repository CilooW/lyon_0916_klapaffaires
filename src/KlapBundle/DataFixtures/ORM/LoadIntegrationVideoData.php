<?php

/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 25/10/16
 * Time: 14:30
 */

namespace KlapBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use KlapBundle\Entity\IntegrationVideo;

class LoadIntegrationVideoData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
       $videos= array(
            array("https://www.youtube.com/watch?v=p6wBjHK50bk", "Wyrmking", "01/10/2016"),
            array("https://www.youtube.com/watch?v=-L-r0BfmlcM", "doudou", "11/10/2016"),
            array("https://www.youtube.com/watch?v=J0NJ-2f66NQ", "Le", "12/11/2016"),
        );

        foreach ($videos as $video) {
            $videoObj = new IntegrationVideo();
            $videoObj->setIframe($video[0]);
            $videoObj->setDescription($video[1]);
            $videoObj->setAddDate($video[2]);

            $manager->persist($videoObj);
            unset($videoObj);
        }

        $manager->flush();
        $manager->clear();

    }
}