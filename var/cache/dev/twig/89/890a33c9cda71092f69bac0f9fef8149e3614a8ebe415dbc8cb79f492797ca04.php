<?php

/* DashDventeBundle:Default:index.html.twig */
class __TwigTemplate_230b2eee0496285364ac21c61c147172a01591b8af151d10e3c5b675992afb06 extends Twig_Template
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
        $__internal_d191b74394ab91fbcc120ec04ac44bb91f332def53d0e61934d4ec709d5519f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d191b74394ab91fbcc120ec04ac44bb91f332def53d0e61934d4ec709d5519f6->enter($__internal_d191b74394ab91fbcc120ec04ac44bb91f332def53d0e61934d4ec709d5519f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Default:index.html.twig"));

        $__internal_f321199cd667457efa94d8ef533c83491c392b326fd847634a31a948d2811922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f321199cd667457efa94d8ef533c83491c392b326fd847634a31a948d2811922->enter($__internal_f321199cd667457efa94d8ef533c83491c392b326fd847634a31a948d2811922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d191b74394ab91fbcc120ec04ac44bb91f332def53d0e61934d4ec709d5519f6->leave($__internal_d191b74394ab91fbcc120ec04ac44bb91f332def53d0e61934d4ec709d5519f6_prof);

        
        $__internal_f321199cd667457efa94d8ef533c83491c392b326fd847634a31a948d2811922->leave($__internal_f321199cd667457efa94d8ef533c83491c392b326fd847634a31a948d2811922_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "DashDventeBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Default/index.html.twig");
    }
}
