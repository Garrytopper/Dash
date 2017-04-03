<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a92c607cd6c30e3f1b3c14e9d8b26551d0b78b33e66139ee68d2a59da1460061 extends Twig_Template
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
        $__internal_49febacb42319c6af673f35b4bff6fb13dfe3489832156e562558d1a45893f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49febacb42319c6af673f35b4bff6fb13dfe3489832156e562558d1a45893f5b->enter($__internal_49febacb42319c6af673f35b4bff6fb13dfe3489832156e562558d1a45893f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_22138eab3fc94269bde8b9f85aa5e6c7ad04ff1764d5ea0669c7bd151c0e74b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22138eab3fc94269bde8b9f85aa5e6c7ad04ff1764d5ea0669c7bd151c0e74b5->enter($__internal_22138eab3fc94269bde8b9f85aa5e6c7ad04ff1764d5ea0669c7bd151c0e74b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_49febacb42319c6af673f35b4bff6fb13dfe3489832156e562558d1a45893f5b->leave($__internal_49febacb42319c6af673f35b4bff6fb13dfe3489832156e562558d1a45893f5b_prof);

        
        $__internal_22138eab3fc94269bde8b9f85aa5e6c7ad04ff1764d5ea0669c7bd151c0e74b5->leave($__internal_22138eab3fc94269bde8b9f85aa5e6c7ad04ff1764d5ea0669c7bd151c0e74b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
