<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_23d0fee5b71243a6136e3f96345ef313e55ebb7840fbc711f22181a7bfc47746 extends Twig_Template
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
        $__internal_93d76473f7d43c9549f92f6701470477c9e0c07c3fd0fad3774c9c976e989a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d76473f7d43c9549f92f6701470477c9e0c07c3fd0fad3774c9c976e989a16->enter($__internal_93d76473f7d43c9549f92f6701470477c9e0c07c3fd0fad3774c9c976e989a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_291860574f46395f57c36b9a3ae9362c95da5465947e3f224c10362d3f811cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291860574f46395f57c36b9a3ae9362c95da5465947e3f224c10362d3f811cf3->enter($__internal_291860574f46395f57c36b9a3ae9362c95da5465947e3f224c10362d3f811cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_93d76473f7d43c9549f92f6701470477c9e0c07c3fd0fad3774c9c976e989a16->leave($__internal_93d76473f7d43c9549f92f6701470477c9e0c07c3fd0fad3774c9c976e989a16_prof);

        
        $__internal_291860574f46395f57c36b9a3ae9362c95da5465947e3f224c10362d3f811cf3->leave($__internal_291860574f46395f57c36b9a3ae9362c95da5465947e3f224c10362d3f811cf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
