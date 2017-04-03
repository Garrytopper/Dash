<?php

namespace Dash\DventeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dash\DventeBundle\Entity\Dossier;
use Dash\DventeBundle\Form\DossierType;
use Symfony\Component\HttpFoundation\Request;
use Dash\PortefeuilleBundle\Entity\Client;

class DventeController extends Controller
{
    public function newAction($id, REQUEST $request)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('DashPortefeuilleBundle:Client')->find($id);
        $dVente = new Dossier($client);
        $form = $this->get('form.factory')->create(DossierType::class, $dVente);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $form = $request->request->get('dash_dventebundle_dossier');
                $dVente->setClient($client);
                $em->persist($dVente);
                $em->flush();
                if(isset($form['rcheque']))
                {
                    return $this->redirectToRoute('dash_dvente_new_rcheque', array('id'=>$id));
                }
                return $this->redirectToRoute('dash_core_homepage');
            }
        }
        return $this->render('DashDventeBundle:formulaire:new.html.twig', array('form' => $form->createView(), 'client' => $client));
    }

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $dossierVentes = $em->getRepository('DashDventeBundle:Dossier')->findAll();
        return $this->render('DashDventeBundle:Liste:ListeDossierVente.html.twig', array('Dventes' => $dossierVentes));
    }

    public function modifAction($id, REQUEST $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Dclient = $em->getRepository('DashDventeBundle:Dossier')->find($id);
        $form = $this->get('form.factory')->create(DossierType::class, $Dclient);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
                return $this->redirectToRoute('dash_dvente_liste');
            }
        }
        return $this->render('DashDventeBundle:Formulaire:modif.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository('DashDventeBundle:Dossier')->find($id);
        $client = $dossier->getClient();
        $tachesClient = $em->getRepository('DashTachesBundle:Task')->findBy(array('client'=> $client));
        foreach ($tachesClient as $tache) {
            $em->remove($tache);
        }
        $relCheq = $em->getRepository('DashDventeBundle:Rcheque')->findOneBy(array('dossier'=> $dossier));
        if ($relCheq != null) {
            $em->remove($relCheq);
        }
        $em->remove($dossier);
        $em->flush();
        return $this->redirectToRoute('dash_dvente_liste');
    }

}
