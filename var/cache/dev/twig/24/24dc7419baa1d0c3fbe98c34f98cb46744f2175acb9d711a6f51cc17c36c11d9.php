<?php

/* DashDventeBundle:formulaire:newRcheque.html.twig */
class __TwigTemplate_469f6dbfbf92f5e9b14288490fc58374f3d79ec8cf0a402be853bdde2139980e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:formulaire:newRcheque.html.twig", 1);
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
        $__internal_044fb2c321b754e87f4bce56d12afc40579ac4be2421b0e6a781511b2765e1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044fb2c321b754e87f4bce56d12afc40579ac4be2421b0e6a781511b2765e1f9->enter($__internal_044fb2c321b754e87f4bce56d12afc40579ac4be2421b0e6a781511b2765e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:formulaire:newRcheque.html.twig"));

        $__internal_0cb41fce81f444b1c8f287f6039edd80a5a611494348ea7d5b989fa380595e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb41fce81f444b1c8f287f6039edd80a5a611494348ea7d5b989fa380595e5f->enter($__internal_0cb41fce81f444b1c8f287f6039edd80a5a611494348ea7d5b989fa380595e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:formulaire:newRcheque.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044fb2c321b754e87f4bce56d12afc40579ac4be2421b0e6a781511b2765e1f9->leave($__internal_044fb2c321b754e87f4bce56d12afc40579ac4be2421b0e6a781511b2765e1f9_prof);

        
        $__internal_0cb41fce81f444b1c8f287f6039edd80a5a611494348ea7d5b989fa380595e5f->leave($__internal_0cb41fce81f444b1c8f287f6039edd80a5a611494348ea7d5b989fa380595e5f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_da965f1ac7efa5182fc2f0d120e213265128694fdecce2b15e135b9df8184ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da965f1ac7efa5182fc2f0d120e213265128694fdecce2b15e135b9df8184ccb->enter($__internal_da965f1ac7efa5182fc2f0d120e213265128694fdecce2b15e135b9df8184ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc5bde363ccaae92c2429dd244f9ee138f700d564c18af12f839b5617f3d01d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5bde363ccaae92c2429dd244f9ee138f700d564c18af12f839b5617f3d01d9->enter($__internal_dc5bde363ccaae92c2429dd244f9ee138f700d564c18af12f839b5617f3d01d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-12 white\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-1Z\"> ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "</div>
        <div class=\"col-xs-12 tampon\"></div>
    </div>
";
        
        $__internal_dc5bde363ccaae92c2429dd244f9ee138f700d564c18af12f839b5617f3d01d9->leave($__internal_dc5bde363ccaae92c2429dd244f9ee138f700d564c18af12f839b5617f3d01d9_prof);

        
        $__internal_da965f1ac7efa5182fc2f0d120e213265128694fdecce2b15e135b9df8184ccb->leave($__internal_da965f1ac7efa5182fc2f0d120e213265128694fdecce2b15e135b9df8184ccb_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:formulaire:newRcheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-xs-1Z\"> {{ form(form) }}</div>
        <div class=\"col-xs-12 tampon\"></div>
    </div>
{% endblock %}", "DashDventeBundle:formulaire:newRcheque.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/formulaire/newRcheque.html.twig");
    }
}
