<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_7b27ff68abda4c9a55bb84dcd298cbce050b03b486eb0de94734aa36c10e2d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b27ff68abda4c9a55bb84dcd298cbce050b03b486eb0de94734aa36c10e2d13->enter($__internal_7b27ff68abda4c9a55bb84dcd298cbce050b03b486eb0de94734aa36c10e2d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5a0319651ad59e34186b9482fcbc41f94ad1e3f8ffe446497754e53d849aba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0319651ad59e34186b9482fcbc41f94ad1e3f8ffe446497754e53d849aba12->enter($__internal_5a0319651ad59e34186b9482fcbc41f94ad1e3f8ffe446497754e53d849aba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b27ff68abda4c9a55bb84dcd298cbce050b03b486eb0de94734aa36c10e2d13->leave($__internal_7b27ff68abda4c9a55bb84dcd298cbce050b03b486eb0de94734aa36c10e2d13_prof);

        
        $__internal_5a0319651ad59e34186b9482fcbc41f94ad1e3f8ffe446497754e53d849aba12->leave($__internal_5a0319651ad59e34186b9482fcbc41f94ad1e3f8ffe446497754e53d849aba12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ed65ca0603cabad68865773ddc580194466991c1d097eaa46b3e548c95c294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed65ca0603cabad68865773ddc580194466991c1d097eaa46b3e548c95c294b->enter($__internal_2ed65ca0603cabad68865773ddc580194466991c1d097eaa46b3e548c95c294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9a73363a3a2c627cc4d62642ce7372c981cddcd33ce3409d6455c60a20b3193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a73363a3a2c627cc4d62642ce7372c981cddcd33ce3409d6455c60a20b3193->enter($__internal_d9a73363a3a2c627cc4d62642ce7372c981cddcd33ce3409d6455c60a20b3193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d9a73363a3a2c627cc4d62642ce7372c981cddcd33ce3409d6455c60a20b3193->leave($__internal_d9a73363a3a2c627cc4d62642ce7372c981cddcd33ce3409d6455c60a20b3193_prof);

        
        $__internal_2ed65ca0603cabad68865773ddc580194466991c1d097eaa46b3e548c95c294b->leave($__internal_2ed65ca0603cabad68865773ddc580194466991c1d097eaa46b3e548c95c294b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_071f4fff9911d6b8f1ba0358162a5045e54033796ee9d65a6262d5ae6299fed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071f4fff9911d6b8f1ba0358162a5045e54033796ee9d65a6262d5ae6299fed5->enter($__internal_071f4fff9911d6b8f1ba0358162a5045e54033796ee9d65a6262d5ae6299fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c2fbed43760dc76f2a70219daaa773dca4de14d824d4c7b80d72a16acb8dfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2fbed43760dc76f2a70219daaa773dca4de14d824d4c7b80d72a16acb8dfe4->enter($__internal_4c2fbed43760dc76f2a70219daaa773dca4de14d824d4c7b80d72a16acb8dfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4c2fbed43760dc76f2a70219daaa773dca4de14d824d4c7b80d72a16acb8dfe4->leave($__internal_4c2fbed43760dc76f2a70219daaa773dca4de14d824d4c7b80d72a16acb8dfe4_prof);

        
        $__internal_071f4fff9911d6b8f1ba0358162a5045e54033796ee9d65a6262d5ae6299fed5->leave($__internal_071f4fff9911d6b8f1ba0358162a5045e54033796ee9d65a6262d5ae6299fed5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a94eafa0893e9446b01d5c1647189ec27dd6918b28640b85b6a1295fdb41e94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94eafa0893e9446b01d5c1647189ec27dd6918b28640b85b6a1295fdb41e94e->enter($__internal_a94eafa0893e9446b01d5c1647189ec27dd6918b28640b85b6a1295fdb41e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_211d90336d2ad7bc080c91740f249f12c84391bd631812d773c995dcceec7b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211d90336d2ad7bc080c91740f249f12c84391bd631812d773c995dcceec7b67->enter($__internal_211d90336d2ad7bc080c91740f249f12c84391bd631812d773c995dcceec7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_211d90336d2ad7bc080c91740f249f12c84391bd631812d773c995dcceec7b67->leave($__internal_211d90336d2ad7bc080c91740f249f12c84391bd631812d773c995dcceec7b67_prof);

        
        $__internal_a94eafa0893e9446b01d5c1647189ec27dd6918b28640b85b6a1295fdb41e94e->leave($__internal_a94eafa0893e9446b01d5c1647189ec27dd6918b28640b85b6a1295fdb41e94e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
