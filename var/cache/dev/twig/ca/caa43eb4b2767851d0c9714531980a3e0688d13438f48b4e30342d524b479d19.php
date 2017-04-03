<?php

/* DashPortefeuilleBundle:formulaire:modif.html.twig */
class __TwigTemplate_f2d8b90c10764e90ce89a909dc77fcdc74785f4f731993104fc2828c790260b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashPortefeuilleBundle:formulaire:modif.html.twig", 1);
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
        $__internal_a172caf9c9ebb363f136ac26fcd3c4fb331dcda347fea7d8d22456fd105a7fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a172caf9c9ebb363f136ac26fcd3c4fb331dcda347fea7d8d22456fd105a7fd1->enter($__internal_a172caf9c9ebb363f136ac26fcd3c4fb331dcda347fea7d8d22456fd105a7fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:modif.html.twig"));

        $__internal_1fc4321b75140f4aae7e062393a7ae3cea4d7e826a77e29fb964eb9bf3770811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc4321b75140f4aae7e062393a7ae3cea4d7e826a77e29fb964eb9bf3770811->enter($__internal_1fc4321b75140f4aae7e062393a7ae3cea4d7e826a77e29fb964eb9bf3770811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a172caf9c9ebb363f136ac26fcd3c4fb331dcda347fea7d8d22456fd105a7fd1->leave($__internal_a172caf9c9ebb363f136ac26fcd3c4fb331dcda347fea7d8d22456fd105a7fd1_prof);

        
        $__internal_1fc4321b75140f4aae7e062393a7ae3cea4d7e826a77e29fb964eb9bf3770811->leave($__internal_1fc4321b75140f4aae7e062393a7ae3cea4d7e826a77e29fb964eb9bf3770811_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55d40bdc21fccc5e3b34cdba3d5d6c70c37ef5892e7a368d1dd2bfe57e8ba895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d40bdc21fccc5e3b34cdba3d5d6c70c37ef5892e7a368d1dd2bfe57e8ba895->enter($__internal_55d40bdc21fccc5e3b34cdba3d5d6c70c37ef5892e7a368d1dd2bfe57e8ba895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b55e8acc7ff36a215fba3bed0062260f2b4bead7d073bc98a7f4ebb741942f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b55e8acc7ff36a215fba3bed0062260f2b4bead7d073bc98a7f4ebb741942f8->enter($__internal_5b55e8acc7ff36a215fba3bed0062260f2b4bead7d073bc98a7f4ebb741942f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_supp", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
    
";
        
        $__internal_5b55e8acc7ff36a215fba3bed0062260f2b4bead7d073bc98a7f4ebb741942f8->leave($__internal_5b55e8acc7ff36a215fba3bed0062260f2b4bead7d073bc98a7f4ebb741942f8_prof);

        
        $__internal_55d40bdc21fccc5e3b34cdba3d5d6c70c37ef5892e7a368d1dd2bfe57e8ba895->leave($__internal_55d40bdc21fccc5e3b34cdba3d5d6c70c37ef5892e7a368d1dd2bfe57e8ba895_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_889cb6220d6ac3e3f858075d3e554b9fa9861b09d899a6f3b70eff87238ea3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889cb6220d6ac3e3f858075d3e554b9fa9861b09d899a6f3b70eff87238ea3e9->enter($__internal_889cb6220d6ac3e3f858075d3e554b9fa9861b09d899a6f3b70eff87238ea3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_418fe430507bfff47e1000112ab1b33432d91db77278f0c4fc0cb9a1055801e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418fe430507bfff47e1000112ab1b33432d91db77278f0c4fc0cb9a1055801e2->enter($__internal_418fe430507bfff47e1000112ab1b33432d91db77278f0c4fc0cb9a1055801e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "        <div class=\"col-xs-6 center\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
                <img class=\"logo\" src=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
            </a>
         </div>
        <div class=\"col-xs-6 center\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_listeGeneral");
        echo "\">
                <img class=\"logo\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Cneutre.png"), "html", null, true);
        echo " \">
            </a>
        </div>
";
        
        $__internal_418fe430507bfff47e1000112ab1b33432d91db77278f0c4fc0cb9a1055801e2->leave($__internal_418fe430507bfff47e1000112ab1b33432d91db77278f0c4fc0cb9a1055801e2_prof);

        
        $__internal_889cb6220d6ac3e3f858075d3e554b9fa9861b09d899a6f3b70eff87238ea3e9->leave($__internal_889cb6220d6ac3e3f858075d3e554b9fa9861b09d899a6f3b70eff87238ea3e9_prof);

    }

    public function getTemplateName()
    {
        return "DashPortefeuilleBundle:formulaire:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 19,  88 => 15,  84 => 14,  81 => 13,  72 => 12,  59 => 8,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::coreLayout.html.twig'%}

{% block body %}
    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        {{ form(form) }}
    </div>
    <a href=\"{{ path('dash_portefeuille_supp', {'id': id}) }}\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
    
{% endblock %}

{% block menu %}
        <div class=\"col-xs-6 center\">
            <a href=\"{{ path('dash_core_homepage') }}\">
                <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
            </a>
         </div>
        <div class=\"col-xs-6 center\">
            <a href=\"{{ path('dash_portefeuille_listeGeneral') }}\">
                <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Cneutre.png')}} \">
            </a>
        </div>
{% endblock %}", "DashPortefeuilleBundle:formulaire:modif.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/PortefeuilleBundle/Resources/views/formulaire/modif.html.twig");
    }
}
