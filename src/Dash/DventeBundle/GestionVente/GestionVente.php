<?php

namespace Dash\DventeBundle\GestionVente;

use Dash\PortefeuilleBundle\Entity\Client;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GestionVente
{
    private $router;

    public function __construct($router)
    {
        // Je récupère le service router
        $this->router = $router;
    }

    public function createDossier(CLIENT $client, EntityManager $em, $etatAvant, $etatSuivant)
    {
        if($etatSuivant == "Vendu")
        {
          
        }
    }
}