<?php

/* DashCoreBundle::coreLayout.html.twig */
class __TwigTemplate_0abbdb4e1328b90b2712902af79ce2f6df9ba25af34736199f367ef4d70daa71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36387310ad2b68845a50b0bd998e0dbd97c57821fde173c01a5fc560aa11eced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36387310ad2b68845a50b0bd998e0dbd97c57821fde173c01a5fc560aa11eced->enter($__internal_36387310ad2b68845a50b0bd998e0dbd97c57821fde173c01a5fc560aa11eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle::coreLayout.html.twig"));

        $__internal_2923768e6733d7bd32878d09533524362c5c0bec29a763d35abb4c9f64a188ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2923768e6733d7bd32878d09533524362c5c0bec29a763d35abb4c9f64a188ba->enter($__internal_2923768e6733d7bd32878d09533524362c5c0bec29a763d35abb4c9f64a188ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle::coreLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset='utf-8'>
            <!-- Cette déclaration ne concerne que le navigateur Internet Explorer. Elle permet de s'assurer qu'il utilise la dernière version du moteur de rendu. -->
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!-- Cette ligne concerne les mobiles. On demande que l'affichage occupe tout l'espace disponible avec une taill de 1, autrement dit sans zoom -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <!-- Déclaration du fichier css de bootstrap -->
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
            <!-- J'appelle mon fichier css perso, mais il sera intéressant à un moment donné de voir pour modifier directement bootstrap à la source -->
            <link rel=\"stylesheet\" type=\"text/css\" media='all' href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/css/coreLayout.css"), "html", null, true);
        echo "\">
            <!-- Les appels qui suivent ont pour objectif de permettre aux navigateurs ne prennt pas en charge HTML5 et les media queries css3 de le faire, en particulier pour IE8 -->
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
            <title>Dash</title>
        </head>
<!-- *********
**************
BODY   *******
**************
***********-->      
        <body>
            <div class=\"container\">
                ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 259
        echo "               <!-- section du menu en bas de page -->
                <div id=\"footerBox\" class=\"col-xs-12\"></div>
                <div  id=\"footer\" class=\"col-xs-12 foot\">
                    <div class=\"col-xs-12 tampon\"></div>
                    ";
        // line 263
        $this->displayBlock('menu', $context, $blocks);
        // line 266
        echo "                </div>
            </div>
           
<!--*********************************************************************************
*************************************************************************************
                        ****** les appels JavaScript pour jQuery et bootstrap  ******
*************************************************************************************
**********************************************************************************-->

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/js/coreJava.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>";
        
        $__internal_36387310ad2b68845a50b0bd998e0dbd97c57821fde173c01a5fc560aa11eced->leave($__internal_36387310ad2b68845a50b0bd998e0dbd97c57821fde173c01a5fc560aa11eced_prof);

        
        $__internal_2923768e6733d7bd32878d09533524362c5c0bec29a763d35abb4c9f64a188ba->leave($__internal_2923768e6733d7bd32878d09533524362c5c0bec29a763d35abb4c9f64a188ba_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_e635b406691dfed502fff9a468a023126faf618c407bc8935255c673a62c2f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e635b406691dfed502fff9a468a023126faf618c407bc8935255c673a62c2f5a->enter($__internal_e635b406691dfed502fff9a468a023126faf618c407bc8935255c673a62c2f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d5b91b7c07f41b8573fe2ad6797327fc4b36e4527179314ce97e64603e03cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5b91b7c07f41b8573fe2ad6797327fc4b36e4527179314ce97e64603e03cd0->enter($__internal_9d5b91b7c07f41b8573fe2ad6797327fc4b36e4527179314ce97e64603e03cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "                <!-- Section Portefeuille -->
                <div id=\"Portefeuille\" class=\"col-xs-8 sectionH\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 center\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["CaReel"]) ? $context["CaReel"] : $this->getContext($context, "CaReel")), "html", null, true);
        echo " € /</div>
                        <div class=\"col-xs-6 center\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["CaObjectif"]) ? $context["CaObjectif"] : $this->getContext($context, "CaObjectif")), "html", null, true);
        echo " €</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <img class=\"logo\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/portefeuille.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"row\">
                                ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["MomentObjectif"]) ? $context["MomentObjectif"] : $this->getContext($context, "MomentObjectif")), "M"), "html", null, true);
        echo "
                            </div>
                            <div class=\"row\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, twig_round((isset($context["NbRdvAPrendre"]) ? $context["NbRdvAPrendre"] : $this->getContext($context, "NbRdvAPrendre"))), "html", null, true);
        echo " 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Statistique -->
                <div id=\"Stat\" class=\"col-xs-4 sectionH  \">
                    <div class=\"row center\">
                        STAT
                    </div>
                    <div class=\"row center\">
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["VenteDuMois"]) ? $context["VenteDuMois"] : $this->getContext($context, "VenteDuMois"))), "html", null, true);
        echo " || ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["PerteDuMois"]) ? $context["PerteDuMois"] : $this->getContext($context, "PerteDuMois"))), "html", null, true);
        echo "
                    </div>
                    <div class=\"row center\">
                        ";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["OuvertureDuMois"]) ? $context["OuvertureDuMois"] : $this->getContext($context, "OuvertureDuMois"))), "html", null, true);
        echo "
                    </div>
                </div>
                <!-- Section Statistique // Sous section visible au clic sur id=\"Stat\"-->
                <div id=\"StatHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["VenteDuMois"]) ? $context["VenteDuMois"] : $this->getContext($context, "VenteDuMois"))) > 0)) {
            // line 67
            echo "                            ";
            echo twig_escape_filter($this->env, ((isset($context["CaReel"]) ? $context["CaReel"] : $this->getContext($context, "CaReel")) / twig_length_filter($this->env, (isset($context["VenteDuMois"]) ? $context["VenteDuMois"] : $this->getContext($context, "VenteDuMois")))), "html", null, true);
            echo "
                        ";
        } else {
            // line 69
            echo "                            Pas de vente 
                        ";
        }
        // line 71
        echo "                    </div>
                    <div class=\"row center\">
                        ";
        // line 73
        if (((twig_length_filter($this->env, (isset($context["OuvertureDuMois"]) ? $context["OuvertureDuMois"] : $this->getContext($context, "OuvertureDuMois"))) > 0) && (twig_length_filter($this->env, (isset($context["VenteDuMois"]) ? $context["VenteDuMois"] : $this->getContext($context, "VenteDuMois"))) > 0))) {
            // line 74
            echo "                             Taux de concret : ";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["VenteDuMois"]) ? $context["VenteDuMois"] : $this->getContext($context, "VenteDuMois"))) * 100) / twig_length_filter($this->env, (isset($context["OuvertureDuMois"]) ? $context["OuvertureDuMois"] : $this->getContext($context, "OuvertureDuMois")))), "html", null, true);
            echo " 
                        ";
        } else {
            // line 76
            echo "                             Pas assez de données
                        ";
        }
        // line 78
        echo "                    </div>
                </div>
                 <!-- Section Portefeuille // Sous section visible au clic sur id=\"Portefeuille\"-->
                <div id=\"PortefeuilleHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"row tampon\"></div>
                    <div class=\"row center \">Mois de ";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["MomentObjectif"]) ? $context["MomentObjectif"] : $this->getContext($context, "MomentObjectif")), "M"), "html", null, true);
        echo "</div>
                    <div class=\"row tampon\"></div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Nbre Retour : ";
        // line 86
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["RetourDuMois"]) ? $context["RetourDuMois"] : $this->getContext($context, "RetourDuMois"))), "html", null, true);
        echo "</div>
                        <div class=\"row\">Nbre Décvrte : ";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["DecouverteDuMois"]) ? $context["DecouverteDuMois"] : $this->getContext($context, "DecouverteDuMois"))), "html", null, true);
        echo "</div>
                        <div class=\"row\">Nbre Relance : ";
        // line 88
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["RelanceDuMois"]) ? $context["RelanceDuMois"] : $this->getContext($context, "RelanceDuMois"))), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Prtfeuille : ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["CaPortefeuille"]) ? $context["CaPortefeuille"] : $this->getContext($context, "CaPortefeuille")), "html", null, true);
        echo " €</div>
                        <div class=\"row\">Manque : ";
        // line 92
        echo twig_escape_filter($this->env, twig_round((isset($context["PorteObj"]) ? $context["PorteObj"] : $this->getContext($context, "PorteObj"))), "html", null, true);
        echo " €</div>
                        <div class=\"row\">Besoin de  ";
        // line 93
        echo twig_escape_filter($this->env, twig_round((isset($context["NbRdvAPrendre"]) ? $context["NbRdvAPrendre"] : $this->getContext($context, "NbRdvAPrendre"))), "html", null, true);
        echo " projets</div>
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">CA potentiel : ";
        // line 96
        echo twig_escape_filter($this->env, twig_round((isset($context["CaPotentiel"]) ? $context["CaPotentiel"] : $this->getContext($context, "CaPotentiel"))), "html", null, true);
        echo "€</div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-12 center\">
                        <a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_objectif");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/cible.png"), "html", null, true);
        echo "\"></a>
                    </div>
                </div>
                <!-- Section Aujourd'hui -->
                <div id=\"Aujourdhui\" class=\"col-xs-12 sectionH\">
                    <div class=\"col-xs-5\">
                        <div class=\"col-xs-6 center decG\">
                            <div class=\"row\">
                                <img class=\"logo\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cdecouverte.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 110
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ClientDecourverteToday"]) ? $context["ClientDecourverteToday"] : $this->getContext($context, "ClientDecourverteToday"))), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <div class=\"row\">
                                <img class=\"logo\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cretour.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 118
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ClientRetourToday"]) ? $context["ClientRetourToday"] : $this->getContext($context, "ClientRetourToday"))), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"row center\">
                            <img class=\"logo\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Crelance.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"row center\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ClientRelanceToday"]) ? $context["ClientRelanceToday"] : $this->getContext($context, "ClientRelanceToday"))), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"col-xs-5\">
                        <div class=\"col-xs-6\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tstandard.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["TachesStandard"]) ? $context["TachesStandard"] : $this->getContext($context, "TachesStandard"))), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"col-xs-6 decD center\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tprioritaire.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 144
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["TachesPrioritaire"]) ? $context["TachesPrioritaire"] : $this->getContext($context, "TachesPrioritaire"))), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Aujourd'hui / sous-section visible en cliquant sur id=\"Aujourd'hui\" -->
                <div id=\"AujourdhuiHidden\" class=\"col-xs-12 hidden\">
                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ClientDecourverteToday"]) ? $context["ClientDecourverteToday"] : $this->getContext($context, "ClientDecourverteToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 152
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1 center\"> <div class=\"bouleBleu\"></div> </div>
                                <div class=\"col-xs-5\">";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ClientRetourToday"]) ? $context["ClientRetourToday"] : $this->getContext($context, "ClientRetourToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 161
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleRouge\"></div></div>
                                <div class=\"col-xs-5\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ClientRelanceToday"]) ? $context["ClientRelanceToday"] : $this->getContext($context, "ClientRelanceToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 170
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleVert\"></div></div>
                                <div class=\"col-xs-5\">";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        <img class=\"logo\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Turgent.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TachesPrioritaire"]) ? $context["TachesPrioritaire"] : $this->getContext($context, "TachesPrioritaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 184
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row center\">";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "tache", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "description", array()), "html", null, true);
            echo "</div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                <!-- section des Alerte  hidden si client à redéfinir < 1 et today != sunday  -->

                <div id=\"alerte\" class=\"col-xs-12 white ";
        // line 192
        if (((twig_date_format_filter($this->env, (isset($context["Today"]) ? $context["Today"] : $this->getContext($context, "Today")), "D") != "Mon") && (twig_length_filter($this->env, (isset($context["PastClient"]) ? $context["PastClient"] : $this->getContext($context, "PastClient"))) < 1))) {
            echo " hidden ";
        }
        echo "\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 decG\">
                        <img class=\"logo\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/alerte.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-offset-1 col-xs-4 center ";
        // line 197
        if ((twig_length_filter($this->env, (isset($context["PastClient"]) ? $context["PastClient"] : $this->getContext($context, "PastClient"))) < 1)) {
            echo " hidden ";
        }
        echo "\">
                        <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_listeGeneral");
        echo "\"> 
                             <img class=\"logo\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Aclient.png"), "html", null, true);
        echo "\">
                        </a>
                           
                    </div>
                    <div class=\"col-xs-offset-4 center ";
        // line 203
        if ((twig_date_format_filter($this->env, (isset($context["Today"]) ? $context["Today"] : $this->getContext($context, "Today")), "D") != "Mon")) {
            echo " hidden ";
        }
        echo "\">
                        <img class=\"logo\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Ahebdo.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                <!-- Partie de 3 section -->
                <!-- section Tuto -->
                <div id=\"Tuto\" class=\"col-xs-4 sectionV center\">
                    <img class=\"logoV center\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/tuto.png"), "html", null, true);
        echo "\">
                </div>
                <!-- section des Ajouts -->
                <div class=\"col-xs-8\">
                     <!-- section Clients -->
                     <div id=\"Client\" class=\"row sectionH  mgG\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_listeGeneral");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cneutre.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_nouveau");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                     </div>
                     <!-- section Taches -->
                     <div id=\"Tache\" class=\"row sectionH  mgG\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_liste");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tneutre.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_new");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                     </div>
                </div>
                <!-- section espace personnel -->
                <div id=\"Perso\" class=\"col-xs-12 sectionH\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/config.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-6 center\">Espace personnel</div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/deconnexion.png"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_test");
        echo "\">
                    <div class=\"col-xs-12 sectionV white center\"> test </div>
                </a>
                ";
        
        $__internal_9d5b91b7c07f41b8573fe2ad6797327fc4b36e4527179314ce97e64603e03cd0->leave($__internal_9d5b91b7c07f41b8573fe2ad6797327fc4b36e4527179314ce97e64603e03cd0_prof);

        
        $__internal_e635b406691dfed502fff9a468a023126faf618c407bc8935255c673a62c2f5a->leave($__internal_e635b406691dfed502fff9a468a023126faf618c407bc8935255c673a62c2f5a_prof);

    }

    // line 263
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04abe84b6ff7de3d0a9a51a3f417274f20f139799711a9b8555b343352dd0394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04abe84b6ff7de3d0a9a51a3f417274f20f139799711a9b8555b343352dd0394->enter($__internal_04abe84b6ff7de3d0a9a51a3f417274f20f139799711a9b8555b343352dd0394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73f0ef441bf202edb981d76962f9c66654ee09a9be7066e1b1e59ca383955602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f0ef441bf202edb981d76962f9c66654ee09a9be7066e1b1e59ca383955602->enter($__internal_73f0ef441bf202edb981d76962f9c66654ee09a9be7066e1b1e59ca383955602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 264
        echo "                        <div class=\"col-xs-12 center\">Gestion de Portefeuille</div>
                    ";
        
        $__internal_73f0ef441bf202edb981d76962f9c66654ee09a9be7066e1b1e59ca383955602->leave($__internal_73f0ef441bf202edb981d76962f9c66654ee09a9be7066e1b1e59ca383955602_prof);

        
        $__internal_04abe84b6ff7de3d0a9a51a3f417274f20f139799711a9b8555b343352dd0394->leave($__internal_04abe84b6ff7de3d0a9a51a3f417274f20f139799711a9b8555b343352dd0394_prof);

    }

    public function getTemplateName()
    {
        return "DashCoreBundle::coreLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 264,  578 => 263,  564 => 255,  558 => 252,  551 => 248,  539 => 239,  535 => 238,  528 => 234,  524 => 233,  513 => 225,  509 => 224,  502 => 220,  498 => 219,  487 => 211,  477 => 204,  471 => 203,  464 => 199,  460 => 198,  454 => 197,  449 => 195,  441 => 192,  435 => 188,  424 => 185,  419 => 184,  415 => 183,  409 => 180,  405 => 178,  395 => 174,  391 => 173,  384 => 170,  379 => 169,  369 => 165,  365 => 164,  358 => 161,  353 => 160,  343 => 156,  339 => 155,  332 => 152,  328 => 151,  318 => 144,  312 => 141,  304 => 136,  298 => 133,  289 => 127,  283 => 124,  274 => 118,  268 => 115,  260 => 110,  254 => 107,  241 => 99,  235 => 96,  229 => 93,  225 => 92,  221 => 91,  215 => 88,  211 => 87,  207 => 86,  201 => 83,  194 => 78,  190 => 76,  184 => 74,  182 => 73,  178 => 71,  174 => 69,  168 => 67,  166 => 66,  156 => 59,  148 => 56,  134 => 45,  128 => 42,  121 => 38,  114 => 34,  110 => 33,  105 => 30,  96 => 29,  83 => 277,  70 => 266,  68 => 263,  62 => 259,  60 => 29,  40 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset='utf-8'>
            <!-- Cette déclaration ne concerne que le navigateur Internet Explorer. Elle permet de s'assurer qu'il utilise la dernière version du moteur de rendu. -->
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!-- Cette ligne concerne les mobiles. On demande que l'affichage occupe tout l'espace disponible avec une taill de 1, autrement dit sans zoom -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <!-- Déclaration du fichier css de bootstrap -->
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
            <!-- J'appelle mon fichier css perso, mais il sera intéressant à un moment donné de voir pour modifier directement bootstrap à la source -->
            <link rel=\"stylesheet\" type=\"text/css\" media='all' href=\"{{ asset('bundles/dashcore/css/coreLayout.css')}}\">
            <!-- Les appels qui suivent ont pour objectif de permettre aux navigateurs ne prennt pas en charge HTML5 et les media queries css3 de le faire, en particulier pour IE8 -->
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
            <title>Dash</title>
        </head>
<!-- *********
**************
BODY   *******
**************
***********-->      
        <body>
            <div class=\"container\">
                {% block body %}
                <!-- Section Portefeuille -->
                <div id=\"Portefeuille\" class=\"col-xs-8 sectionH\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 center\">{{ CaReel }} € /</div>
                        <div class=\"col-xs-6 center\">{{ CaObjectif }} €</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/portefeuille.png')}}\">
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"row\">
                                {{ MomentObjectif|date('M')}}
                            </div>
                            <div class=\"row\">
                                {{ NbRdvAPrendre|round }} 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Statistique -->
                <div id=\"Stat\" class=\"col-xs-4 sectionH  \">
                    <div class=\"row center\">
                        STAT
                    </div>
                    <div class=\"row center\">
                        {{ VenteDuMois|length }} || {{ PerteDuMois|length }}
                    </div>
                    <div class=\"row center\">
                        {{ OuvertureDuMois|length }}
                    </div>
                </div>
                <!-- Section Statistique // Sous section visible au clic sur id=\"Stat\"-->
                <div id=\"StatHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        {% if  VenteDuMois|length > 0 %}
                            {{CaReel / VenteDuMois|length}}
                        {% else %}
                            Pas de vente 
                        {% endif %}
                    </div>
                    <div class=\"row center\">
                        {% if OuvertureDuMois|length > 0 and VenteDuMois|length > 0 %}
                             Taux de concret : {{ VenteDuMois|length * 100 / OuvertureDuMois|length }} 
                        {% else %}
                             Pas assez de données
                        {% endif %}
                    </div>
                </div>
                 <!-- Section Portefeuille // Sous section visible au clic sur id=\"Portefeuille\"-->
                <div id=\"PortefeuilleHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"row tampon\"></div>
                    <div class=\"row center \">Mois de {{ MomentObjectif|date('M') }}</div>
                    <div class=\"row tampon\"></div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Nbre Retour : {{ RetourDuMois|length }}</div>
                        <div class=\"row\">Nbre Décvrte : {{ DecouverteDuMois|length }}</div>
                        <div class=\"row\">Nbre Relance : {{ RelanceDuMois|length }}</div>
                    </div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Prtfeuille : {{ CaPortefeuille }} €</div>
                        <div class=\"row\">Manque : {{ PorteObj|round }} €</div>
                        <div class=\"row\">Besoin de  {{ NbRdvAPrendre|round }} projets</div>
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">CA potentiel : {{ CaPotentiel|round }}€</div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-12 center\">
                        <a href=\"{{ path('dash_core_objectif') }}\"><img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/cible.png') }}\"></a>
                    </div>
                </div>
                <!-- Section Aujourd'hui -->
                <div id=\"Aujourdhui\" class=\"col-xs-12 sectionH\">
                    <div class=\"col-xs-5\">
                        <div class=\"col-xs-6 center decG\">
                            <div class=\"row\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Cdecouverte.png') }}\">
                            </div>
                            <div class=\"row center\">
                                {{ ClientDecourverteToday|length }}
                            </div>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <div class=\"row\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Cretour.png') }}\">
                            </div>
                            <div class=\"row center\">
                                {{ ClientRetourToday|length }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"row center\">
                            <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Crelance.png') }}\">
                        </div>
                        <div class=\"row center\">
                            {{ ClientRelanceToday|length }}
                        </div>
                    </div>
                    <div class=\"col-xs-5\">
                        <div class=\"col-xs-6\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Tstandard.png') }}\">
                            </div>
                            <div class=\"row center\">
                                {{ TachesStandard|length }}
                            </div>
                        </div>
                        <div class=\"col-xs-6 decD center\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Tprioritaire.png') }}\">
                            </div>
                            <div class=\"row center\">
                                {{ TachesPrioritaire|length  }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Aujourd'hui / sous-section visible en cliquant sur id=\"Aujourd'hui\" -->
                <div id=\"AujourdhuiHidden\" class=\"col-xs-12 hidden\">
                    {% for client in ClientDecourverteToday %}
                        <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1 center\"> <div class=\"bouleBleu\"></div> </div>
                                <div class=\"col-xs-5\">{{ client.nom }}</div>
                                <div class=\"col-xs-5\">{{ client.tel }}</div>
                            </div>
                        </a>
                    {% endfor %}
                    {% for client in ClientRetourToday %}
                        <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleRouge\"></div></div>
                                <div class=\"col-xs-5\">{{ client.nom }}</div>
                                <div class=\"col-xs-5\">{{ client.tel }}</div>
                            </div>
                        </a>
                    {% endfor %}
                    {% for client in ClientRelanceToday %}
                        <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleVert\"></div></div>
                                <div class=\"col-xs-5\">{{ client.nom }}</div>
                                <div class=\"col-xs-5\">{{ client.tel }}</div>
                            </div>
                        </a>
                    {% endfor %}
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Turgent.png') }}\">
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    {% for tache in TachesPrioritaire %}
                        <a href=\"{{ path('dash_taches_modif', {'id': tache.id}) }}\">
                            <div class=\"row center\">{{ tache.tache }} {{ tache.description }}</div>
                        </a>
                    {% endfor %}
                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                <!-- section des Alerte  hidden si client à redéfinir < 1 et today != sunday  -->

                <div id=\"alerte\" class=\"col-xs-12 white {% if Today|date('D') != 'Mon' and PastClient|length < 1 %} hidden {% endif %}\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 decG\">
                        <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/alerte.png') }}\">
                    </div>
                    <div class=\"col-xs-offset-1 col-xs-4 center {% if PastClient|length < 1 %} hidden {% endif %}\">
                        <a href=\"{{ path('dash_portefeuille_listeGeneral') }}\"> 
                             <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Aclient.png') }}\">
                        </a>
                           
                    </div>
                    <div class=\"col-xs-offset-4 center {% if Today|date('D') != 'Mon' %} hidden {% endif %}\">
                        <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Ahebdo.png') }}\">
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                <!-- Partie de 3 section -->
                <!-- section Tuto -->
                <div id=\"Tuto\" class=\"col-xs-4 sectionV center\">
                    <img class=\"logoV center\" src=\"{{ asset('bundles/dashcore/image/tuto.png') }}\">
                </div>
                <!-- section des Ajouts -->
                <div class=\"col-xs-8\">
                     <!-- section Clients -->
                     <div id=\"Client\" class=\"row sectionH  mgG\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"{{ path(\"dash_portefeuille_listeGeneral\") }}\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Cneutre.png') }}\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"{{ path('dash_portefeuille_nouveau') }}\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/ajout.png') }}\">
                            </a>
                        </div>
                     </div>
                     <!-- section Taches -->
                     <div id=\"Tache\" class=\"row sectionH  mgG\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"{{ path('dash_taches_liste') }}\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Tneutre.png') }}\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"{{ path('dash_taches_new') }}\">
                                <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/ajout.png') }}\">
                            </a>
                        </div>
                     </div>
                </div>
                <!-- section espace personnel -->
                <div id=\"Perso\" class=\"col-xs-12 sectionH\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"{{ asset('bundles/dashcore/image/config.png') }}\">
                    </div>
                    <div class=\"col-xs-6 center\">Espace personnel</div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"{{ asset('bundles/dashcore/image/deconnexion.png') }}\">
                    </div>
                </div>
                <a href=\"{{ path('dash_taches_test') }}\">
                    <div class=\"col-xs-12 sectionV white center\"> test </div>
                </a>
                {% endblock %}
               <!-- section du menu en bas de page -->
                <div id=\"footerBox\" class=\"col-xs-12\"></div>
                <div  id=\"footer\" class=\"col-xs-12 foot\">
                    <div class=\"col-xs-12 tampon\"></div>
                    {% block menu %}
                        <div class=\"col-xs-12 center\">Gestion de Portefeuille</div>
                    {% endblock %}
                </div>
            </div>
           
<!--*********************************************************************************
*************************************************************************************
                        ****** les appels JavaScript pour jQuery et bootstrap  ******
*************************************************************************************
**********************************************************************************-->

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"{{ asset('bundles/dashcore/js/coreJava.js') }}\"></script>
        </body>
    </html>", "DashCoreBundle::coreLayout.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/CoreBundle/Resources/views/coreLayout.html.twig");
    }
}
