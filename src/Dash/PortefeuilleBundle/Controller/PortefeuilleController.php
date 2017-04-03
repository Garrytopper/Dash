<?php

namespace Dash\PortefeuilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Dash\PortefeuilleBundle\Entity\Client;
use Dash\PortefeuilleBundle\Form\ClientNewType;
use Dash\PortefeuilleBundle\Form\ClientIntType;

class PortefeuilleController extends Controller
{
    public function nouveauAction(Request $request)
    {
        $client = new Client();
        $form = $this->get('form.factory')->create(ClientNewType::class, $client);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
                return $this->redirectToRoute('dash_portefeuille_listeGeneral');
            }
        }
        return $this->render('DashPortefeuilleBundle:formulaire:newClient.html.twig', array('form' => $form->createView()));
    }

    public function listeGeneralAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clientRepository = $em->getRepository('DashPortefeuilleBundle:Client');
        $todayCustomer = $clientRepository->todayRdv();
        $allCustomer = $clientRepository->myFindall();
        $pastCustomers = $clientRepository->pastCustomer();
        return $this->render('DashPortefeuilleBundle:liste:general.html.twig', array('todayCustomer' => $todayCustomer, 'allCustomer' => $allCustomer, 'pastCustomers' => $pastCustomers));
    }

    public function modifAction(REQUEST $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $clientRepository = $em->getRepository('DashPortefeuilleBundle:Client');
        $client = $clientRepository->find($id);
        $form = $this->get('form.factory')->create(ClientIntType::class, $client);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $post = $request->request->get('dash_portefeuillebundle_client');
                $etat = $post['etat'];
                if ($etat == "Vendu") {
                    $taskCreator = $this->get('dash_taches.task_creator');
                    $taskCreator->PlanTech($client, $em);
                    return $this->redirectToRoute('dash_dvente_new', array('id' => $id));
                }
                else{
                    $em->flush();
                    return $this->redirectToRoute('dash_portefeuille_listeGeneral');
                }
                
            }
        }
        return $this->render('DashPortefeuilleBundle:formulaire:modif.html.twig', array('form' => $form->createView(),
                                                                                        'id' => $id));
    }

    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('DashPortefeuilleBundle:Client')->find($id);
        $tachesClient = $em->getRepository('DashTachesBundle:Task')->findBy(array('client' => $client));
        $dossierVente = $em->getRepository('DashDventeBundle:Dossier')->getDossier($client);
        if ($dossierVente != null) {
            return $this->render('DashDventeBundle:Erreur:DossierExistant.html.twig', array('client' => $client));
        }
        foreach ($tachesClient as $tacheClient) {
            $em->remove($tacheClient);
        }
        $em->flush();
        $em->remove($client);
        $em->flush();
        return $this->redirectToRoute('dash_portefeuille_listeGeneral');
    }
}
