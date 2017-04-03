<?php

namespace Dash\PortefeuilleBundle\ClientModificator;

use Dash\PortefeuilleBundle\Entity\Client;
use Doctrine\ORM\EntityManager;

class ClientModificator
{
    public function prisEnConsideration(CLIENT $client, EntityManager $em, $etatSuivant, $etatAvant)
    {
        if ($etatAvant == "Decouverte" && ($etatSuivant == "Retour" || $etatSuivant == "Vendu" || $etatSuivant == "Perdu" || $etatSuivant == "Relance")) {
            $client->setDossierOuvert(true);
        }
        if($etatSuivant == "Vendu" || $etatSuivant == "Perdu")
        {
            $client->setDateCloture(new \Datetime('now'));
        }
    }
}