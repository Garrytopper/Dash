<?php

/* DashPortefeuilleBundle:formulaire:modif.html.twig */
class __TwigTemplate_0ddf85d64e57eaf093c51c083f5ddef3b4080cee9a62e2b16e5cdf2492f845ac extends Twig_Template
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
        $__internal_514293368675cd35f02d5371eed43d59d63ea96cf665e01c73ebb2d4f7bc1830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514293368675cd35f02d5371eed43d59d63ea96cf665e01c73ebb2d4f7bc1830->enter($__internal_514293368675cd35f02d5371eed43d59d63ea96cf665e01c73ebb2d4f7bc1830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:modif.html.twig"));

        $__internal_fca7067ef2ca8f3476ec1cd7464fe9cedf91ee4c6f33d936a01da6c6220eefc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca7067ef2ca8f3476ec1cd7464fe9cedf91ee4c6f33d936a01da6c6220eefc8->enter($__internal_fca7067ef2ca8f3476ec1cd7464fe9cedf91ee4c6f33d936a01da6c6220eefc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:formulaire:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_514293368675cd35f02d5371eed43d59d63ea96cf665e01c73ebb2d4f7bc1830->leave($__internal_514293368675cd35f02d5371eed43d59d63ea96cf665e01c73ebb2d4f7bc1830_prof);

        
        $__internal_fca7067ef2ca8f3476ec1cd7464fe9cedf91ee4c6f33d936a01da6c6220eefc8->leave($__internal_fca7067ef2ca8f3476ec1cd7464fe9cedf91ee4c6f33d936a01da6c6220eefc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa73b47cc28e0816ee205a7147b19dbc61ed0688e25ec6544ee69cf71b3fc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa73b47cc28e0816ee205a7147b19dbc61ed0688e25ec6544ee69cf71b3fc05->enter($__internal_baa73b47cc28e0816ee205a7147b19dbc61ed0688e25ec6544ee69cf71b3fc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f434d838681efa17d76fe3cc01960b0e2eb95b472bfe76e6951c8edaa2d2e3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f434d838681efa17d76fe3cc01960b0e2eb95b472bfe76e6951c8edaa2d2e3de->enter($__internal_f434d838681efa17d76fe3cc01960b0e2eb95b472bfe76e6951c8edaa2d2e3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_supp", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
    
";
        
        $__internal_f434d838681efa17d76fe3cc01960b0e2eb95b472bfe76e6951c8edaa2d2e3de->leave($__internal_f434d838681efa17d76fe3cc01960b0e2eb95b472bfe76e6951c8edaa2d2e3de_prof);

        
        $__internal_baa73b47cc28e0816ee205a7147b19dbc61ed0688e25ec6544ee69cf71b3fc05->leave($__internal_baa73b47cc28e0816ee205a7147b19dbc61ed0688e25ec6544ee69cf71b3fc05_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06b1f7e8b2d23f0670fdd8bb53128862f487bec40f9b33de813acdd99874f15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b1f7e8b2d23f0670fdd8bb53128862f487bec40f9b33de813acdd99874f15a->enter($__internal_06b1f7e8b2d23f0670fdd8bb53128862f487bec40f9b33de813acdd99874f15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_afcb4ad8d8e1db2e6d7d13d0be113f9312e9222944eb71e2a56d8d513140e312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcb4ad8d8e1db2e6d7d13d0be113f9312e9222944eb71e2a56d8d513140e312->enter($__internal_afcb4ad8d8e1db2e6d7d13d0be113f9312e9222944eb71e2a56d8d513140e312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_afcb4ad8d8e1db2e6d7d13d0be113f9312e9222944eb71e2a56d8d513140e312->leave($__internal_afcb4ad8d8e1db2e6d7d13d0be113f9312e9222944eb71e2a56d8d513140e312_prof);

        
        $__internal_06b1f7e8b2d23f0670fdd8bb53128862f487bec40f9b33de813acdd99874f15a->leave($__internal_06b1f7e8b2d23f0670fdd8bb53128862f487bec40f9b33de813acdd99874f15a_prof);

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
