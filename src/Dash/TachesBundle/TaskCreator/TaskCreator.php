<?php

namespace Dash\TachesBundle\TaskCreator;

use Dash\TachesBundle\Entity\Task;
use Dash\PortefeuilleBundle\Entity\Client;
use Doctrine\ORM\EntityManager;

class TaskCreator
{
    private $task;
    private $etat;
    private $etatAvant;
    private $client;

    
    public function autoTask(CLIENT $client, EntityManager $em, $etatSuivant, $etatAvant)
    { 
        if ($etatSuivant == 'Retour' && ($etatAvant == 'Relance' || $etatAvant == 'Decouverte')) {     
           $this->Dessin($client, $em);
        }
    }

    private function Dessin(CLIENT $client, EntityManager $em)
    {
        $task = new Task();
        $task->setClient($client);
        $task->setTache('Dessin');
        $task->setDescription($client->getNom());
        $em->persist($task);
        $em->flush();
    }

    public function PlanTech(CLIENT $client, EntityManager $em)
    {
        $task = new Task();
        $task->setClient($client);
        $task->setTache('Plan tech');
        $task->setDescription($client->getNom());
        $em->persist($task);
        $em->flush();
    }
}