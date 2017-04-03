<?php

/* DashTachesBundle::test.html.twig */
class __TwigTemplate_733fb8961632aaf09aabd658bc48a94c0fda2b107e77f2753f027f38be32544e extends Twig_Template
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
        $__internal_cfb196a927b578a5acc9a921f7157758730fb2c2e427328bf3a77feccd372e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb196a927b578a5acc9a921f7157758730fb2c2e427328bf3a77feccd372e17->enter($__internal_cfb196a927b578a5acc9a921f7157758730fb2c2e427328bf3a77feccd372e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle::test.html.twig"));

        $__internal_3ef1e1e4025279435d4db7e8ed6b862d2ba44f10ed08a25b78d3a1d2b63c5250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef1e1e4025279435d4db7e8ed6b862d2ba44f10ed08a25b78d3a1d2b63c5250->enter($__internal_3ef1e1e4025279435d4db7e8ed6b862d2ba44f10ed08a25b78d3a1d2b63c5250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashTachesBundle::test.html.twig"));

        // line 1
        echo "
test
le nom du client est : 
";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nom", array()), "html", null, true);
        
        $__internal_cfb196a927b578a5acc9a921f7157758730fb2c2e427328bf3a77feccd372e17->leave($__internal_cfb196a927b578a5acc9a921f7157758730fb2c2e427328bf3a77feccd372e17_prof);

        
        $__internal_3ef1e1e4025279435d4db7e8ed6b862d2ba44f10ed08a25b78d3a1d2b63c5250->leave($__internal_3ef1e1e4025279435d4db7e8ed6b862d2ba44f10ed08a25b78d3a1d2b63c5250_prof);

    }

    public function getTemplateName()
    {
        return "DashTachesBundle::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
test
le nom du client est : 
{{ client.nom }}", "DashTachesBundle::test.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/TachesBundle/Resources/views/test.html.twig");
    }
}
