<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_31d8ecc6198c057fae51d75494db7e145417897f9457aec2272130599a677ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d8ecc6198c057fae51d75494db7e145417897f9457aec2272130599a677ecb->enter($__internal_31d8ecc6198c057fae51d75494db7e145417897f9457aec2272130599a677ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_178b264a7a5fb50669db36abd1a909af1f911510dd8f9cd8233e78f6de507b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178b264a7a5fb50669db36abd1a909af1f911510dd8f9cd8233e78f6de507b13->enter($__internal_178b264a7a5fb50669db36abd1a909af1f911510dd8f9cd8233e78f6de507b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_31d8ecc6198c057fae51d75494db7e145417897f9457aec2272130599a677ecb->leave($__internal_31d8ecc6198c057fae51d75494db7e145417897f9457aec2272130599a677ecb_prof);

        
        $__internal_178b264a7a5fb50669db36abd1a909af1f911510dd8f9cd8233e78f6de507b13->leave($__internal_178b264a7a5fb50669db36abd1a909af1f911510dd8f9cd8233e78f6de507b13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
