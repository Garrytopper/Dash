<?php

/* DashDventeBundle:formulaire:new.html.twig */
class __TwigTemplate_799022f538da1133baf37407cab475b56b7e44c30ef7ed892245ec74ee871dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:formulaire:new.html.twig", 1);
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
        $__internal_8ff06121c9a81b84a7283f1b9f4eef8c97fc81146f1114ed28431567c59db0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff06121c9a81b84a7283f1b9f4eef8c97fc81146f1114ed28431567c59db0ca->enter($__internal_8ff06121c9a81b84a7283f1b9f4eef8c97fc81146f1114ed28431567c59db0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:formulaire:new.html.twig"));

        $__internal_a58162d33a672ba83843a626d68eb4f6699ae1280ee177fdb41a0f3d9ca96e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58162d33a672ba83843a626d68eb4f6699ae1280ee177fdb41a0f3d9ca96e1b->enter($__internal_a58162d33a672ba83843a626d68eb4f6699ae1280ee177fdb41a0f3d9ca96e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:formulaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff06121c9a81b84a7283f1b9f4eef8c97fc81146f1114ed28431567c59db0ca->leave($__internal_8ff06121c9a81b84a7283f1b9f4eef8c97fc81146f1114ed28431567c59db0ca_prof);

        
        $__internal_a58162d33a672ba83843a626d68eb4f6699ae1280ee177fdb41a0f3d9ca96e1b->leave($__internal_a58162d33a672ba83843a626d68eb4f6699ae1280ee177fdb41a0f3d9ca96e1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5a00708ae87d4a78b40e02305737c3051de50fa7ff58d17b549f28c5bcf762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5a00708ae87d4a78b40e02305737c3051de50fa7ff58d17b549f28c5bcf762->enter($__internal_9b5a00708ae87d4a78b40e02305737c3051de50fa7ff58d17b549f28c5bcf762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c5082f05cbc40a55a616b8c795945527449f5eacad6995e015658a5a422f5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5082f05cbc40a55a616b8c795945527449f5eacad6995e015658a5a422f5b5->enter($__internal_2c5082f05cbc40a55a616b8c795945527449f5eacad6995e015658a5a422f5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_2c5082f05cbc40a55a616b8c795945527449f5eacad6995e015658a5a422f5b5->leave($__internal_2c5082f05cbc40a55a616b8c795945527449f5eacad6995e015658a5a422f5b5_prof);

        
        $__internal_9b5a00708ae87d4a78b40e02305737c3051de50fa7ff58d17b549f28c5bcf762->leave($__internal_9b5a00708ae87d4a78b40e02305737c3051de50fa7ff58d17b549f28c5bcf762_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_545bbfdd69aabe94361c2c86a25cf0a33dd6e5dad67c18bfde2b481fb0d1fc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545bbfdd69aabe94361c2c86a25cf0a33dd6e5dad67c18bfde2b481fb0d1fc6a->enter($__internal_545bbfdd69aabe94361c2c86a25cf0a33dd6e5dad67c18bfde2b481fb0d1fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a935f1d055c0b7e2e2d9f58188d1edc010078941cb06a889abc76f1e5aeeb350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a935f1d055c0b7e2e2d9f58188d1edc010078941cb06a889abc76f1e5aeeb350->enter($__internal_a935f1d055c0b7e2e2d9f58188d1edc010078941cb06a889abc76f1e5aeeb350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "    <div class='col-xs-offset-3 col-xs-6'>
        <div class=\"btn btn-info\">Next</div>
    </div>
";
        
        $__internal_a935f1d055c0b7e2e2d9f58188d1edc010078941cb06a889abc76f1e5aeeb350->leave($__internal_a935f1d055c0b7e2e2d9f58188d1edc010078941cb06a889abc76f1e5aeeb350_prof);

        
        $__internal_545bbfdd69aabe94361c2c86a25cf0a33dd6e5dad67c18bfde2b481fb0d1fc6a->leave($__internal_545bbfdd69aabe94361c2c86a25cf0a33dd6e5dad67c18bfde2b481fb0d1fc6a_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:formulaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  67 => 10,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class='col-xs-offset-3 col-xs-6'>
        <div class=\"btn btn-info\">Next</div>
    </div>
{% endblock %}", "DashDventeBundle:formulaire:new.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/formulaire/new.html.twig");
    }
}
