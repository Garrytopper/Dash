<?php

namespace Dash\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dash\CoreBundle\Form\ObjectifType;
use Dash\CoreBundle\Entity\Objectif;
use Symfony\Component\HttpFoundation\Request;


class CoreController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $thisMonth = new \Datetime(date('M'));
        $today = new \Datetime(date('D'));

        $clients = $em->getRepository('DashPortefeuilleBundle:Client');
        $Objectifs = $em->getRepository('DashCoreBundle:Objectif');
        // Je récupère les clients dont le RDV est prit pour le mois en cours
        $clientMens = $clients->thisMonth();
        // Je récupère les clients vendu pendant le mois en cours
        $clientVenduThisMonth = $clients->venteDuMois();
        // Je récupère les clients perdu pendant le mois en cours
        $clientPerduThisMonth = $clients->perduDuMois();
        // Je récupère les clients créé pendant le mois en cours
        $clientOuvertThisMonth = $clients->ouvertureDuMois();
        // Je récupère les clients à relancer pendant le mois en cours
        $clientRelanceThisMonth = $clients->relanceDuMois();
        // Je récupère les découvertes pendant le mois en cours
        $clientDecouverteThisMonth = $clients->decouverteDuMois();
        // Je récupère les retour pendant le mois en cours 
        $clientRetourThisMonth = $clients->retourDuMois();
        // Je fais la somme des budgets client en retour du mois en cours
        $CaPortefeuille = $clients->CA($clientRetourThisMonth);
        // Je récupère mes retours de la journée
        $clientRetourToday = $clients->retourToday();
        // Je récupère mes découvertes de la journée
        $clientDecouverteToday = $clients->decouverteToday();
        // Je récupère mes relance de la journée
        $clientRelanceToday = $clients->relanceToday();
        // Je récupère mes tâches
        $tachesRep = $em->getRepository('DashTachesBundle:Task');
        // Je récupère mes tâches standards 
        $tachesStandard = $tachesRep->standard();
        // Je récupère mes tâches prioritaires
        $tachesPrioritaire = $tachesRep->prioritaire();
        // Je récupère les clients à redéfini
        $PastClient = $clients->pastCustomer();



        // Je traite mes objectifs
        // je récupère le CA déclaré comme objectif pour le moi en cours
        $mensObjectif = $Objectifs->findObjectif($thisMonth);
        if ($mensObjectif === null) {
        $mensObjectif = new Objectif();    
        }
        $CaObjectifMens = $mensObjectif->getCa();
        // Je récupère le mois de l'objectif
        $momentObjectif = $mensObjectif->getMoment();
        // Je récupère le chiffre d'affaire réel actuel
        $caReel = $mensObjectif->getCaReel();
        // Je définis le chiffre d'affaire potentiel = CAportefeuille * txConcret / (1+txTva)
        $txConcret = $mensObjectif->getTxConcret();
        $tva = $mensObjectif->getTva();
        $caPotentiel = $caReel + $CaPortefeuille * $txConcret / (1+$tva);
        // Je détermine le chiffre d'affaire manquant dans mon portefeuille pour atteindre mon objectif
        $PortefObj = ($CaObjectifMens - ((($CaPortefeuille * $txConcret) / (1 + $tva)) + $caReel)) / $txConcret * (1 + $tva);    //$caReel) / $txConcret / (1-$tva) - $CaPortefeuille * $txConcret * (1-$tva) ;
        // Je détermine en fonction du panier moyen et du taux de concret, le nombre de rendez vous que je dois prendre pour atteindre l'objectif
        $PanierMoy = $mensObjectif->getPanierMoyen();
        $NbRdvAPrendre = $PortefObj / $PanierMoy;




        return $this->render('DashCoreBundle::coreLayout.html.twig', array('CaPortefeuille' => $CaPortefeuille, 
                                                                            'CaObjectif' => $CaObjectifMens,
                                                                            'MomentObjectif' => $momentObjectif,
                                                                            'CaPotentiel' => $caPotentiel,
                                                                            'VenteDuMois' => $clientVenduThisMonth, 
                                                                            'PerteDuMois' => $clientPerduThisMonth,
                                                                            'OuvertureDuMois' => $clientOuvertThisMonth,
                                                                            'RelanceDuMois' => $clientRelanceThisMonth,
                                                                            'DecouverteDuMois' => $clientDecouverteThisMonth,
                                                                            'RetourDuMois' => $clientRetourThisMonth,
                                                                            'CaReel' => $caReel,
                                                                            'PorteObj'=> $PortefObj,
                                                                            'NbRdvAPrendre' => $NbRdvAPrendre,
                                                                            'ClientRetourToday' => $clientRetourToday,
                                                                            'ClientDecourverteToday' => $clientDecouverteToday,
                                                                            'ClientRelanceToday' => $clientRelanceToday,
                                                                            'TachesStandard' => $tachesStandard,
                                                                            'TachesPrioritaire' => $tachesPrioritaire,
                                                                            'Today' => $today,
                                                                            'PastClient' => $PastClient));
    }

    public function objectifAction(REQUEST $request)
    {
        $thisMonth = new \Datetime(date('M'));
        $em = $this->getDoctrine()->getManager();
        $objectifs = $em->getRepository('DashCoreBundle:Objectif');
        $objectifMonth = $objectifs->findObjectif($thisMonth);
        if ($objectifMonth === null) {
            $objectifMonth = new Objectif();
        }
        $form = $this->get('form.factory')->create(ObjectifType::class, $objectifMonth);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
               $em->persist($objectifMonth);
               $em->flush();
               return $this->redirectToRoute('dash_core_homepage');
            }
        }
        return $this->render('DashCoreBundle:objectif:objectif.html.twig', array('form' => $form->createView()));
    }
}
