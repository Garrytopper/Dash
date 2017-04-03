<?php

/* DashTachesBundle:liste:listeGlobal.html.twig */
class __TwigTemplate_9eb1f99112e29ee094d6b239d6f13d8599fcdcb2b526b0c4992f7eb1ed81d02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashTachesBundle:liste:listeGlobal.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DashCoreBundle::coreLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1676805b20dd9813756391eb9e2de3aca9b2b9f4760c26b11f136a7e9e6776b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1676805b20dd9813756391eb9e2de3aca9b2b9f4760c26b11f136a7e9e6776b->enter($__internal_e1676805b20dd9813756391eb9e2de3aca9b2b9f4760c26b11f136a7e9e6776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:liste:listeGlobal.html.twig"));

        $__internal_8595a7f1841aff1475cf61522df1bac54312f57b0a87f8d07dd07f569137f066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8595a7f1841aff1475cf61522df1bac54312f57b0a87f8d07dd07f569137f066->enter($__internal_8595a7f1841aff1475cf61522df1bac54312f57b0a87f8d07dd07f569137f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:liste:listeGlobal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1676805b20dd9813756391eb9e2de3aca9b2b9f4760c26b11f136a7e9e6776b->leave($__internal_e1676805b20dd9813756391eb9e2de3aca9b2b9f4760c26b11f136a7e9e6776b_prof);

        
        $__internal_8595a7f1841aff1475cf61522df1bac54312f57b0a87f8d07dd07f569137f066->leave($__internal_8595a7f1841aff1475cf61522df1bac54312f57b0a87f8d07dd07f569137f066_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e055418b1a6ab059222ea346e402152ff1d3292def3fc2fb877891cad3ceaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e055418b1a6ab059222ea346e402152ff1d3292def3fc2fb877891cad3ceaaa->enter($__internal_6e055418b1a6ab059222ea346e402152ff1d3292def3fc2fb877891cad3ceaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb4c5cc8fd5e679b84a71b01b1cc9b05ad07a4caa5b21096318ea56df5f23347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4c5cc8fd5e679b84a71b01b1cc9b05ad07a4caa5b21096318ea56df5f23347->enter($__internal_fb4c5cc8fd5e679b84a71b01b1cc9b05ad07a4caa5b21096318ea56df5f23347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row white\">
        
        <!-- Dessin  -->
        <div class=\"row\">
            <div id=\"Dessin\" class=\"col-xs-12 center ";
        // line 8
        if ((twig_length_filter($this->env, ($context["Dessin"] ?? $this->getContext($context, "Dessin"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                    <img class=\"logoT\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tdessin.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Dessin"] ?? $this->getContext($context, "Dessin"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- dessin hidden -->
            <div id=\"DessinHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Dessin"] ?? $this->getContext($context, "Dessin")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-8 \">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                        ";
            // line 22
            if ( !(null === $this->getAttribute($context["client"], "client", array()))) {
                // line 23
                echo "                            <div class=\"col-xs-4 \">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "client", array()), "dateRdv", array()), "d-m"), "html", null, true);
                echo "</div>
                        ";
            } else {
                // line 25
                echo "                            <div class=\"col-xs-4 \">...</div>
                        ";
            }
            // line 27
            echo "                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>

        <!-- PlanT  -->
        <div class=\"row\">
            <div id=\"PlanT\" class=\"col-xs-12 center ";
        // line 34
        if ((twig_length_filter($this->env, ($context["Ptech"] ?? $this->getContext($context, "Ptech"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TplanT.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Ptech"] ?? $this->getContext($context, "Ptech"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- PlanT hidden -->
            <div id=\"PlanTHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Ptech"] ?? $this->getContext($context, "Ptech")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 46
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-8 \">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                        ";
            // line 48
            if ( !(null === $this->getAttribute($context["client"], "client", array()))) {
                // line 49
                echo "                            <div class=\"col-xs-4 \">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "client", array()), "dateCloture", array()), "d-m"), "html", null, true);
                echo "</div>
                        ";
            } else {
                // line 51
                echo "                            <div class=\"col-xs-12\">...</div>
                        ";
            }
            // line 53
            echo "                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- DossierM -->
        <div class=\"row\">
            <div id=\"Dmetre\" class=\"col-xs-12 center ";
        // line 61
        if ((twig_length_filter($this->env, ($context["Dmetre"] ?? $this->getContext($context, "Dmetre"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TdossierM.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Dmetre"] ?? $this->getContext($context, "Dmetre"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- Dmetre hidden -->
            <div id=\"DmetreHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Dmetre"] ?? $this->getContext($context, "Dmetre")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 73
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12 \">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- DossierP  -->
        <div class=\"row\">
            <div id=\"Dpose\" class=\"col-xs-12 center ";
        // line 83
        if ((twig_length_filter($this->env, ($context["Dpose"] ?? $this->getContext($context, "Dpose"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TdossierP.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 89
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Dpose"] ?? $this->getContext($context, "Dpose"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- Dpose hidden -->
            <div id=\"DposeHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Dpose"] ?? $this->getContext($context, "Dpose")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 95
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12 \">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Command -->
        <div class=\"row\">
            <div id=\"Command\" class=\"col-xs-12 center ";
        // line 105
        if ((twig_length_filter($this->env, ($context["Command"] ?? $this->getContext($context, "Command"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TCommand.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Command"] ?? $this->getContext($context, "Command"))), "html", null, true);
        echo "
                </div>
            </div>
             <!-- Command hidden -->
            <div id=\"CommandHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Command"] ?? $this->getContext($context, "Command")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 117
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Facture  -->
        <div class=\"row\">
            <div id=\"Facture\" class=\"col-xs-12 center ";
        // line 127
        if ((twig_length_filter($this->env, ($context["Faccompte"] ?? $this->getContext($context, "Faccompte"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tfacture.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 133
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Faccompte"] ?? $this->getContext($context, "Faccompte"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- Faccompte hidden -->
            <div id=\"FactureHidden\" class=\"col-xs-12 hidden\">
                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Faccompte"] ?? $this->getContext($context, "Faccompte")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 139
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                            <div class=\"col-xs-12\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                    <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- RelC  -->
        <div class=\"row\">
            <div id=\"Rcheque\" class=\"col-xs-12 center ";
        // line 149
        if ((twig_length_filter($this->env, ($context["Rcheque"] ?? $this->getContext($context, "Rcheque"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TrelC.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 155
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Rcheque"] ?? $this->getContext($context, "Rcheque"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- Rcheque hidden -->
            <div id=\"RchequeHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Rcheque"] ?? $this->getContext($context, "Rcheque")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 161
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- App  -->
        <div class=\"row\">
            <div id=\"App\" class=\"col-xs-12 center ";
        // line 171
        if ((twig_length_filter($this->env, ($context["App"] ?? $this->getContext($context, "App"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tapp.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 177
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["App"] ?? $this->getContext($context, "App"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- App hidden -->
            <div id=\"AppHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["App"] ?? $this->getContext($context, "App")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 183
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12\">";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Autre  -->
        <div class=\"row\">
            <div id=\"Autre\" class=\"col-xs-12 center ";
        // line 193
        if ((twig_length_filter($this->env, ($context["Autre"] ?? $this->getContext($context, "Autre"))) < 1)) {
            echo "hidden";
        }
        echo "\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tautre.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    ";
        // line 199
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Autre"] ?? $this->getContext($context, "Autre"))), "html", null, true);
        echo "
                </div>
            </div>
            <!-- Autre hidden -->
            <div id=\"AutreHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Autre"] ?? $this->getContext($context, "Autre")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 205
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12 \"><p>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</p></div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_fb4c5cc8fd5e679b84a71b01b1cc9b05ad07a4caa5b21096318ea56df5f23347->leave($__internal_fb4c5cc8fd5e679b84a71b01b1cc9b05ad07a4caa5b21096318ea56df5f23347_prof);

        
        $__internal_6e055418b1a6ab059222ea346e402152ff1d3292def3fc2fb877891cad3ceaaa->leave($__internal_6e055418b1a6ab059222ea346e402152ff1d3292def3fc2fb877891cad3ceaaa_prof);

    }

    // line 215
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f4311505d664d66d31d4a8d5a50154ec2c9fc9f0cc747a4ba968f93080550bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4311505d664d66d31d4a8d5a50154ec2c9fc9f0cc747a4ba968f93080550bd->enter($__internal_7f4311505d664d66d31d4a8d5a50154ec2c9fc9f0cc747a4ba968f93080550bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcdb606f481f535fe3d8f1862fadddf985e248e4dfc15dab10b9d8dcbabcbaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdb606f481f535fe3d8f1862fadddf985e248e4dfc15dab10b9d8dcbabcbaca->enter($__internal_dcdb606f481f535fe3d8f1862fadddf985e248e4dfc15dab10b9d8dcbabcbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 216
        echo "    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_new");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_dcdb606f481f535fe3d8f1862fadddf985e248e4dfc15dab10b9d8dcbabcbaca->leave($__internal_dcdb606f481f535fe3d8f1862fadddf985e248e4dfc15dab10b9d8dcbabcbaca_prof);

        
        $__internal_7f4311505d664d66d31d4a8d5a50154ec2c9fc9f0cc747a4ba968f93080550bd->leave($__internal_7f4311505d664d66d31d4a8d5a50154ec2c9fc9f0cc747a4ba968f93080550bd_prof);

    }

    public function getTemplateName()
    {
        return "DashTachesBundle:liste:listeGlobal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 223,  544 => 222,  537 => 218,  533 => 217,  530 => 216,  521 => 215,  507 => 209,  498 => 206,  493 => 205,  489 => 204,  481 => 199,  475 => 196,  467 => 193,  459 => 187,  450 => 184,  445 => 183,  441 => 182,  433 => 177,  427 => 174,  419 => 171,  411 => 165,  402 => 162,  397 => 161,  393 => 160,  385 => 155,  379 => 152,  371 => 149,  363 => 143,  354 => 140,  349 => 139,  345 => 138,  337 => 133,  331 => 130,  323 => 127,  315 => 121,  306 => 118,  301 => 117,  297 => 116,  289 => 111,  283 => 108,  275 => 105,  267 => 99,  258 => 96,  253 => 95,  249 => 94,  241 => 89,  235 => 86,  227 => 83,  219 => 77,  210 => 74,  205 => 73,  201 => 72,  193 => 67,  187 => 64,  179 => 61,  171 => 55,  164 => 53,  160 => 51,  154 => 49,  152 => 48,  148 => 47,  143 => 46,  139 => 45,  131 => 40,  125 => 37,  117 => 34,  110 => 29,  103 => 27,  99 => 25,  93 => 23,  91 => 22,  87 => 21,  82 => 20,  78 => 19,  70 => 14,  64 => 11,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::coreLayout.html.twig' %}

{% block body %}
    <div class=\"row white\">
        
        <!-- Dessin  -->
        <div class=\"row\">
            <div id=\"Dessin\" class=\"col-xs-12 center {% if Dessin|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                    <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tdessin.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Dessin|length }}
                </div>
            </div>
            <!-- dessin hidden -->
            <div id=\"DessinHidden\" class=\"col-xs-12 hidden\">
                {% for client in Dessin %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-8 \">{{ client.description }}</div>
                        {% if client.client is not null %}
                            <div class=\"col-xs-4 \">{{ client.client.dateRdv|date('d-m') }}</div>
                        {% else %}
                            <div class=\"col-xs-4 \">...</div>
                        {% endif %}
                    </a>
                {% endfor %}
            </div>
        </div>

        <!-- PlanT  -->
        <div class=\"row\">
            <div id=\"PlanT\" class=\"col-xs-12 center {% if Ptech|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TplanT.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Ptech|length }}
                </div>
            </div>
            <!-- PlanT hidden -->
            <div id=\"PlanTHidden\" class=\"col-xs-12 hidden\">
                {% for client in Ptech %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-8 \">{{ client.description }}</div>
                        {% if client.client is not null %}
                            <div class=\"col-xs-4 \">{{ client.client.dateCloture|date('d-m') }}</div>
                        {% else %}
                            <div class=\"col-xs-12\">...</div>
                        {% endif %}
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- DossierM -->
        <div class=\"row\">
            <div id=\"Dmetre\" class=\"col-xs-12 center {% if Dmetre|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TdossierM.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Dmetre|length }}
                </div>
            </div>
            <!-- Dmetre hidden -->
            <div id=\"DmetreHidden\" class=\"col-xs-12 hidden\">
                {% for client in Dmetre %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12 \">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- DossierP  -->
        <div class=\"row\">
            <div id=\"Dpose\" class=\"col-xs-12 center {% if Dpose|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TdossierP.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Dpose|length }}
                </div>
            </div>
            <!-- Dpose hidden -->
            <div id=\"DposeHidden\" class=\"col-xs-12 hidden\">
                {% for client in Dpose %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12 \">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Command -->
        <div class=\"row\">
            <div id=\"Command\" class=\"col-xs-12 center {% if Command|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TCommand.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Command|length }}
                </div>
            </div>
             <!-- Command hidden -->
            <div id=\"CommandHidden\" class=\"col-xs-12 hidden\">
                {% for client in Command %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12\">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Facture  -->
        <div class=\"row\">
            <div id=\"Facture\" class=\"col-xs-12 center {% if Faccompte|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tfacture.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Faccompte|length }}
                </div>
            </div>
            <!-- Faccompte hidden -->
            <div id=\"FactureHidden\" class=\"col-xs-12 hidden\">
                    {% for client in Faccompte %}
                        <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                            <div class=\"col-xs-12\">{{ client.description }}</div>
                        </a>
                    {% endfor %}
                    <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- RelC  -->
        <div class=\"row\">
            <div id=\"Rcheque\" class=\"col-xs-12 center {% if Rcheque|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TrelC.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Rcheque|length }}
                </div>
            </div>
            <!-- Rcheque hidden -->
            <div id=\"RchequeHidden\" class=\"col-xs-12 hidden\">
                {% for client in Rcheque %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12\">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- App  -->
        <div class=\"row\">
            <div id=\"App\" class=\"col-xs-12 center {% if App|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tapp.png') }}\">
                </div>
                <div class=\"row\">
                    {{ App|length }}
                </div>
            </div>
            <!-- App hidden -->
            <div id=\"AppHidden\" class=\"col-xs-12 hidden\">
                {% for client in App%}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12\">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>

        <!-- Autre  -->
        <div class=\"row\">
            <div id=\"Autre\" class=\"col-xs-12 center {% if Autre|length < 1 %}hidden{% endif %}\">
                <div class=\"col-xs-12 tampon\"></div>
                <div class=\"row\">
                     <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tautre.png') }}\">
                </div>
                <div class=\"row\">
                    {{ Autre|length }}
                </div>
            </div>
            <!-- Autre hidden -->
            <div id=\"AutreHidden\" class=\"col-xs-12 hidden\">
                {% for client in Autre%}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-12 \"><p>{{ client.description }}</p></div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block menu %}
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_taches_new') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/ajout.png')}} \">
        </a>
    </div>
{% endblock %}", "DashTachesBundle:liste:listeGlobal.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/TachesBundle/Resources/views/liste/listeGlobal.html.twig");
    }
}
