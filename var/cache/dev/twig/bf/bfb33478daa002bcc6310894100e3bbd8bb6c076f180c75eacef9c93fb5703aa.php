<?php

/* DashTachesBundle:formulaire:new.html.twig */
class __TwigTemplate_f4ac40604964a35c1f23c8f5a7c520a3fff4866bef1f99443b51b97c2f736cde extends Twig_Template
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
        $__internal_831df8f6b647962d12c76ccea1d67113c172ab9bd281c0712c146f05a7ed9abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831df8f6b647962d12c76ccea1d67113c172ab9bd281c0712c146f05a7ed9abe->enter($__internal_831df8f6b647962d12c76ccea1d67113c172ab9bd281c0712c146f05a7ed9abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:new.html.twig"));

        $__internal_465228c15ef4d10932f552d3a11e8c3a43269d580e756e97740391f8ffbec08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465228c15ef4d10932f552d3a11e8c3a43269d580e756e97740391f8ffbec08c->enter($__internal_465228c15ef4d10932f552d3a11e8c3a43269d580e756e97740391f8ffbec08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831df8f6b647962d12c76ccea1d67113c172ab9bd281c0712c146f05a7ed9abe->leave($__internal_831df8f6b647962d12c76ccea1d67113c172ab9bd281c0712c146f05a7ed9abe_prof);

        
        $__internal_465228c15ef4d10932f552d3a11e8c3a43269d580e756e97740391f8ffbec08c->leave($__internal_465228c15ef4d10932f552d3a11e8c3a43269d580e756e97740391f8ffbec08c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02a7a3bdd43d3d07069a6cd18c8b503a09031f7bd7431758edd88899e4989b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a7a3bdd43d3d07069a6cd18c8b503a09031f7bd7431758edd88899e4989b11->enter($__internal_02a7a3bdd43d3d07069a6cd18c8b503a09031f7bd7431758edd88899e4989b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4c7c3fab8493628d27cbe54de41cb23de5bcd32de8e1e2c589aae9686774780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c7c3fab8493628d27cbe54de41cb23de5bcd32de8e1e2c589aae9686774780->enter($__internal_e4c7c3fab8493628d27cbe54de41cb23de5bcd32de8e1e2c589aae9686774780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_e4c7c3fab8493628d27cbe54de41cb23de5bcd32de8e1e2c589aae9686774780->leave($__internal_e4c7c3fab8493628d27cbe54de41cb23de5bcd32de8e1e2c589aae9686774780_prof);

        
        $__internal_02a7a3bdd43d3d07069a6cd18c8b503a09031f7bd7431758edd88899e4989b11->leave($__internal_02a7a3bdd43d3d07069a6cd18c8b503a09031f7bd7431758edd88899e4989b11_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48858c38e7032efe20ed6e9c4b5c17534215aee1a7f1452cec8297803a1832e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48858c38e7032efe20ed6e9c4b5c17534215aee1a7f1452cec8297803a1832e4->enter($__internal_48858c38e7032efe20ed6e9c4b5c17534215aee1a7f1452cec8297803a1832e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f39dfcf2d22d1dd23f4a50c0e5b192c6a33199cc096303e936f5d4af96e6e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f39dfcf2d22d1dd23f4a50c0e5b192c6a33199cc096303e936f5d4af96e6e41->enter($__internal_1f39dfcf2d22d1dd23f4a50c0e5b192c6a33199cc096303e936f5d4af96e6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1f39dfcf2d22d1dd23f4a50c0e5b192c6a33199cc096303e936f5d4af96e6e41->leave($__internal_1f39dfcf2d22d1dd23f4a50c0e5b192c6a33199cc096303e936f5d4af96e6e41_prof);

        
        $__internal_48858c38e7032efe20ed6e9c4b5c17534215aee1a7f1452cec8297803a1832e4->leave($__internal_48858c38e7032efe20ed6e9c4b5c17534215aee1a7f1452cec8297803a1832e4_prof);

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
