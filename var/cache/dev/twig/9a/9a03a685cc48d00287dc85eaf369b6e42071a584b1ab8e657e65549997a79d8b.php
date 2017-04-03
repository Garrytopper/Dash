<?php

/* DashTachesBundle:formulaire:new.html.twig */
class __TwigTemplate_3d54fe1117fad53e73ba9aea31a1425225072d7de481f62dfd93fa391081bc7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashTachesBundle:formulaire:new.html.twig", 1);
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
        $__internal_4adfacf1703eb0856d0b9e85a63a2d64a526cd153da730af4fca4d9202454e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adfacf1703eb0856d0b9e85a63a2d64a526cd153da730af4fca4d9202454e8d->enter($__internal_4adfacf1703eb0856d0b9e85a63a2d64a526cd153da730af4fca4d9202454e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:new.html.twig"));

        $__internal_db259635523a0ad2d51a10ae6bbdde781bef20bd9a29cd3d3acdc54e761f9e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db259635523a0ad2d51a10ae6bbdde781bef20bd9a29cd3d3acdc54e761f9e0f->enter($__internal_db259635523a0ad2d51a10ae6bbdde781bef20bd9a29cd3d3acdc54e761f9e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4adfacf1703eb0856d0b9e85a63a2d64a526cd153da730af4fca4d9202454e8d->leave($__internal_4adfacf1703eb0856d0b9e85a63a2d64a526cd153da730af4fca4d9202454e8d_prof);

        
        $__internal_db259635523a0ad2d51a10ae6bbdde781bef20bd9a29cd3d3acdc54e761f9e0f->leave($__internal_db259635523a0ad2d51a10ae6bbdde781bef20bd9a29cd3d3acdc54e761f9e0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14573c444b1c807f58d8892154f3766827104034b856e257701818b88a913184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14573c444b1c807f58d8892154f3766827104034b856e257701818b88a913184->enter($__internal_14573c444b1c807f58d8892154f3766827104034b856e257701818b88a913184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08c06ad8f421e8313ffe7edc716b6651aacd87ae1fb8718c9a8ae3f790d933fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c06ad8f421e8313ffe7edc716b6651aacd87ae1fb8718c9a8ae3f790d933fb->enter($__internal_08c06ad8f421e8313ffe7edc716b6651aacd87ae1fb8718c9a8ae3f790d933fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_08c06ad8f421e8313ffe7edc716b6651aacd87ae1fb8718c9a8ae3f790d933fb->leave($__internal_08c06ad8f421e8313ffe7edc716b6651aacd87ae1fb8718c9a8ae3f790d933fb_prof);

        
        $__internal_14573c444b1c807f58d8892154f3766827104034b856e257701818b88a913184->leave($__internal_14573c444b1c807f58d8892154f3766827104034b856e257701818b88a913184_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc1666056432f7d381496c1a1d3829c5d46071f736f54594f2ff90a636dabd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1666056432f7d381496c1a1d3829c5d46071f736f54594f2ff90a636dabd2d->enter($__internal_dc1666056432f7d381496c1a1d3829c5d46071f736f54594f2ff90a636dabd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e0e6f931606c94d97abd3f9e254532920bfe5d4b8d54814c5c1c9461ceae040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0e6f931606c94d97abd3f9e254532920bfe5d4b8d54814c5c1c9461ceae040->enter($__internal_7e0e6f931606c94d97abd3f9e254532920bfe5d4b8d54814c5c1c9461ceae040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_liste");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tneutre.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_7e0e6f931606c94d97abd3f9e254532920bfe5d4b8d54814c5c1c9461ceae040->leave($__internal_7e0e6f931606c94d97abd3f9e254532920bfe5d4b8d54814c5c1c9461ceae040_prof);

        
        $__internal_dc1666056432f7d381496c1a1d3829c5d46071f736f54594f2ff90a636dabd2d->leave($__internal_dc1666056432f7d381496c1a1d3829c5d46071f736f54594f2ff90a636dabd2d_prof);

    }

    public function getTemplateName()
    {
        return "DashTachesBundle:formulaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  90 => 17,  83 => 13,  79 => 12,  76 => 11,  67 => 10,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        {{ form(form) }}
    </div>
{% endblock %}

{% block menu %}
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_taches_liste') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Tneutre.png')}} \">
        </a>
    </div>
{% endblock %}", "DashTachesBundle:formulaire:new.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/TachesBundle/Resources/views/formulaire/new.html.twig");
    }
}
