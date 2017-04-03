<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // dash_taches_homepage
        if (rtrim($pathinfo, '/') === '/ListeDeTache') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dash_taches_homepage');
            }

            return array (  '_controller' => 'DashTachesBundle:Default:index',  '_route' => 'dash_taches_homepage',);
        }

        // dash_portefeuille_homepage
        if (rtrim($pathinfo, '/') === '/Portefeuille') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dash_portefeuille_homepage');
            }

            return array (  '_controller' => 'DashPortefeuilleBundle:Default:index',  '_route' => 'dash_portefeuille_homepage',);
        }

        // dash_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dash_core_homepage');
            }

            return array (  '_controller' => 'Dash\\CoreBundle\\Controller\\CoreController::indexAction',  '_route' => 'dash_core_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
