<?php

namespace Dash\DventeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dash\DventeBundle\Entity\Rcheque;
use Dash\PortefeuilleBundle\Entity\Client;
use Dash\DventeBundle\Form\RchequeType;
use Symfony\Component\HttpFoundation\Request;


class RchequeController extends Controller
{
    public function newAction($id, REQUEST $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository('DashDventeBundle:Dossier')->find($id);

        $rcheque = new Rcheque($dossier);

        $form = $this->get('form.factory')->create(RchequeType::class, $rcheque);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($rcheque);
                $em->flush();
                return $this->redirectToRoute('dash_portefeuille_listeGeneral');
            }
        }
        return $this->render('DashDventeBundle:formulaire:newRcheque.html.twig', array('form' => $form->createView()));
    }

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Rcheques = $em->getRepository('DashDventeBundle:Rcheque')->findAll();
        return $this->render('DashDventeBundle:Liste:ListeRelanceCheque.html.twig', array('Rcheques'=>$Rcheques));
    }

    public function modifAction($id, REQUEST $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Rcheque = $em->getRepository('DashDventeBundle:Rcheque')->find($id);
        $form = $this->get('form.factory')->create(RchequeType::class, $Rcheque);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
                return $this->redirectToRoute('dash_dvente_listeRcheque');
            }
        }
        return $this->render('DashDventeBundle:Formulaire:modifRcheque.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Rcheque = $em->getRepository('DashDventeBundle:Rcheque')->find($id);
        $em->remove($Rcheque);
        $em->flush();
        return $this->redirectToRoute('dash_dvente_listeRcheque');
    }
}