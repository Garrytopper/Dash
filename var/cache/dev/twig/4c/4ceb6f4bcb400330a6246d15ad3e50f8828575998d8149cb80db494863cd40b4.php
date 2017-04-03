<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_cb03124eea32fe3b9aecfa1de9356360cd048d5d349ae8af96d434a1816da495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb03124eea32fe3b9aecfa1de9356360cd048d5d349ae8af96d434a1816da495->enter($__internal_cb03124eea32fe3b9aecfa1de9356360cd048d5d349ae8af96d434a1816da495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_26a1c2e2b16893374aebf57e6827de7f115d4f2be34c10570930e65268ca1e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a1c2e2b16893374aebf57e6827de7f115d4f2be34c10570930e65268ca1e0f->enter($__internal_26a1c2e2b16893374aebf57e6827de7f115d4f2be34c10570930e65268ca1e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cb03124eea32fe3b9aecfa1de9356360cd048d5d349ae8af96d434a1816da495->leave($__internal_cb03124eea32fe3b9aecfa1de9356360cd048d5d349ae8af96d434a1816da495_prof);

        
        $__internal_26a1c2e2b16893374aebf57e6827de7f115d4f2be34c10570930e65268ca1e0f->leave($__internal_26a1c2e2b16893374aebf57e6827de7f115d4f2be34c10570930e65268ca1e0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
