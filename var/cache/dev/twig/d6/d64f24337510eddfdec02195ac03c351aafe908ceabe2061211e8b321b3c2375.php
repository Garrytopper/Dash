<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d3eef94652388398d071ee1bc7ba190954aee55bdf26614531d3f6538f75a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2383250a4c5690069e9fdbd08b5c41a86f0282e24ec0e3c25ee66e290000b1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2383250a4c5690069e9fdbd08b5c41a86f0282e24ec0e3c25ee66e290000b1b0->enter($__internal_2383250a4c5690069e9fdbd08b5c41a86f0282e24ec0e3c25ee66e290000b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fa4fe966a326caae34fcbfe5098b781dfeb52a9fae779364d708665fd07c972a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4fe966a326caae34fcbfe5098b781dfeb52a9fae779364d708665fd07c972a->enter($__internal_fa4fe966a326caae34fcbfe5098b781dfeb52a9fae779364d708665fd07c972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2383250a4c5690069e9fdbd08b5c41a86f0282e24ec0e3c25ee66e290000b1b0->leave($__internal_2383250a4c5690069e9fdbd08b5c41a86f0282e24ec0e3c25ee66e290000b1b0_prof);

        
        $__internal_fa4fe966a326caae34fcbfe5098b781dfeb52a9fae779364d708665fd07c972a->leave($__internal_fa4fe966a326caae34fcbfe5098b781dfeb52a9fae779364d708665fd07c972a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}