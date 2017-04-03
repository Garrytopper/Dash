<?php

/* DashPortefeuilleBundle:formulaire:newClient.html.twig */
class __TwigTemplate_774defb78b2946e00f13434d3918c77494984d5c5fa740bf24825bdd79a66e97 extends Twig_Template
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
        $__internal_90e5048dda8216829e8ac2be80f2a37c87466100b33a7230620cdb959c22587e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e5048dda8216829e8ac2be80f2a37c87466100b33a7230620cdb959c22587e->enter($__internal_90e5048dda8216829e8ac2be80f2a37c87466100b33a7230620cdb959c22587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:newClient.html.twig"));

        $__internal_d795696b5147dd0c3b849624a98f8092187c09ea0fcf629c5abb4377ce70c465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d795696b5147dd0c3b849624a98f8092187c09ea0fcf629c5abb4377ce70c465->enter($__internal_d795696b5147dd0c3b849624a98f8092187c09ea0fcf629c5abb4377ce70c465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:newClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e5048dda8216829e8ac2be80f2a37c87466100b33a7230620cdb959c22587e->leave($__internal_90e5048dda8216829e8ac2be80f2a37c87466100b33a7230620cdb959c22587e_prof);

        
        $__internal_d795696b5147dd0c3b849624a98f8092187c09ea0fcf629c5abb4377ce70c465->leave($__internal_d795696b5147dd0c3b849624a98f8092187c09ea0fcf629c5abb4377ce70c465_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8153ccf016d40ed301dc0971995ee1e44ad498b5d798f7b2c38edabd22912e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8153ccf016d40ed301dc0971995ee1e44ad498b5d798f7b2c38edabd22912e31->enter($__internal_8153ccf016d40ed301dc0971995ee1e44ad498b5d798f7b2c38edabd22912e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85e42403c9990f15440e8549f2247ebeb1c7df3a94a84cd3671d14e692720501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e42403c9990f15440e8549f2247ebeb1c7df3a94a84cd3671d14e692720501->enter($__internal_85e42403c9990f15440e8549f2247ebeb1c7df3a94a84cd3671d14e692720501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
    
";
        
        $__internal_85e42403c9990f15440e8549f2247ebeb1c7df3a94a84cd3671d14e692720501->leave($__internal_85e42403c9990f15440e8549f2247ebeb1c7df3a94a84cd3671d14e692720501_prof);

        
        $__internal_8153ccf016d40ed301dc0971995ee1e44ad498b5d798f7b2c38edabd22912e31->leave($__internal_8153ccf016d40ed301dc0971995ee1e44ad498b5d798f7b2c38edabd22912e31_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72b0cb283ec451b831684cd4d7facbcdf5aff706ba91887cba0c7a7cedf86a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b0cb283ec451b831684cd4d7facbcdf5aff706ba91887cba0c7a7cedf86a88->enter($__internal_72b0cb283ec451b831684cd4d7facbcdf5aff706ba91887cba0c7a7cedf86a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81ec5e44b8a750204c53fac4c2b3490cb9726d972891d6b7a6c75083571975bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ec5e44b8a750204c53fac4c2b3490cb9726d972891d6b7a6c75083571975bd->enter($__internal_81ec5e44b8a750204c53fac4c2b3490cb9726d972891d6b7a6c75083571975bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_81ec5e44b8a750204c53fac4c2b3490cb9726d972891d6b7a6c75083571975bd->leave($__internal_81ec5e44b8a750204c53fac4c2b3490cb9726d972891d6b7a6c75083571975bd_prof);

        
        $__internal_72b0cb283ec451b831684cd4d7facbcdf5aff706ba91887cba0c7a7cedf86a88->leave($__internal_72b0cb283ec451b831684cd4d7facbcdf5aff706ba91887cba0c7a7cedf86a88_prof);

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
