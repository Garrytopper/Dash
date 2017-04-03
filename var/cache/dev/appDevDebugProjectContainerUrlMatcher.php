<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // dash_dvente_new
        if (0 === strpos($pathinfo, '/newDossier') && preg_match('#^/newDossier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_new')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\DventeController::newAction',));
        }

        if (0 === strpos($pathinfo, '/Dvente')) {
            // dash_dvente_liste
            if ($pathinfo === '/DventeListe') {
                return array (  '_controller' => 'Dash\\DventeBundle\\Controller\\DventeController::listeAction',  '_route' => 'dash_dvente_liste',);
            }

            // dash_dvente_modif
            if (0 === strpos($pathinfo, '/DventeModif') && preg_match('#^/DventeModif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_modif')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\DventeController::modifAction',));
            }

            // dash_dvente_supp
            if (0 === strpos($pathinfo, '/DventeSupp') && preg_match('#^/DventeSupp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_supp')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\DventeController::suppAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Rcheque')) {
            // dash_dvente_new_rcheque
            if (0 === strpos($pathinfo, '/Rcheque/new') && preg_match('#^/Rcheque/new/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_new_rcheque')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\RchequeController::newAction',));
            }

            // dash_dvente_listeRcheque
            if ($pathinfo === '/RchequeListe') {
                return array (  '_controller' => 'Dash\\DventeBundle\\Controller\\RchequeController::listeAction',  '_route' => 'dash_dvente_listeRcheque',);
            }

            // dash_dvente_modif_rcheque
            if (0 === strpos($pathinfo, '/Rcheque/modif') && preg_match('#^/Rcheque/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_modif_rcheque')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\RchequeController::modifAction',));
            }

            // dash_dvente_supp_rcheque
            if (0 === strpos($pathinfo, '/Rcheque/supp') && preg_match('#^/Rcheque/supp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_dvente_supp_rcheque')), array (  '_controller' => 'Dash\\DventeBundle\\Controller\\RchequeController::suppAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ListeDeTache')) {
            // dash_taches_new
            if ($pathinfo === '/ListeDeTache/new') {
                return array (  '_controller' => 'Dash\\TachesBundle\\Controller\\TaskController::newAction',  '_route' => 'dash_taches_new',);
            }

            // dash_taches_liste
            if ($pathinfo === '/ListeDeTache/listeGlobal') {
                return array (  '_controller' => 'Dash\\TachesBundle\\Controller\\TaskController::listeGlobalAction',  '_route' => 'dash_taches_liste',);
            }

            // dash_taches_modif
            if (0 === strpos($pathinfo, '/ListeDeTache/modif') && preg_match('#^/ListeDeTache/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_taches_modif')), array (  '_controller' => 'Dash\\TachesBundle\\Controller\\TaskController::modifAction',));
            }

            // dash_taches_supp
            if (0 === strpos($pathinfo, '/ListeDeTache/supp') && preg_match('#^/ListeDeTache/supp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_taches_supp')), array (  '_controller' => 'Dash\\TachesBundle\\Controller\\TaskController::suppAction',));
            }

            // dash_taches_test
            if ($pathinfo === '/ListeDeTache/test') {
                return array (  '_controller' => 'Dash\\TachesBundle\\Controller\\TaskController::testAction',  '_route' => 'dash_taches_test',);
            }

        }

        if (0 === strpos($pathinfo, '/Portefeuille')) {
            // dash_portefeuille_nouveau
            if ($pathinfo === '/Portefeuille/nouveauClient') {
                return array (  '_controller' => 'Dash\\PortefeuilleBundle\\Controller\\PortefeuilleController::nouveauAction',  '_route' => 'dash_portefeuille_nouveau',);
            }

            // dash_portefeuille_listeGeneral
            if ($pathinfo === '/Portefeuille/listeGeneral') {
                return array (  '_controller' => 'Dash\\PortefeuilleBundle\\Controller\\PortefeuilleController::listeGeneralAction',  '_route' => 'dash_portefeuille_listeGeneral',);
            }

            // dash_portefeuille_modif
            if (0 === strpos($pathinfo, '/Portefeuille/modif') && preg_match('#^/Portefeuille/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_portefeuille_modif')), array (  '_controller' => 'Dash\\PortefeuilleBundle\\Controller\\PortefeuilleController::modifAction',));
            }

            // dash_portefeuille_supp
            if (0 === strpos($pathinfo, '/Portefeuille/supp') && preg_match('#^/Portefeuille/supp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dash_portefeuille_supp')), array (  '_controller' => 'Dash\\PortefeuilleBundle\\Controller\\PortefeuilleController::suppAction',));
            }

        }

        // dash_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dash_core_homepage');
            }

            return array (  '_controller' => 'Dash\\CoreBundle\\Controller\\CoreController::indexAction',  '_route' => 'dash_core_homepage',);
        }

        // dash_core_objectif
        if ($pathinfo === '/objectif') {
            return array (  '_controller' => 'Dash\\CoreBundle\\Controller\\CoreController::objectifAction',  '_route' => 'dash_core_objectif',);
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
