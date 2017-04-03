<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_735b7e594b580016a363ff8b14e55fbcfb7992945a7f43f614ff223cd65f488d extends Twig_Template
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
        $__internal_76b6eaba4fa19f5ce63d698fcbf18ab8ba669fa25ff1712cc44f2544d20fef4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b6eaba4fa19f5ce63d698fcbf18ab8ba669fa25ff1712cc44f2544d20fef4d->enter($__internal_76b6eaba4fa19f5ce63d698fcbf18ab8ba669fa25ff1712cc44f2544d20fef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_30e6d3c58c6b63b8f6dd9c520f15d5195f318c343cf31ff8dd61a6e77c78b3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e6d3c58c6b63b8f6dd9c520f15d5195f318c343cf31ff8dd61a6e77c78b3e7->enter($__internal_30e6d3c58c6b63b8f6dd9c520f15d5195f318c343cf31ff8dd61a6e77c78b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_76b6eaba4fa19f5ce63d698fcbf18ab8ba669fa25ff1712cc44f2544d20fef4d->leave($__internal_76b6eaba4fa19f5ce63d698fcbf18ab8ba669fa25ff1712cc44f2544d20fef4d_prof);

        
        $__internal_30e6d3c58c6b63b8f6dd9c520f15d5195f318c343cf31ff8dd61a6e77c78b3e7->leave($__internal_30e6d3c58c6b63b8f6dd9c520f15d5195f318c343cf31ff8dd61a6e77c78b3e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
