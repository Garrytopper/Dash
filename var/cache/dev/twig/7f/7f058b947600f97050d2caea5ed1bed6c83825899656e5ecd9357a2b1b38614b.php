<?php

/* DashTachesBundle:formulaire:modif.html.twig */
class __TwigTemplate_dc9c2b64fae72b369f3341c426019417005aa5d492aa2fd809d2fba4d2c498a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashTachesBundle:formulaire:modif.html.twig", 1);
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
        $__internal_00bd2dbb29fa223e30a2949e15e89d27323a6e2cfa1b28e12ff42ff63eede729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bd2dbb29fa223e30a2949e15e89d27323a6e2cfa1b28e12ff42ff63eede729->enter($__internal_00bd2dbb29fa223e30a2949e15e89d27323a6e2cfa1b28e12ff42ff63eede729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:modif.html.twig"));

        $__internal_2786c2dd56d831a19371bf7cc0777b0d75b774c378d1decaf315dedc2e8b0436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2786c2dd56d831a19371bf7cc0777b0d75b774c378d1decaf315dedc2e8b0436->enter($__internal_2786c2dd56d831a19371bf7cc0777b0d75b774c378d1decaf315dedc2e8b0436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00bd2dbb29fa223e30a2949e15e89d27323a6e2cfa1b28e12ff42ff63eede729->leave($__internal_00bd2dbb29fa223e30a2949e15e89d27323a6e2cfa1b28e12ff42ff63eede729_prof);

        
        $__internal_2786c2dd56d831a19371bf7cc0777b0d75b774c378d1decaf315dedc2e8b0436->leave($__internal_2786c2dd56d831a19371bf7cc0777b0d75b774c378d1decaf315dedc2e8b0436_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc2238ce279ff1a5a854f229286b23e4ccd351de546bae8985ce44db303d37e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2238ce279ff1a5a854f229286b23e4ccd351de546bae8985ce44db303d37e1->enter($__internal_bc2238ce279ff1a5a854f229286b23e4ccd351de546bae8985ce44db303d37e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5ceef7fe4d152de51db4cc170ab4d0eaed13b1fa00a0db97d8ebb4cbc32f282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ceef7fe4d152de51db4cc170ab4d0eaed13b1fa00a0db97d8ebb4cbc32f282->enter($__internal_e5ceef7fe4d152de51db4cc170ab4d0eaed13b1fa00a0db97d8ebb4cbc32f282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_supp", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
        <div class=\"col-xs-12 btn btn-danger\">Supprimer</div>
    </a>
    <div class=\"col-xs-12 tampon\"></div>
    
    <div class=\"col-xs-12 tampon\"></div>
";
        
        $__internal_e5ceef7fe4d152de51db4cc170ab4d0eaed13b1fa00a0db97d8ebb4cbc32f282->leave($__internal_e5ceef7fe4d152de51db4cc170ab4d0eaed13b1fa00a0db97d8ebb4cbc32f282_prof);

        
        $__internal_bc2238ce279ff1a5a854f229286b23e4ccd351de546bae8985ce44db303d37e1->leave($__internal_bc2238ce279ff1a5a854f229286b23e4ccd351de546bae8985ce44db303d37e1_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81bd2494e084a9f23c479dcf86550c79deee08ea92fe37ac9d0672149fb58472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bd2494e084a9f23c479dcf86550c79deee08ea92fe37ac9d0672149fb58472->enter($__internal_81bd2494e084a9f23c479dcf86550c79deee08ea92fe37ac9d0672149fb58472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53186764b407aa20f7c7cbf16ca0f3a32774d675cf436415c13dd7fdc83bfb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53186764b407aa20f7c7cbf16ca0f3a32774d675cf436415c13dd7fdc83bfb0a->enter($__internal_53186764b407aa20f7c7cbf16ca0f3a32774d675cf436415c13dd7fdc83bfb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_liste");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Tneutre.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_53186764b407aa20f7c7cbf16ca0f3a32774d675cf436415c13dd7fdc83bfb0a->leave($__internal_53186764b407aa20f7c7cbf16ca0f3a32774d675cf436415c13dd7fdc83bfb0a_prof);

        
        $__internal_81bd2494e084a9f23c479dcf86550c79deee08ea92fe37ac9d0672149fb58472->leave($__internal_81bd2494e084a9f23c479dcf86550c79deee08ea92fe37ac9d0672149fb58472_prof);

    }

    public function getTemplateName()
    {
        return "DashTachesBundle:formulaire:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  99 => 23,  92 => 19,  88 => 18,  85 => 17,  76 => 16,  59 => 8,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <a href=\"{{ path('dash_taches_supp', {'id': id}) }}\">
        <div class=\"col-xs-12 btn btn-danger\">Supprimer</div>
    </a>
    <div class=\"col-xs-12 tampon\"></div>
    
    <div class=\"col-xs-12 tampon\"></div>
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
{% endblock %}", "DashTachesBundle:formulaire:modif.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/TachesBundle/Resources/views/formulaire/modif.html.twig");
    }
}
