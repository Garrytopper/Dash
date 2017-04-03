<?php

/* DashPortefeuilleBundle:formulaire:newClient.html.twig */
class __TwigTemplate_9ce29c03801325949d8e183201910995ee869670f0e1b74f682880d55d284dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashPortefeuilleBundle:formulaire:newClient.html.twig", 1);
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
        $__internal_ab074bfc49eba4f76b6e7d80fa7a7d0aa62dfbcea0c3405e74fb1673c68591e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab074bfc49eba4f76b6e7d80fa7a7d0aa62dfbcea0c3405e74fb1673c68591e6->enter($__internal_ab074bfc49eba4f76b6e7d80fa7a7d0aa62dfbcea0c3405e74fb1673c68591e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:newClient.html.twig"));

        $__internal_ce0ea44dd009d424dd5df039723cd5635b8df022c2fdd379ad91c0cdf5b5c2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0ea44dd009d424dd5df039723cd5635b8df022c2fdd379ad91c0cdf5b5c2d8->enter($__internal_ce0ea44dd009d424dd5df039723cd5635b8df022c2fdd379ad91c0cdf5b5c2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:newClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab074bfc49eba4f76b6e7d80fa7a7d0aa62dfbcea0c3405e74fb1673c68591e6->leave($__internal_ab074bfc49eba4f76b6e7d80fa7a7d0aa62dfbcea0c3405e74fb1673c68591e6_prof);

        
        $__internal_ce0ea44dd009d424dd5df039723cd5635b8df022c2fdd379ad91c0cdf5b5c2d8->leave($__internal_ce0ea44dd009d424dd5df039723cd5635b8df022c2fdd379ad91c0cdf5b5c2d8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad8276df99e7a61fc26787a489107142a3776b53abadbe172d5547c52b9f6baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8276df99e7a61fc26787a489107142a3776b53abadbe172d5547c52b9f6baa->enter($__internal_ad8276df99e7a61fc26787a489107142a3776b53abadbe172d5547c52b9f6baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5059dbbfb870c7401e429dad5b739cc783550190270c5c46c487f8bd5e3f1557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5059dbbfb870c7401e429dad5b739cc783550190270c5c46c487f8bd5e3f1557->enter($__internal_5059dbbfb870c7401e429dad5b739cc783550190270c5c46c487f8bd5e3f1557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
    
";
        
        $__internal_5059dbbfb870c7401e429dad5b739cc783550190270c5c46c487f8bd5e3f1557->leave($__internal_5059dbbfb870c7401e429dad5b739cc783550190270c5c46c487f8bd5e3f1557_prof);

        
        $__internal_ad8276df99e7a61fc26787a489107142a3776b53abadbe172d5547c52b9f6baa->leave($__internal_ad8276df99e7a61fc26787a489107142a3776b53abadbe172d5547c52b9f6baa_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f3b6840d073fb7a9912f199d2fc133409033459e5fd767abbb756b8cc8fb8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3b6840d073fb7a9912f199d2fc133409033459e5fd767abbb756b8cc8fb8ad->enter($__internal_4f3b6840d073fb7a9912f199d2fc133409033459e5fd767abbb756b8cc8fb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8aeb07f61850cc8d513cb979d067a075fe3ae9341a433910fe5e5caef55c6bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aeb07f61850cc8d513cb979d067a075fe3ae9341a433910fe5e5caef55c6bbd->enter($__internal_8aeb07f61850cc8d513cb979d067a075fe3ae9341a433910fe5e5caef55c6bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "    <div class=\"col-xs-12 center\">
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
";
        
        $__internal_8aeb07f61850cc8d513cb979d067a075fe3ae9341a433910fe5e5caef55c6bbd->leave($__internal_8aeb07f61850cc8d513cb979d067a075fe3ae9341a433910fe5e5caef55c6bbd_prof);

        
        $__internal_4f3b6840d073fb7a9912f199d2fc133409033459e5fd767abbb756b8cc8fb8ad->leave($__internal_4f3b6840d073fb7a9912f199d2fc133409033459e5fd767abbb756b8cc8fb8ad_prof);

    }

    public function getTemplateName()
    {
        return "DashPortefeuilleBundle:formulaire:newClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  80 => 12,  77 => 11,  68 => 10,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body%}
    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        {{ form(form) }}
    </div>
    
{% endblock %}

{% block menu %}
    <div class=\"col-xs-12 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
{% endblock %}", "DashPortefeuilleBundle:formulaire:newClient.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/PortefeuilleBundle/Resources/views/formulaire/newClient.html.twig");
    }
}
