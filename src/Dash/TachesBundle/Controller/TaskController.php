<?php 

namespace Dash\TachesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Dash\TachesBundle\Entity\Task;
use Dash\TachesBundle\Form\TaskType;

class TaskController extends Controller
{
    public function newAction(REQUEST $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tache = new Task();
        $form = $this->get('form.factory')->create(TaskType::class, $tache);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($tache);
                $em->flush();
                return $this->redirectToRoute('dash_taches_new');
            }
        }
        return $this->render('DashTachesBundle:formulaire:new.html.twig', array('form' => $form->createView()));
    }

   public function listeGlobalAction()
   {
        $em = $this->getDoctrine()->getManager();
        $tachesR = $em->getRepository('DashTachesBundle:Task');
        $taches = $tachesR->findAll();
        $Dessin = $tachesR->Dessin();
        $Ptech = $tachesR->Ptech();
        $Dmetre = $tachesR->Dmetre();
        $Dpose = $tachesR->Dpose();
        $Rcheque = $tachesR->Rcheque();
        $Faccompte = $tachesR->Faccompte();
        $App = $tachesR->App();
        $Commander = $tachesR->Command();
        $Autre = $tachesR->Autre();

        return $this->render('DashTachesBundle:liste:listeGlobal.html.twig', array('taches' => $taches,
                                                                                    'Dessin' => $Dessin,
                                                                                    'Ptech' => $Ptech,
                                                                                    'Dmetre' => $Dmetre,
                                                                                    'Dpose' => $Dpose,
                                                                                    'Rcheque' => $Rcheque,
                                                                                    'Faccompte' => $Faccompte,
                                                                                    'App' => $App,
                                                                                    'Autre' => $Autre,
                                                                                    'Command' => $Commander));
   }

   public function modifAction(REQUEST $request, $id)
   {
        $em = $this->getDoctrine()->getManager();
        $tache = $em->getRepository('DashTachesBundle:Task')->find($id);
        $form = $this->get('form.factory')->create(TaskType::class, $tache);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
                return $this->redirectToRoute('dash_taches_liste');
            }
        }
        return $this->render('DashTachesBundle:formulaire:modif.html.twig', array('form' => $form->createView(), 'id' => $id));
   }
   
   public function suppAction($id)
   {
        $em = $this->getDoctrine()->getManager();
        $tache = $em->getRepository('DashTachesBundle:Task')->find($id);
        $em->remove($tache);
        $em->flush();
        return $this->redirectToRoute('dash_taches_liste');
   }

   public function testAction()
   {
        
   }
}
