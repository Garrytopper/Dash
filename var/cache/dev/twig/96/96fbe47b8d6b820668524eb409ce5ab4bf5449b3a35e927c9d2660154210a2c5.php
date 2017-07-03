<?php

/* DashCoreBundle::corelayout.html.twig */
class __TwigTemplate_9500688a8f074f6a7322bfa79c783c86349f39a1482945d35df70d10c3f0ada9 extends Twig_Template
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
        $__internal_397267bfc15e79ead6a2810ed5e195e13e721aa5710a8a79df9a6915711217a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397267bfc15e79ead6a2810ed5e195e13e721aa5710a8a79df9a6915711217a4->enter($__internal_397267bfc15e79ead6a2810ed5e195e13e721aa5710a8a79df9a6915711217a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle::corelayout.html.twig"));

        $__internal_64c49f37c3e9e59c06bb12000b979fcd24f17805711c82419bd99b6c0fe6fe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c49f37c3e9e59c06bb12000b979fcd24f17805711c82419bd99b6c0fe6fe79->enter($__internal_64c49f37c3e9e59c06bb12000b979fcd24f17805711c82419bd99b6c0fe6fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle::corelayout.html.twig"));

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
        // line 310
        echo "               <!-- section du menu en bas de page -->
                <div id=\"footerBox\" class=\"col-xs-12\"></div>
                <div  id=\"footer\" class=\"col-xs-12 foot\">
                    <div class=\"col-xs-12 tampon\"></div>
                    ";
        // line 314
        $this->displayBlock('menu', $context, $blocks);
        // line 317
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
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/js/coreJava.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>";
        
        $__internal_397267bfc15e79ead6a2810ed5e195e13e721aa5710a8a79df9a6915711217a4->leave($__internal_397267bfc15e79ead6a2810ed5e195e13e721aa5710a8a79df9a6915711217a4_prof);

        
        $__internal_64c49f37c3e9e59c06bb12000b979fcd24f17805711c82419bd99b6c0fe6fe79->leave($__internal_64c49f37c3e9e59c06bb12000b979fcd24f17805711c82419bd99b6c0fe6fe79_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f449fa6e0f1d1fd7c6176843723f15a359463e8cf01d851ed8e477747aff86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f449fa6e0f1d1fd7c6176843723f15a359463e8cf01d851ed8e477747aff86->enter($__internal_60f449fa6e0f1d1fd7c6176843723f15a359463e8cf01d851ed8e477747aff86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43b996c5fe78fb378dd3ac032bbe0de1ea60ea943c512863f0d4bc22f3bfd983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b996c5fe78fb378dd3ac032bbe0de1ea60ea943c512863f0d4bc22f3bfd983->enter($__internal_43b996c5fe78fb378dd3ac032bbe0de1ea60ea943c512863f0d4bc22f3bfd983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "                <!-- Section Portefeuille -->
                <div id=\"Portefeuille\" class=\"col-xs-8 sectionH\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 center\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["CaReel"] ?? $this->getContext($context, "CaReel")), "html", null, true);
        echo " € /</div>
                        <div class=\"col-xs-6 center\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["CaObjectif"] ?? $this->getContext($context, "CaObjectif")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["MomentObjectif"] ?? $this->getContext($context, "MomentObjectif")), "M"), "html", null, true);
        echo "
                            </div>
                            <div class=\"row\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, twig_round(($context["NbRdvAPrendre"] ?? $this->getContext($context, "NbRdvAPrendre"))), "html", null, true);
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
                    <div style=\"color: green;\" class=\"row center\">
                        <span style=\"color: green;\">";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois"))), "html", null, true);
        echo "</span> <span style=\"color: black;\">||</span> <span style=\"color: red;\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["PerteDuMois"] ?? $this->getContext($context, "PerteDuMois"))), "html", null, true);
        echo "</span>
                    </div>
                    <div style=\"color: black;\" class=\"row center\">
                        ";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["OuvertureDuMois"] ?? $this->getContext($context, "OuvertureDuMois"))), "html", null, true);
        echo "
                    </div>
                </div>
                <!-- Section Statistique // Sous section visible au clic sur id=\"Stat\"-->
                <div id=\"StatHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row\">
                        <div id=\"DVendu\" class=\"col-xs-3 center btn btn-info\">Vendu</div>
                        <div id=\"DOuvert\" class=\"col-xs-offset-1 col-xs-4 center btn btn-info\">Ouvert</div>
                        <div id=\"DPerdu\" class=\"col-xs-offset-1 col-xs-3 center btn btn-info\">Perdu</div>
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                        <div id=\"dVendu\" class=\"row hidden\">
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 73
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                                    <div style=\"color: green;\" class=\"col-xs-6 center\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                    <div class=\"col-xs-6 center\">";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateCloture", array()), "d/m"), "html", null, true);
            echo "</div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </div>
                        <div id=\"dPerdu\" class=\"row hidden\">
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["PerteDuMois"] ?? $this->getContext($context, "PerteDuMois")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 81
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                                    <div style=\"color: red;\" class=\"col-xs-6 center\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                    <div class=\"col-xs-6 center\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateCloture", array()), "d/m"), "html", null, true);
            echo "</div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        </div>
                        <div id=\"dOuvert\" class=\"row hidden\" style=\"color: black;\">
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OuvertureDuMois"] ?? $this->getContext($context, "OuvertureDuMois")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 89
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                                    <div style=\"color: black;\" class=\"col-xs-4 center\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                    <div class=\"col-xs-3 center\">";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateCreation", array()), "d/m"), "html", null, true);
            echo "</div>
                                    <div class=\"col-xs-2 center mini\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</div>
                                    <div class=\"col-xs-3 center\">";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateRdv", array()), "d/m"), "html", null, true);
            echo "</div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        ";
        // line 99
        if ((twig_length_filter($this->env, ($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois"))) > 0)) {
            // line 100
            echo "                            Panier Moyen : ";
            echo twig_escape_filter($this->env, (($context["CaReel"] ?? $this->getContext($context, "CaReel")) / twig_length_filter($this->env, ($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois")))), "html", null, true);
            echo " €
                        ";
        } else {
            // line 102
            echo "                            Pas de vente 
                        ";
        }
        // line 104
        echo "                    </div>
                    <div class=\"row center\">
                        ";
        // line 106
        if (((twig_length_filter($this->env, ($context["OuvertureDuMois"] ?? $this->getContext($context, "OuvertureDuMois"))) > 0) && (twig_length_filter($this->env, ($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois"))) > 0))) {
            // line 107
            echo "                             Taux de concret : ";
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, ($context["VenteDuMois"] ?? $this->getContext($context, "VenteDuMois"))) * 100) / twig_length_filter($this->env, ($context["OuvertureDuMois"] ?? $this->getContext($context, "OuvertureDuMois")))), "html", null, true);
            echo " % 
                        ";
        } else {
            // line 109
            echo "                             Pas assez de données
                        ";
        }
        // line 111
        echo "                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                 <!-- Section Portefeuille // Sous section visible au clic sur id=\"Portefeuille\"-->
                <div id=\"PortefeuilleHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"row tampon\"></div>
                    <div class=\"row center \">Mois de ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["MomentObjectif"] ?? $this->getContext($context, "MomentObjectif")), "M"), "html", null, true);
        echo "</div>
                    <div class=\"row tampon\"></div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Nbre Retour : ";
        // line 120
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["RetourDuMois"] ?? $this->getContext($context, "RetourDuMois"))), "html", null, true);
        echo "</div>
                        <div class=\"row\">Nbre Décvrte : ";
        // line 121
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["DecouverteDuMois"] ?? $this->getContext($context, "DecouverteDuMois"))), "html", null, true);
        echo "</div>
                        <div class=\"row\">Nbre Relance : ";
        // line 122
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["RelanceDuMois"] ?? $this->getContext($context, "RelanceDuMois"))), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-xs-6\">
                        <div class=\"row\">Prtfeuille : ";
        // line 125
        echo twig_escape_filter($this->env, ($context["CaPortefeuille"] ?? $this->getContext($context, "CaPortefeuille")), "html", null, true);
        echo " €</div>
                        <div class=\"row\">Manque : ";
        // line 126
        echo twig_escape_filter($this->env, twig_round(($context["PorteObj"] ?? $this->getContext($context, "PorteObj"))), "html", null, true);
        echo " €</div>
                        <div class=\"row\">Besoin de  ";
        // line 127
        echo twig_escape_filter($this->env, twig_round(($context["NbRdvAPrendre"] ?? $this->getContext($context, "NbRdvAPrendre"))), "html", null, true);
        echo " projets</div>
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">CA potentiel : ";
        // line 130
        echo twig_escape_filter($this->env, twig_round(($context["CaPotentiel"] ?? $this->getContext($context, "CaPotentiel"))), "html", null, true);
        echo "€</div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-12 center\">
                        <a href=\"";
        // line 133
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
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cdecouverte.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 144
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ClientDecourverteToday"] ?? $this->getContext($context, "ClientDecourverteToday"))), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <div class=\"row\">
                                <img class=\"logo\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cretour.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 152
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ClientRetourToday"] ?? $this->getContext($context, "ClientRetourToday"))), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"row center\">
                            <img class=\"logo\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Crelance.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"row center\">
                            ";
        // line 161
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ClientRelanceToday"] ?? $this->getContext($context, "ClientRelanceToday"))), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"col-xs-5\">
                        <div  class=\"col-xs-6\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tstandard.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 170
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["TachesStandard"] ?? $this->getContext($context, "TachesStandard"))), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"col-xs-6 decD center\">
                            <div class=\"row center\">
                                <img class=\"logo\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tprioritaire.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row center\">
                                ";
        // line 178
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["TachesPrioritaire"] ?? $this->getContext($context, "TachesPrioritaire"))), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Aujourd'hui / sous-section visible en cliquant sur id=\"Aujourd'hui\" -->
                <div id=\"AujourdhuiHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"col-xs-12 tampon\"></div>
                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClientDecourverteToday"] ?? $this->getContext($context, "ClientDecourverteToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 188
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1 center\"> <div class=\"bouleBleu\"></div> </div>
                                <div class=\"col-xs-5\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClientRetourToday"] ?? $this->getContext($context, "ClientRetourToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 197
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleRouge\"></div></div>
                                <div class=\"col-xs-5\">";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClientRelanceToday"] ?? $this->getContext($context, "ClientRelanceToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 206
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"row ligneAujourdhui\">
                                <div class=\"col-xs-1\"><div class=\"bouleVert\"></div></div>
                                <div class=\"col-xs-5\">";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                                <div class=\"col-xs-5\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tel", array()), "html", null, true);
            echo "</div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                    <div class=\"row center ";
        if ((twig_length_filter($this->env, ($context["TachesPrioritaire"] ?? $this->getContext($context, "TachesPrioritaire"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <img class=\"logo\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Turgent.png"), "html", null, true);
        echo "\">
                        <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_liste");
        echo "\">
                            <img class=\"logo\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tstandard.png"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>

                    <div class=\"col-xs-12 tampon\"></div>
                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TachesPrioritaire"] ?? $this->getContext($context, "TachesPrioritaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 224
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
            echo "\">
                            <div style=\"color: red;\" class=\"row center\"><span style=\"font-weight: bold; font-size: 1.1em;\">";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "tache", array()), "html", null, true);
            echo "</span> : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "description", array()), "html", null, true);
            echo "</div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                   

                <!-- section des Alerte  hidden si client à redéfinir < 1 et today != sunday  -->

                <div id=\"alerte\" class=\"col-xs-12 white ";
        // line 234
        if (((twig_date_format_filter($this->env, ($context["Today"] ?? $this->getContext($context, "Today")), "D") != "Mon") && (twig_length_filter($this->env, ($context["PastClient"] ?? $this->getContext($context, "PastClient"))) < 1))) {
            echo " hidden ";
        }
        echo "\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 decG\">
                        <img class=\"logo\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/alerte.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-offset-1 col-xs-4 center ";
        // line 239
        if ((twig_length_filter($this->env, ($context["PastClient"] ?? $this->getContext($context, "PastClient"))) < 1)) {
            echo " hidden ";
        }
        echo "\">
                        <a href=\"";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_listeGeneral");
        echo "\"> 
                             <img class=\"logo\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Aclient.png"), "html", null, true);
        echo "\">
                        </a>
                           
                    </div>
                    <div class=\"col-xs-offset-4 center ";
        // line 245
        if ((twig_date_format_filter($this->env, ($context["Today"] ?? $this->getContext($context, "Today")), "D") != "Mon")) {
            echo " hidden ";
        }
        echo "\">
                        <img class=\"logo\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Ahebdo.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                </div>
                <!-- Partie de 3 section -->
                <!-- section Tuto -->
                <div id=\"Tuto\" class=\"col-xs-4 sectionV center\">
                    <img class=\"logoV center\" src=\"";
        // line 253
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
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_listeGeneral");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cneutre.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_nouveau");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 267
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
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_liste");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tneutre.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"col-xs-6 center\">
                            <a href=\"";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_new");
        echo "\">
                                <img class=\"logo\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                     </div>
                </div>
                <!-- section Gestion des ventes -->
                <div id=\"sectionVente\" class=\"col-xs-12 sectionH\">
                    <div class=\"tampon\"></div>
                    <div class=\"col-xs-4 center\">
                        <a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_liste");
        echo "\">
                            <img class=\"logo\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Dvente.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                    <div class=\"col-xs-8 center\">
                        <span style=\"font-size: 1.4em;\">Gestion des ventes</span>
                    </div>
                </div>
                <!-- section espace personnel -->
                <div id=\"Perso\" class=\"col-xs-12 sectionH white\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/config.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-xs-6 center\">Espace personnel</div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/deconnexion.png"), "html", null, true);
        echo "\">
                    </div>
                </div>
                ";
        
        $__internal_43b996c5fe78fb378dd3ac032bbe0de1ea60ea943c512863f0d4bc22f3bfd983->leave($__internal_43b996c5fe78fb378dd3ac032bbe0de1ea60ea943c512863f0d4bc22f3bfd983_prof);

        
        $__internal_60f449fa6e0f1d1fd7c6176843723f15a359463e8cf01d851ed8e477747aff86->leave($__internal_60f449fa6e0f1d1fd7c6176843723f15a359463e8cf01d851ed8e477747aff86_prof);

    }

    // line 314
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0ed80843191b4868279592c57bd61297e57de4e78049d327e4e27baedce3ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed80843191b4868279592c57bd61297e57de4e78049d327e4e27baedce3ee7->enter($__internal_d0ed80843191b4868279592c57bd61297e57de4e78049d327e4e27baedce3ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e97ca031833000e260764633173d8b569cf02c259ff98267b68bb197c90b9c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97ca031833000e260764633173d8b569cf02c259ff98267b68bb197c90b9c77->enter($__internal_e97ca031833000e260764633173d8b569cf02c259ff98267b68bb197c90b9c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 315
        echo "                        <div class=\"col-xs-12 center\">Gestion de Portefeuille</div>
                    ";
        
        $__internal_e97ca031833000e260764633173d8b569cf02c259ff98267b68bb197c90b9c77->leave($__internal_e97ca031833000e260764633173d8b569cf02c259ff98267b68bb197c90b9c77_prof);

        
        $__internal_d0ed80843191b4868279592c57bd61297e57de4e78049d327e4e27baedce3ee7->leave($__internal_d0ed80843191b4868279592c57bd61297e57de4e78049d327e4e27baedce3ee7_prof);

    }

    public function getTemplateName()
    {
        return "DashCoreBundle::corelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 315,  702 => 314,  688 => 306,  681 => 302,  667 => 291,  663 => 290,  651 => 281,  647 => 280,  640 => 276,  636 => 275,  625 => 267,  621 => 266,  614 => 262,  610 => 261,  599 => 253,  589 => 246,  583 => 245,  576 => 241,  572 => 240,  566 => 239,  561 => 237,  553 => 234,  545 => 228,  534 => 225,  529 => 224,  525 => 223,  517 => 218,  513 => 217,  509 => 216,  501 => 214,  491 => 210,  487 => 209,  480 => 206,  475 => 205,  465 => 201,  461 => 200,  454 => 197,  449 => 196,  439 => 192,  435 => 191,  428 => 188,  424 => 187,  412 => 178,  406 => 175,  398 => 170,  392 => 167,  383 => 161,  377 => 158,  368 => 152,  362 => 149,  354 => 144,  348 => 141,  335 => 133,  329 => 130,  323 => 127,  319 => 126,  315 => 125,  309 => 122,  305 => 121,  301 => 120,  295 => 117,  287 => 111,  283 => 109,  277 => 107,  275 => 106,  271 => 104,  267 => 102,  261 => 100,  259 => 99,  254 => 96,  245 => 93,  241 => 92,  237 => 91,  233 => 90,  228 => 89,  224 => 88,  220 => 86,  211 => 83,  207 => 82,  202 => 81,  198 => 80,  194 => 78,  185 => 75,  181 => 74,  176 => 73,  172 => 72,  156 => 59,  148 => 56,  134 => 45,  128 => 42,  121 => 38,  114 => 34,  110 => 33,  105 => 30,  96 => 29,  83 => 328,  70 => 317,  68 => 314,  62 => 310,  60 => 29,  40 => 12,  27 => 1,);
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
                    <div style=\"color: green;\" class=\"row center\">
                        <span style=\"color: green;\">{{ VenteDuMois|length }}</span> <span style=\"color: black;\">||</span> <span style=\"color: red;\">{{ PerteDuMois|length }}</span>
                    </div>
                    <div style=\"color: black;\" class=\"row center\">
                        {{ OuvertureDuMois|length }}
                    </div>
                </div>
                <!-- Section Statistique // Sous section visible au clic sur id=\"Stat\"-->
                <div id=\"StatHidden\" class=\"col-xs-12 hidden\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row\">
                        <div id=\"DVendu\" class=\"col-xs-3 center btn btn-info\">Vendu</div>
                        <div id=\"DOuvert\" class=\"col-xs-offset-1 col-xs-4 center btn btn-info\">Ouvert</div>
                        <div id=\"DPerdu\" class=\"col-xs-offset-1 col-xs-3 center btn btn-info\">Perdu</div>
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
                        <div id=\"dVendu\" class=\"row hidden\">
                            {% for client in VenteDuMois %}
                                <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                                    <div style=\"color: green;\" class=\"col-xs-6 center\">{{ client.nom }}</div>
                                    <div class=\"col-xs-6 center\">{{ client.dateCloture|date('d/m') }}</div>
                                </a>
                            {% endfor %}
                        </div>
                        <div id=\"dPerdu\" class=\"row hidden\">
                            {% for client in PerteDuMois %}
                                <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                                    <div style=\"color: red;\" class=\"col-xs-6 center\">{{ client.nom }}</div>
                                    <div class=\"col-xs-6 center\">{{ client.dateCloture|date('d/m') }}</div>
                                </a>
                            {% endfor %}
                        </div>
                        <div id=\"dOuvert\" class=\"row hidden\" style=\"color: black;\">
                            {% for client in OuvertureDuMois %}
                                <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                                    <div style=\"color: black;\" class=\"col-xs-4 center\">{{ client.nom }}</div>
                                    <div class=\"col-xs-3 center\">{{ client.dateCreation|date('d/m') }}</div>
                                    <div class=\"col-xs-2 center mini\">{{ client.etat }}</div>
                                    <div class=\"col-xs-3 center\">{{ client.dateRdv|date('d/m') }}</div>
                                </a>
                            {% endfor %}
                        </div>
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"row center\">
                        {% if  VenteDuMois|length > 0 %}
                            Panier Moyen : {{CaReel / VenteDuMois|length}} €
                        {% else %}
                            Pas de vente 
                        {% endif %}
                    </div>
                    <div class=\"row center\">
                        {% if OuvertureDuMois|length > 0 and VenteDuMois|length > 0 %}
                             Taux de concret : {{ VenteDuMois|length * 100 / OuvertureDuMois|length }} % 
                        {% else %}
                             Pas assez de données
                        {% endif %}
                    </div>
                    <div class=\"col-xs-12 tampon\"></div>
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
                        <div  class=\"col-xs-6\">
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
                    <div class=\"col-xs-12 tampon\"></div>
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
                    <div class=\"row center {% if TachesPrioritaire|length < 1 %}hidden{% endif %}\">
                        <div class=\"col-xs-12 tampon\"></div>
                        <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Turgent.png') }}\">
                        <a href=\"{{ path('dash_taches_liste') }}\">
                            <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Tstandard.png') }}\" alt=\"\">
                        </a>
                    </div>

                    <div class=\"col-xs-12 tampon\"></div>
                    {% for tache in TachesPrioritaire %}
                        <a href=\"{{ path('dash_taches_modif', {'id': tache.id}) }}\">
                            <div style=\"color: red;\" class=\"row center\"><span style=\"font-weight: bold; font-size: 1.1em;\">{{ tache.tache }}</span> : {{ tache.description }}</div>
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
                <!-- section Gestion des ventes -->
                <div id=\"sectionVente\" class=\"col-xs-12 sectionH\">
                    <div class=\"tampon\"></div>
                    <div class=\"col-xs-4 center\">
                        <a href=\"{{ path('dash_dvente_liste') }}\">
                            <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Dvente.png') }}\">
                        </a>
                    </div>
                    <div class=\"col-xs-8 center\">
                        <span style=\"font-size: 1.4em;\">Gestion des ventes</span>
                    </div>
                </div>
                <!-- section espace personnel -->
                <div id=\"Perso\" class=\"col-xs-12 sectionH white\">
                    <div class=\"col-xs-12 tampon\"></div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"{{ asset('bundles/dashcore/image/config.png') }}\">
                    </div>
                    <div class=\"col-xs-6 center\">Espace personnel</div>
                    <div class=\"col-xs-3 center\">
                        <img  class=\"logo\" src=\"{{ asset('bundles/dashcore/image/deconnexion.png') }}\">
                    </div>
                </div>
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
    </html>", "DashCoreBundle::corelayout.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/CoreBundle/Resources/views/corelayout.html.twig");
    }
}
