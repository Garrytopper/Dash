<?php

/* DashCoreBundle:objectif:objectif.html.twig */
class __TwigTemplate_ac059be544891ab696d8f3b6c8a2d7fcb5e5977ae2917a7612e53e085b816652 extends Twig_Template
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
        $__internal_c0be19b569ec6d3c4f43797d2d8637749f6d47d699b64ea7f7e8bac7e6e3d210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0be19b569ec6d3c4f43797d2d8637749f6d47d699b64ea7f7e8bac7e6e3d210->enter($__internal_c0be19b569ec6d3c4f43797d2d8637749f6d47d699b64ea7f7e8bac7e6e3d210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle:objectif:objectif.html.twig"));

        $__internal_b18165bb3cd2a2c01b8076a1551b9cb171539a45b422d05e980d398e88c75aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18165bb3cd2a2c01b8076a1551b9cb171539a45b422d05e980d398e88c75aef->enter($__internal_b18165bb3cd2a2c01b8076a1551b9cb171539a45b422d05e980d398e88c75aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashCoreBundle:objectif:objectif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0be19b569ec6d3c4f43797d2d8637749f6d47d699b64ea7f7e8bac7e6e3d210->leave($__internal_c0be19b569ec6d3c4f43797d2d8637749f6d47d699b64ea7f7e8bac7e6e3d210_prof);

        
        $__internal_b18165bb3cd2a2c01b8076a1551b9cb171539a45b422d05e980d398e88c75aef->leave($__internal_b18165bb3cd2a2c01b8076a1551b9cb171539a45b422d05e980d398e88c75aef_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef5acd85054d2307da4f27e05963db9f4dce3ea338f561947c5c950ca2272a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5acd85054d2307da4f27e05963db9f4dce3ea338f561947c5c950ca2272a6e->enter($__internal_ef5acd85054d2307da4f27e05963db9f4dce3ea338f561947c5c950ca2272a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c848a605699420978a8cf75eddd59778cedbdaadda49338fbc5c93faf981199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c848a605699420978a8cf75eddd59778cedbdaadda49338fbc5c93faf981199->enter($__internal_1c848a605699420978a8cf75eddd59778cedbdaadda49338fbc5c93faf981199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        
        $__internal_1c848a605699420978a8cf75eddd59778cedbdaadda49338fbc5c93faf981199->leave($__internal_1c848a605699420978a8cf75eddd59778cedbdaadda49338fbc5c93faf981199_prof);

        
        $__internal_ef5acd85054d2307da4f27e05963db9f4dce3ea338f561947c5c950ca2272a6e->leave($__internal_ef5acd85054d2307da4f27e05963db9f4dce3ea338f561947c5c950ca2272a6e_prof);

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
