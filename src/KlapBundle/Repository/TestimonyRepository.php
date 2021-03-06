<?php

namespace KlapBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TestimonyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TestimonyRepository extends EntityRepository
{
    public function getLastTestimony()
    {
        $query = $this->createQueryBuilder('t')
                        ->orderBy('t.id', 'DESC')
                        ->setMaxResults(1)
                        ->getQuery();

        return $query->getResult();
    }


}
