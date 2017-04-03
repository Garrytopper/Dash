<?php

/* DashDventeBundle:Formulaire:modifRcheque.html.twig */
class __TwigTemplate_0fac0be2777184b52f859a413814514edef96bccb99a4794ca65242522d4a9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Formulaire:modifRcheque.html.twig", 1);
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
        $__internal_e7782ed7ac39e2047748517044135a7963e73f9e51764304bec8b760dbb3601d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7782ed7ac39e2047748517044135a7963e73f9e51764304bec8b760dbb3601d->enter($__internal_e7782ed7ac39e2047748517044135a7963e73f9e51764304bec8b760dbb3601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:modifRcheque.html.twig"));

        $__internal_9edf1a14c3efc1b4fdbbd4910057b06d3751fdd288bb5199d87c3bec4f7b69ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edf1a14c3efc1b4fdbbd4910057b06d3751fdd288bb5199d87c3bec4f7b69ae->enter($__internal_9edf1a14c3efc1b4fdbbd4910057b06d3751fdd288bb5199d87c3bec4f7b69ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:modifRcheque.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7782ed7ac39e2047748517044135a7963e73f9e51764304bec8b760dbb3601d->leave($__internal_e7782ed7ac39e2047748517044135a7963e73f9e51764304bec8b760dbb3601d_prof);

        
        $__internal_9edf1a14c3efc1b4fdbbd4910057b06d3751fdd288bb5199d87c3bec4f7b69ae->leave($__internal_9edf1a14c3efc1b4fdbbd4910057b06d3751fdd288bb5199d87c3bec4f7b69ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98b76de966103d5e29a15616f8262df66019ec8f9fa493257e8be97a71f92b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b76de966103d5e29a15616f8262df66019ec8f9fa493257e8be97a71f92b49->enter($__internal_98b76de966103d5e29a15616f8262df66019ec8f9fa493257e8be97a71f92b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebc521fd5038728d0eac9a6713dd9b2f15b9ccdd9b1ed79c1583eaab1f51fc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc521fd5038728d0eac9a6713dd9b2f15b9ccdd9b1ed79c1583eaab1f51fc86->enter($__internal_ebc521fd5038728d0eac9a6713dd9b2f15b9ccdd9b1ed79c1583eaab1f51fc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-xs-12 white\">
        <div class=\"col-xs-12 tampon\"></div>
         ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_supp_rcheque", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
";
        
        $__internal_ebc521fd5038728d0eac9a6713dd9b2f15b9ccdd9b1ed79c1583eaab1f51fc86->leave($__internal_ebc521fd5038728d0eac9a6713dd9b2f15b9ccdd9b1ed79c1583eaab1f51fc86_prof);

        
        $__internal_98b76de966103d5e29a15616f8262df66019ec8f9fa493257e8be97a71f92b49->leave($__internal_98b76de966103d5e29a15616f8262df66019ec8f9fa493257e8be97a71f92b49_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e38b045c7b229e5c59a8ca2a8d42a129897e29402f027ef2162940a131a6ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e38b045c7b229e5c59a8ca2a8d42a129897e29402f027ef2162940a131a6ce5->enter($__internal_3e38b045c7b229e5c59a8ca2a8d42a129897e29402f027ef2162940a131a6ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d98ad5cb5fddc90a0f2af23798415532c6d357f7184967c72cd878da6704afe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98ad5cb5fddc90a0f2af23798415532c6d357f7184967c72cd878da6704afe5->enter($__internal_d98ad5cb5fddc90a0f2af23798415532c6d357f7184967c72cd878da6704afe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_listeRcheque");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Rcheque.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_d98ad5cb5fddc90a0f2af23798415532c6d357f7184967c72cd878da6704afe5->leave($__internal_d98ad5cb5fddc90a0f2af23798415532c6d357f7184967c72cd878da6704afe5_prof);

        
        $__internal_3e38b045c7b229e5c59a8ca2a8d42a129897e29402f027ef2162940a131a6ce5->leave($__internal_3e38b045c7b229e5c59a8ca2a8d42a129897e29402f027ef2162940a131a6ce5_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Formulaire:modifRcheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  94 => 17,  87 => 13,  83 => 12,  80 => 11,  71 => 10,  59 => 8,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <a href=\"{{ path('dash_dvente_supp_rcheque', {'id': id}) }}\"><div class=\"col-xs-12 titre btn btn-danger\">Supprimer</div></a>
{% endblock %} 
{% block menu %}
    <div class=\"col-xs-6 center\">
            <a href=\"{{ path('dash_core_homepage') }}\">
                <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
            </a>
         </div>
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_dvente_listeRcheque') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Rcheque.png')}} \">
        </a>
    </div>
{% endblock %} ", "DashDventeBundle:Formulaire:modifRcheque.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Formulaire/modifRcheque.html.twig");
    }
}
