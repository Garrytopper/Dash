<?php

namespace Dash\DventeBundle\Repository;

use Dash\PortefeuilleBundle\Entity\Client;
/**
 * DossierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DossierRepository extends \Doctrine\ORM\EntityRepository
{

public function getDossier(CLIENT $client)
{
    $qb = $this->createQueryBuilder('d');
    $qb->Where('d.client = :client')
        ->setParameter('client', $client);
    return $qb->getQuery()->getOneOrNullResult();
}

}
