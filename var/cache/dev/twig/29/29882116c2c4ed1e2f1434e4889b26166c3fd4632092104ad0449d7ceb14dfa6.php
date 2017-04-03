<?php

/* DashCoreBundle:objectif:objectif.html.twig */
class __TwigTemplate_0888ab7c6ee7faca8c3bf8e1162a0078172bdf10f23181de1825f8fe1eaff270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashCoreBundle:objectif:objectif.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DashCoreBundle::coreLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ec5bf89f6cac6c68c6a3eac0607bb69981ba6fd664232bd57272e3b0ed2349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ec5bf89f6cac6c68c6a3eac0607bb69981ba6fd664232bd57272e3b0ed2349->enter($__internal_d4ec5bf89f6cac6c68c6a3eac0607bb69981ba6fd664232bd57272e3b0ed2349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle:objectif:objectif.html.twig"));

        $__internal_c653d9f8e4714d613ea693b56cdc5a89b184300aaa27c0ba4cc71a2bf0b52b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c653d9f8e4714d613ea693b56cdc5a89b184300aaa27c0ba4cc71a2bf0b52b61->enter($__internal_c653d9f8e4714d613ea693b56cdc5a89b184300aaa27c0ba4cc71a2bf0b52b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle:objectif:objectif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ec5bf89f6cac6c68c6a3eac0607bb69981ba6fd664232bd57272e3b0ed2349->leave($__internal_d4ec5bf89f6cac6c68c6a3eac0607bb69981ba6fd664232bd57272e3b0ed2349_prof);

        
        $__internal_c653d9f8e4714d613ea693b56cdc5a89b184300aaa27c0ba4cc71a2bf0b52b61->leave($__internal_c653d9f8e4714d613ea693b56cdc5a89b184300aaa27c0ba4cc71a2bf0b52b61_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a45286d31850f9820b360097933ff9bc0aab0d2436b62b24e9b5f43ab0dc0206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45286d31850f9820b360097933ff9bc0aab0d2436b62b24e9b5f43ab0dc0206->enter($__internal_a45286d31850f9820b360097933ff9bc0aab0d2436b62b24e9b5f43ab0dc0206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56dc40badacb563016cc7317ff6fe9f625de3128c1d909243204bd81e209d417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dc40badacb563016cc7317ff6fe9f625de3128c1d909243204bd81e209d417->enter($__internal_56dc40badacb563016cc7317ff6fe9f625de3128c1d909243204bd81e209d417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    <div class=\"row center\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo "\">
        </a>
    </div>
";
        
        $__internal_56dc40badacb563016cc7317ff6fe9f625de3128c1d909243204bd81e209d417->leave($__internal_56dc40badacb563016cc7317ff6fe9f625de3128c1d909243204bd81e209d417_prof);

        
        $__internal_a45286d31850f9820b360097933ff9bc0aab0d2436b62b24e9b5f43ab0dc0206->leave($__internal_a45286d31850f9820b360097933ff9bc0aab0d2436b62b24e9b5f43ab0dc0206_prof);

    }

    public function getTemplateName()
    {
        return "DashCoreBundle:objectif:objectif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    {{ form(form) }}
    <div class=\"row center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/home.png') }}\">
        </a>
    </div>
{% endblock %}", "DashCoreBundle:objectif:objectif.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/CoreBundle/Resources/views/objectif/objectif.html.twig");
    }
}
