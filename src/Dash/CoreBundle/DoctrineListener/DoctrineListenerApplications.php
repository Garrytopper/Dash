<?php 

namespace Dash\CoreBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Dash\PortefeuilleBundle\ClientModificator\ClientModificator;
use Dash\TachesBundle\TaskCreator\TaskCreator;
use Dash\PortefeuilleBundle\Entity\Client;
use Dash\DventeBundle\GestionVente\GestionVente;


class DoctrineListenerApplications
{
    private $ClientModificator;
    private $TaskCreator;
    private $GestionVente;

    public function __construct(CLIENTMODIFICATOR $ClientModificator, TASKCREATOR $TaskCreator, GESTIONVENTE $GestionVente)
    {
        $this->ClientModificator = $ClientModificator;
        $this->TaskCreator = $TaskCreator;
        $this->GestionVente = $GestionVente;
    }

    public function PreUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $em = $args->getEntityManager();
        if ($entity instanceof CLIENT) {

            $etatSuivant = $entity->getEtat();
            $clientAvant = $entity;
            $em->refresh($clientAvant);
            $etatAvant = $clientAvant->getEtat();

            $this->TaskCreator->autoTask($entity, $em, $etatSuivant, $etatAvant);
            $this->ClientModificator->prisEnConsideration($entity, $em, $etatSuivant, $etatAvant);
            //$this->GestionVente->createDossier($entity, $em, $etatAvant, $etatSuivant);

           
        }
    }

}