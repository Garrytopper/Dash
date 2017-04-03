<?php

/* DashTachesBundle:formulaire:modif.html.twig */
class __TwigTemplate_ed639a4cc8e8bd57a1454184ed0a3ad82dc29b26799d2ef6b9f6560e6f1fa381 extends Twig_Template
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
        $__internal_ab555ba0c6b3a4ef6a5c90719c6f706703a3b83e8e146a7d219465573af8fca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab555ba0c6b3a4ef6a5c90719c6f706703a3b83e8e146a7d219465573af8fca7->enter($__internal_ab555ba0c6b3a4ef6a5c90719c6f706703a3b83e8e146a7d219465573af8fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:modif.html.twig"));

        $__internal_437de79556ec29064a24c2fb8c3144aa3207e55a2933836ac7f5e2850e57fffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437de79556ec29064a24c2fb8c3144aa3207e55a2933836ac7f5e2850e57fffe->enter($__internal_437de79556ec29064a24c2fb8c3144aa3207e55a2933836ac7f5e2850e57fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle:formulaire:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab555ba0c6b3a4ef6a5c90719c6f706703a3b83e8e146a7d219465573af8fca7->leave($__internal_ab555ba0c6b3a4ef6a5c90719c6f706703a3b83e8e146a7d219465573af8fca7_prof);

        
        $__internal_437de79556ec29064a24c2fb8c3144aa3207e55a2933836ac7f5e2850e57fffe->leave($__internal_437de79556ec29064a24c2fb8c3144aa3207e55a2933836ac7f5e2850e57fffe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_748a40aa8f70b1ef858876ccb8553f7db13093955640e0860989005c20fe3253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748a40aa8f70b1ef858876ccb8553f7db13093955640e0860989005c20fe3253->enter($__internal_748a40aa8f70b1ef858876ccb8553f7db13093955640e0860989005c20fe3253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d36c2554e20b550618a6a6b05a1594643b1373dc6de3428983cf98985d14fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d36c2554e20b550618a6a6b05a1594643b1373dc6de3428983cf98985d14fc1->enter($__internal_7d36c2554e20b550618a6a6b05a1594643b1373dc6de3428983cf98985d14fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 tampon\"></div>
    <div class=\"col-xs-12 white\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_taches_supp", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\">
        <div class=\"col-xs-12 btn btn-danger\">Supprimer</div>
    </a>
    <div class=\"col-xs-12 tampon\"></div>
    
    <div class=\"col-xs-12 tampon\"></div>
";
        
        $__internal_7d36c2554e20b550618a6a6b05a1594643b1373dc6de3428983cf98985d14fc1->leave($__internal_7d36c2554e20b550618a6a6b05a1594643b1373dc6de3428983cf98985d14fc1_prof);

        
        $__internal_748a40aa8f70b1ef858876ccb8553f7db13093955640e0860989005c20fe3253->leave($__internal_748a40aa8f70b1ef858876ccb8553f7db13093955640e0860989005c20fe3253_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9859f43f2d82cbf461a80aeee0b7d35221c96f311bf84842416d73b27291757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9859f43f2d82cbf461a80aeee0b7d35221c96f311bf84842416d73b27291757->enter($__internal_a9859f43f2d82cbf461a80aeee0b7d35221c96f311bf84842416d73b27291757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_07d223d67d92d0fb30228ccc880a322ad8ce7c48814c128d0d9ed7555592e79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d223d67d92d0fb30228ccc880a322ad8ce7c48814c128d0d9ed7555592e79f->enter($__internal_07d223d67d92d0fb30228ccc880a322ad8ce7c48814c128d0d9ed7555592e79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_07d223d67d92d0fb30228ccc880a322ad8ce7c48814c128d0d9ed7555592e79f->leave($__internal_07d223d67d92d0fb30228ccc880a322ad8ce7c48814c128d0d9ed7555592e79f_prof);

        
        $__internal_a9859f43f2d82cbf461a80aeee0b7d35221c96f311bf84842416d73b27291757->leave($__internal_a9859f43f2d82cbf461a80aeee0b7d35221c96f311bf84842416d73b27291757_prof);

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
