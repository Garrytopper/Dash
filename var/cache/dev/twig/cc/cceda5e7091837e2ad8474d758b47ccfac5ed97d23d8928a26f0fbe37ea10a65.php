<?php

/* DashTachesBundle:liste:listeGlobal.html.twig */
class __TwigTemplate_246994cc168e1e040a5abba27268e6f4ce479974f0cb2361275d1e583501a5e7 extends Twig_Template
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
        $__internal_0c61004ce7129e7d6f91738f4ab7c5f746329e97e261f3311ea586fcab92893a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c61004ce7129e7d6f91738f4ab7c5f746329e97e261f3311ea586fcab92893a->enter($__internal_0c61004ce7129e7d6f91738f4ab7c5f746329e97e261f3311ea586fcab92893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:liste:listeGlobal.html.twig"));

        $__internal_406251b0e7d5434915975fa8528dca586a930e6b289ec8a9779ba848a15323fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406251b0e7d5434915975fa8528dca586a930e6b289ec8a9779ba848a15323fd->enter($__internal_406251b0e7d5434915975fa8528dca586a930e6b289ec8a9779ba848a15323fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:liste:listeGlobal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c61004ce7129e7d6f91738f4ab7c5f746329e97e261f3311ea586fcab92893a->leave($__internal_0c61004ce7129e7d6f91738f4ab7c5f746329e97e261f3311ea586fcab92893a_prof);

        
        $__internal_406251b0e7d5434915975fa8528dca586a930e6b289ec8a9779ba848a15323fd->leave($__internal_406251b0e7d5434915975fa8528dca586a930e6b289ec8a9779ba848a15323fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a0c4aa342e1d9777bb2a7ad958582ea4a8d5c5130d37906ac1fb6503d0a5a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0c4aa342e1d9777bb2a7ad958582ea4a8d5c5130d37906ac1fb6503d0a5a32->enter($__internal_9a0c4aa342e1d9777bb2a7ad958582ea4a8d5c5130d37906ac1fb6503d0a5a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5ac4b9db5e34782d2669c425cfa637342dacca378c1224d418115454791316d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ac4b9db5e34782d2669c425cfa637342dacca378c1224d418115454791316d->enter($__internal_a5ac4b9db5e34782d2669c425cfa637342dacca378c1224d418115454791316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row white\">
        <div class=\"col-xs-12 tampon\"></div>
        <!-- Dessin  -->
        <div id=\"Dessin\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tdessin.png"), "html", null, true);
        echo "\">
        </div>
        <!-- PlanT  -->
        <div id=\"PlanT\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TplanT.png"), "html", null, true);
        echo "\">
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            ";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Dessin"]) ? $context["Dessin"] : $this->getContext($context, "Dessin"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-6 center\">
            ";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Ptech"]) ? $context["Ptech"] : $this->getContext($context, "Ptech"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- dessin hidden -->
        <div id=\"DessinHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Dessin"]) ? $context["Dessin"] : $this->getContext($context, "Dessin")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 27
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-4 center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-4 center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- PlanT hidden -->
        <div id=\"PlanTHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ptech"]) ? $context["Ptech"] : $this->getContext($context, "Ptech")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 37
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- DossierM -->
         <div id=\"Dmetre\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TdossierM.png"), "html", null, true);
        echo "\">
        </div>
        <!-- DossierP  -->
         <div id=\"Dpose\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TdossierP.png"), "html", null, true);
        echo "\">
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            ";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Dmetre"]) ? $context["Dmetre"] : $this->getContext($context, "Dmetre"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-6 center\">
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Dpose"]) ? $context["Dpose"] : $this->getContext($context, "Dpose"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- Dmetre hidden -->
        <div id=\"DmetreHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Dmetre"]) ? $context["Dmetre"] : $this->getContext($context, "Dmetre")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 66
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Dpose hidden -->
        <div id=\"DposeHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Dpose"]) ? $context["Dpose"] : $this->getContext($context, "Dpose")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 76
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- Command -->
         <div id=\"Command\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TCommand.png"), "html", null, true);
        echo "\">
        </div>
        <!--   -->
         <div id=\"\" class=\"col-xs-6 center\">
            
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            ";
        // line 95
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Command"]) ? $context["Command"] : $this->getContext($context, "Command"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-6 center\">

        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- Command hidden -->
        <div id=\"CommandHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Command"]) ? $context["Command"] : $this->getContext($context, "Command")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 105
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- -->
        <div id=\"\" class=\"col-xs-12 hidden\">
            
            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- Facture  -->
         <div id=\"Facture\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tfacture.png"), "html", null, true);
        echo "\">
        </div>
        <!-- RelC  -->
         <div id=\"Rcheque\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/TrelC.png"), "html", null, true);
        echo "\">
        </div>
 
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            ";
        // line 129
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Faccompte"]) ? $context["Faccompte"] : $this->getContext($context, "Faccompte"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-6 center\">
            ";
        // line 132
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Rcheque"]) ? $context["Rcheque"] : $this->getContext($context, "Rcheque"))), "html", null, true);
        echo "
        </div>  
        <div class=\"col-xs-12 tampon\"></div>
        <!-- Faccompte hidden -->
        <div id=\"FactureHidden\" class=\"col-xs-12 hidden\">
                ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Faccompte"]) ? $context["Faccompte"] : $this->getContext($context, "Faccompte")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 138
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-6 center\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                        <div class=\"col-xs-6 center\">";
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
        echo "                <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Rcheque hidden -->
        <div id=\"RchequeHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Rcheque"]) ? $context["Rcheque"] : $this->getContext($context, "Rcheque")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 148
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- App  -->
        <div id=\"App\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tapp.png"), "html", null, true);
        echo "\">
        </div>
        <!-- Autre  -->
        <div id=\"Autre\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tautre.png"), "html", null, true);
        echo "\">
        </div>
     
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            ";
        // line 167
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["App"]) ? $context["App"] : $this->getContext($context, "App"))), "html", null, true);
        echo "
        </div> 
        <div class=\"col-xs-6 center\">
           ";
        // line 170
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Autre"]) ? $context["Autre"] : $this->getContext($context, "Autre"))), "html", null, true);
        echo "
        </div>  
        <div class=\"col-xs-12 tampon\"></div>
        <!-- App hidden -->
        <div id=\"AppHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["App"]) ? $context["App"] : $this->getContext($context, "App")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 176
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Autre hidden -->
        <div id=\"AutreHidden\" class=\"col-xs-12 hidden\">
            ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Autre"]) ? $context["Autre"] : $this->getContext($context, "Autre")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 186
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-xs-6 center\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "tache", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-xs-6 center\">";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "description", array()), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "            <div class=\"col-xs-12 tampon\"></div>
        </div>
    </div>
";
        
        $__internal_a5ac4b9db5e34782d2669c425cfa637342dacca378c1224d418115454791316d->leave($__internal_a5ac4b9db5e34782d2669c425cfa637342dacca378c1224d418115454791316d_prof);

        
        $__internal_9a0c4aa342e1d9777bb2a7ad958582ea4a8d5c5130d37906ac1fb6503d0a5a32->leave($__internal_9a0c4aa342e1d9777bb2a7ad958582ea4a8d5c5130d37906ac1fb6503d0a5a32_prof);

    }

    // line 196
    public function block_menu($context, array $blocks = array())
    {
        $__internal_889e1dcd88dd8f4394e936ae1e142b784b31e4e0ae72162e864ecc1807aaf1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889e1dcd88dd8f4394e936ae1e142b784b31e4e0ae72162e864ecc1807aaf1fe->enter($__internal_889e1dcd88dd8f4394e936ae1e142b784b31e4e0ae72162e864ecc1807aaf1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00259d54d092f793b603d60252be72439d14ffb5aa052aec41311ef040ebe87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00259d54d092f793b603d60252be72439d14ffb5aa052aec41311ef040ebe87c->enter($__internal_00259d54d092f793b603d60252be72439d14ffb5aa052aec41311ef040ebe87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 197
        echo "    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_new");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_00259d54d092f793b603d60252be72439d14ffb5aa052aec41311ef040ebe87c->leave($__internal_00259d54d092f793b603d60252be72439d14ffb5aa052aec41311ef040ebe87c_prof);

        
        $__internal_889e1dcd88dd8f4394e936ae1e142b784b31e4e0ae72162e864ecc1807aaf1fe->leave($__internal_889e1dcd88dd8f4394e936ae1e142b784b31e4e0ae72162e864ecc1807aaf1fe_prof);

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
        return array (  493 => 204,  489 => 203,  482 => 199,  478 => 198,  475 => 197,  466 => 196,  453 => 191,  444 => 188,  440 => 187,  435 => 186,  431 => 185,  425 => 181,  416 => 178,  412 => 177,  407 => 176,  403 => 175,  395 => 170,  389 => 167,  381 => 162,  374 => 158,  367 => 153,  358 => 150,  354 => 149,  349 => 148,  345 => 147,  339 => 143,  330 => 140,  326 => 139,  321 => 138,  317 => 137,  309 => 132,  303 => 129,  295 => 124,  288 => 120,  276 => 110,  267 => 107,  263 => 106,  258 => 105,  254 => 104,  242 => 95,  230 => 86,  223 => 81,  214 => 78,  210 => 77,  205 => 76,  201 => 75,  195 => 71,  186 => 68,  182 => 67,  177 => 66,  173 => 65,  164 => 59,  158 => 56,  150 => 51,  143 => 47,  136 => 42,  127 => 39,  123 => 38,  118 => 37,  114 => 36,  108 => 32,  99 => 29,  95 => 28,  90 => 27,  86 => 26,  77 => 20,  71 => 17,  63 => 12,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
        <div class=\"col-xs-12 tampon\"></div>
        <!-- Dessin  -->
        <div id=\"Dessin\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tdessin.png') }}\">
        </div>
        <!-- PlanT  -->
        <div id=\"PlanT\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TplanT.png') }}\">
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            {{ Dessin|length }}
        </div> 
        <div class=\"col-xs-6 center\">
            {{ Ptech|length }}
        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- dessin hidden -->
        <div id=\"DessinHidden\" class=\"col-xs-12 hidden\">
            {% for client in Dessin %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-4 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-4 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- PlanT hidden -->
        <div id=\"PlanTHidden\" class=\"col-xs-12 hidden\">
            {% for client in Ptech %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- DossierM -->
         <div id=\"Dmetre\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TdossierM.png') }}\">
        </div>
        <!-- DossierP  -->
         <div id=\"Dpose\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TdossierP.png') }}\">
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            {{ Dmetre|length }}
        </div> 
        <div class=\"col-xs-6 center\">
            {{ Dpose|length }}
        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- Dmetre hidden -->
        <div id=\"DmetreHidden\" class=\"col-xs-12 hidden\">
            {% for client in Dmetre %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Dpose hidden -->
        <div id=\"DposeHidden\" class=\"col-xs-12 hidden\">
            {% for client in Dpose %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- Command -->
         <div id=\"Command\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TCommand.png') }}\">
        </div>
        <!--   -->
         <div id=\"\" class=\"col-xs-6 center\">
            
        </div>
    
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            {{ Command|length }}
        </div> 
        <div class=\"col-xs-6 center\">

        </div> 
        <div class=\"col-xs-12 tampon\"></div>

        <!-- Command hidden -->
        <div id=\"CommandHidden\" class=\"col-xs-12 hidden\">
            {% for client in Command %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- -->
        <div id=\"\" class=\"col-xs-12 hidden\">
            
            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- Facture  -->
         <div id=\"Facture\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tfacture.png') }}\">
        </div>
        <!-- RelC  -->
         <div id=\"Rcheque\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/TrelC.png') }}\">
        </div>
 
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            {{ Faccompte|length }}
        </div> 
        <div class=\"col-xs-6 center\">
            {{  Rcheque|length }}
        </div>  
        <div class=\"col-xs-12 tampon\"></div>
        <!-- Faccompte hidden -->
        <div id=\"FactureHidden\" class=\"col-xs-12 hidden\">
                {% for client in Faccompte %}
                    <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                        <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                        <div class=\"col-xs-6 center\">{{ client.description }}</div>
                    </a>
                {% endfor %}
                <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Rcheque hidden -->
        <div id=\"RchequeHidden\" class=\"col-xs-12 hidden\">
            {% for client in Rcheque %}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>

        <!-- App  -->
        <div id=\"App\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tapp.png') }}\">
        </div>
        <!-- Autre  -->
        <div id=\"Autre\" class=\"col-xs-6 center\">
            <img class=\"logoT\" src=\"{{ asset('bundles/dashcore/image/Tautre.png') }}\">
        </div>
     
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-6 center\">
            {{ App|length }}
        </div> 
        <div class=\"col-xs-6 center\">
           {{ Autre|length}}
        </div>  
        <div class=\"col-xs-12 tampon\"></div>
        <!-- App hidden -->
        <div id=\"AppHidden\" class=\"col-xs-12 hidden\">
            {% for client in App%}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
        </div>
        <!-- Autre hidden -->
        <div id=\"AutreHidden\" class=\"col-xs-12 hidden\">
            {% for client in Autre%}
                <a href=\"{{ path('dash_taches_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-6 center\">{{ client.tache }}</div>
                    <div class=\"col-xs-6 center\">{{ client.description }}</div>
                </a>
            {% endfor %}
            <div class=\"col-xs-12 tampon\"></div>
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
