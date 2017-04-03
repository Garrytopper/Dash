<?php

/* DashDventeBundle:Formulaire:modif.html.twig */
class __TwigTemplate_120547dd3943c7e91c2e38f08fa3ac3e2d625a145e40ed5000dda3be0fc38d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Formulaire:modif.html.twig", 1);
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
        $__internal_3ccfd95dd07caf3d8c4d5e1c993f0ce7166088ed3b7b1220916daa47952e6dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccfd95dd07caf3d8c4d5e1c993f0ce7166088ed3b7b1220916daa47952e6dcd->enter($__internal_3ccfd95dd07caf3d8c4d5e1c993f0ce7166088ed3b7b1220916daa47952e6dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:modif.html.twig"));

        $__internal_3505fa50ae58ab91b8b2d67cd0ab7537ea03405e37abcf083e505e86867e6ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3505fa50ae58ab91b8b2d67cd0ab7537ea03405e37abcf083e505e86867e6ee8->enter($__internal_3505fa50ae58ab91b8b2d67cd0ab7537ea03405e37abcf083e505e86867e6ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ccfd95dd07caf3d8c4d5e1c993f0ce7166088ed3b7b1220916daa47952e6dcd->leave($__internal_3ccfd95dd07caf3d8c4d5e1c993f0ce7166088ed3b7b1220916daa47952e6dcd_prof);

        
        $__internal_3505fa50ae58ab91b8b2d67cd0ab7537ea03405e37abcf083e505e86867e6ee8->leave($__internal_3505fa50ae58ab91b8b2d67cd0ab7537ea03405e37abcf083e505e86867e6ee8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b374adf6227737fd4d7a613800595326bc3852208715b82f05bb3acc14dd28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b374adf6227737fd4d7a613800595326bc3852208715b82f05bb3acc14dd28d->enter($__internal_5b374adf6227737fd4d7a613800595326bc3852208715b82f05bb3acc14dd28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fd09257e0e2ff02508a23ece20314a395321bb9c8a7923082471c0f1a884db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd09257e0e2ff02508a23ece20314a395321bb9c8a7923082471c0f1a884db9->enter($__internal_1fd09257e0e2ff02508a23ece20314a395321bb9c8a7923082471c0f1a884db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-12 white\">
        <div class=\"col-xs-12 tampon\"></div>
         ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_supp", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
";
        
        $__internal_1fd09257e0e2ff02508a23ece20314a395321bb9c8a7923082471c0f1a884db9->leave($__internal_1fd09257e0e2ff02508a23ece20314a395321bb9c8a7923082471c0f1a884db9_prof);

        
        $__internal_5b374adf6227737fd4d7a613800595326bc3852208715b82f05bb3acc14dd28d->leave($__internal_5b374adf6227737fd4d7a613800595326bc3852208715b82f05bb3acc14dd28d_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3155f905c1f96da9771ac89a1057493daf76a174b4bfa2aabf937607c900563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3155f905c1f96da9771ac89a1057493daf76a174b4bfa2aabf937607c900563->enter($__internal_d3155f905c1f96da9771ac89a1057493daf76a174b4bfa2aabf937607c900563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86f471611c76f6c5b568dd320418438dde78cf0de0f2fcf05ed8663eb2de4936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f471611c76f6c5b568dd320418438dde78cf0de0f2fcf05ed8663eb2de4936->enter($__internal_86f471611c76f6c5b568dd320418438dde78cf0de0f2fcf05ed8663eb2de4936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "    <div class=\"col-xs-6 center\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
                <img class=\"logo\" src=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
            </a>
         </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_liste");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Dvente.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_86f471611c76f6c5b568dd320418438dde78cf0de0f2fcf05ed8663eb2de4936->leave($__internal_86f471611c76f6c5b568dd320418438dde78cf0de0f2fcf05ed8663eb2de4936_prof);

        
        $__internal_d3155f905c1f96da9771ac89a1057493daf76a174b4bfa2aabf937607c900563->leave($__internal_d3155f905c1f96da9771ac89a1057493daf76a174b4bfa2aabf937607c900563_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Formulaire:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  94 => 16,  87 => 12,  83 => 11,  80 => 10,  71 => 9,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    <div class=\"col-xs-12 white\">
        <div class=\"col-xs-12 tampon\"></div>
         {{ form(form) }}
    </div>
    <a href=\"{{ path('dash_dvente_supp', {'id': id}) }}\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
{% endblock %}
{% block menu %}
    <div class=\"col-xs-6 center\">
            <a href=\"{{ path('dash_core_homepage') }}\">
                <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
            </a>
         </div>
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_dvente_liste') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Dvente.png')}} \">
        </a>
    </div>
{% endblock %}", "DashDventeBundle:Formulaire:modif.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Formulaire/modif.html.twig");
    }
}
