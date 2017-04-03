<?php

/* DashDventeBundle:Erreur:DossierExistant.html.twig */
class __TwigTemplate_cef2dbac8888d6b882a06195ad959a498b7c856721b06f6d6d9e89848cfb68fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Erreur:DossierExistant.html.twig", 1);
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
        $__internal_d5a11a0c131acbdede718cbb3e8265c31824149a69959df6f47851f16804a4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a11a0c131acbdede718cbb3e8265c31824149a69959df6f47851f16804a4a0->enter($__internal_d5a11a0c131acbdede718cbb3e8265c31824149a69959df6f47851f16804a4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Erreur:DossierExistant.html.twig"));

        $__internal_fc85d3bbb7eaa29f2d12c59fb5e7337328a6ae8d927d65b4a3de787b08b4dafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc85d3bbb7eaa29f2d12c59fb5e7337328a6ae8d927d65b4a3de787b08b4dafb->enter($__internal_fc85d3bbb7eaa29f2d12c59fb5e7337328a6ae8d927d65b4a3de787b08b4dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Erreur:DossierExistant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a11a0c131acbdede718cbb3e8265c31824149a69959df6f47851f16804a4a0->leave($__internal_d5a11a0c131acbdede718cbb3e8265c31824149a69959df6f47851f16804a4a0_prof);

        
        $__internal_fc85d3bbb7eaa29f2d12c59fb5e7337328a6ae8d927d65b4a3de787b08b4dafb->leave($__internal_fc85d3bbb7eaa29f2d12c59fb5e7337328a6ae8d927d65b4a3de787b08b4dafb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfccdc409a9ae3b32a28aa93a7a9f65173c0d8d5c5bda8b3a2875e8bb6b6bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfccdc409a9ae3b32a28aa93a7a9f65173c0d8d5c5bda8b3a2875e8bb6b6bc8->enter($__internal_8bfccdc409a9ae3b32a28aa93a7a9f65173c0d8d5c5bda8b3a2875e8bb6b6bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8506731406d6ea16b60d59068495020926120f2f4c38d783916a55c8a0ea3f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8506731406d6ea16b60d59068495020926120f2f4c38d783916a55c8a0ea3f07->enter($__internal_8506731406d6ea16b60d59068495020926120f2f4c38d783916a55c8a0ea3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div style=\"background-color: white;\" class=\"row\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-12 center\">Impossible de supprimer <span style=\"color: red;\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</span> car il possède un dossier de vente</div>
        <div class=\"col-xs-12 tampon\"></div>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_modif", array("id" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\">
             <div class=\"col-xs-offset-3 col-xs-6 btn btn-info\">Dossier de vente</div>
        </a>
        <div class=\"col-xs-12 tampon\"></div> 
    </div>
";
        
        $__internal_8506731406d6ea16b60d59068495020926120f2f4c38d783916a55c8a0ea3f07->leave($__internal_8506731406d6ea16b60d59068495020926120f2f4c38d783916a55c8a0ea3f07_prof);

        
        $__internal_8bfccdc409a9ae3b32a28aa93a7a9f65173c0d8d5c5bda8b3a2875e8bb6b6bc8->leave($__internal_8bfccdc409a9ae3b32a28aa93a7a9f65173c0d8d5c5bda8b3a2875e8bb6b6bc8_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53f356edb8f7437460ee58d5a984331a57567d530f3d03ab9bfea489b8207c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f356edb8f7437460ee58d5a984331a57567d530f3d03ab9bfea489b8207c26->enter($__internal_53f356edb8f7437460ee58d5a984331a57567d530f3d03ab9bfea489b8207c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93b140433719f2a1e9a69ad101fd0c741a28cc7025701de6d77a75d84d0b94ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b140433719f2a1e9a69ad101fd0c741a28cc7025701de6d77a75d84d0b94ca->enter($__internal_93b140433719f2a1e9a69ad101fd0c741a28cc7025701de6d77a75d84d0b94ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "    <div class=\"col-xs-12 center\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_93b140433719f2a1e9a69ad101fd0c741a28cc7025701de6d77a75d84d0b94ca->leave($__internal_93b140433719f2a1e9a69ad101fd0c741a28cc7025701de6d77a75d84d0b94ca_prof);

        
        $__internal_53f356edb8f7437460ee58d5a984331a57567d530f3d03ab9bfea489b8207c26->leave($__internal_53f356edb8f7437460ee58d5a984331a57567d530f3d03ab9bfea489b8207c26_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Erreur:DossierExistant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  87 => 16,  84 => 15,  75 => 14,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    <div style=\"background-color: white;\" class=\"row\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-12 center\">Impossible de supprimer <span style=\"color: red;\">{{ client.nom }}</span> car il possède un dossier de vente</div>
        <div class=\"col-xs-12 tampon\"></div>
        <a href=\"{{ path('dash_dvente_modif', {'id': client.id}) }}\">
             <div class=\"col-xs-offset-3 col-xs-6 btn btn-info\">Dossier de vente</div>
        </a>
        <div class=\"col-xs-12 tampon\"></div> 
    </div>
{% endblock %}

{% block menu %}
    <div class=\"col-xs-12 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
{% endblock %}", "DashDventeBundle:Erreur:DossierExistant.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Erreur/DossierExistant.html.twig");
    }
}
