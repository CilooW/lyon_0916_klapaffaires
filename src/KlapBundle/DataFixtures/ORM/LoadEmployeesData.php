<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 26/10/16
 * Time: 10:12
 */

namespace KlapBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use KlapBundle\Entity\Employees;

class LoadEmployeesData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $employees = array(
            array("remi", "rebeil", "blabla", "https://www.youtube.com/watch?v=HeNURpr3vaw"),
            array("christophe", "lacassagne", "blathrhe", "https://www.youtube.com/watch?v=Ua4XhSoEQZ0"),
            array("delphine", "janton", "zdfsdf", "https://www.youtube.com/watch?v=DD7hm67cfbc"),
        );

     foreach ($employees as $employee) {
         $employeeObj = new Employees();
         $employeeObj->setFirstName($employee[0]);
         $employeeObj->setLastName($employee[1]);
         $employeeObj->setVideoDescription($employee[2]);
         $employeeObj->setVideoUrl($employee[3]);

         $manager->persist($employeeObj);
         unset($employeeObj);
     }
        $manager->flush();
        $manager->clear();
    }
}