<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbb74251b91b9a7f4b7edd7e4f8404718e0ee29c38be4596cc4eb7dcb9db3184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb74251b91b9a7f4b7edd7e4f8404718e0ee29c38be4596cc4eb7dcb9db3184->enter($__internal_fbb74251b91b9a7f4b7edd7e4f8404718e0ee29c38be4596cc4eb7dcb9db3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_cab366fabcfb12ed5a66ed5ca90619a26f8a8bd387743a2881c6605cf1dd8331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab366fabcfb12ed5a66ed5ca90619a26f8a8bd387743a2881c6605cf1dd8331->enter($__internal_cab366fabcfb12ed5a66ed5ca90619a26f8a8bd387743a2881c6605cf1dd8331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb74251b91b9a7f4b7edd7e4f8404718e0ee29c38be4596cc4eb7dcb9db3184->leave($__internal_fbb74251b91b9a7f4b7edd7e4f8404718e0ee29c38be4596cc4eb7dcb9db3184_prof);

        
        $__internal_cab366fabcfb12ed5a66ed5ca90619a26f8a8bd387743a2881c6605cf1dd8331->leave($__internal_cab366fabcfb12ed5a66ed5ca90619a26f8a8bd387743a2881c6605cf1dd8331_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b690d0bc747021f68f1b727dfc7eca509efcf55c6130350bf3312206ab7d47c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b690d0bc747021f68f1b727dfc7eca509efcf55c6130350bf3312206ab7d47c1->enter($__internal_b690d0bc747021f68f1b727dfc7eca509efcf55c6130350bf3312206ab7d47c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_002455c23844190f2cf6b78aa7948a1df4103346b4bc03f51287395654ca4a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002455c23844190f2cf6b78aa7948a1df4103346b4bc03f51287395654ca4a14->enter($__internal_002455c23844190f2cf6b78aa7948a1df4103346b4bc03f51287395654ca4a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_002455c23844190f2cf6b78aa7948a1df4103346b4bc03f51287395654ca4a14->leave($__internal_002455c23844190f2cf6b78aa7948a1df4103346b4bc03f51287395654ca4a14_prof);

        
        $__internal_b690d0bc747021f68f1b727dfc7eca509efcf55c6130350bf3312206ab7d47c1->leave($__internal_b690d0bc747021f68f1b727dfc7eca509efcf55c6130350bf3312206ab7d47c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f21dcd5c267d7b827108347cf22264803634b1da93175a0894a4f43a7c6425c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21dcd5c267d7b827108347cf22264803634b1da93175a0894a4f43a7c6425c5->enter($__internal_f21dcd5c267d7b827108347cf22264803634b1da93175a0894a4f43a7c6425c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ebde99275f8f41f1145845d3155f40677b9ebe082f5882830f74f3282b79673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebde99275f8f41f1145845d3155f40677b9ebe082f5882830f74f3282b79673->enter($__internal_5ebde99275f8f41f1145845d3155f40677b9ebe082f5882830f74f3282b79673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5ebde99275f8f41f1145845d3155f40677b9ebe082f5882830f74f3282b79673->leave($__internal_5ebde99275f8f41f1145845d3155f40677b9ebe082f5882830f74f3282b79673_prof);

        
        $__internal_f21dcd5c267d7b827108347cf22264803634b1da93175a0894a4f43a7c6425c5->leave($__internal_f21dcd5c267d7b827108347cf22264803634b1da93175a0894a4f43a7c6425c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e2b3935481232fdf56c0ec05352a5c4d5c3b136475c473e88524a92555951f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2b3935481232fdf56c0ec05352a5c4d5c3b136475c473e88524a92555951f9->enter($__internal_4e2b3935481232fdf56c0ec05352a5c4d5c3b136475c473e88524a92555951f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96e4e93f6420dc9702389d7e72ff6b13b38e530ea8d55efddfb328185b8081e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e4e93f6420dc9702389d7e72ff6b13b38e530ea8d55efddfb328185b8081e1->enter($__internal_96e4e93f6420dc9702389d7e72ff6b13b38e530ea8d55efddfb328185b8081e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96e4e93f6420dc9702389d7e72ff6b13b38e530ea8d55efddfb328185b8081e1->leave($__internal_96e4e93f6420dc9702389d7e72ff6b13b38e530ea8d55efddfb328185b8081e1_prof);

        
        $__internal_4e2b3935481232fdf56c0ec05352a5c4d5c3b136475c473e88524a92555951f9->leave($__internal_4e2b3935481232fdf56c0ec05352a5c4d5c3b136475c473e88524a92555951f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
