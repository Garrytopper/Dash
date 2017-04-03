<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872c018cda69a0449f0375e7a800190c430736414a249152bbbfc1c4944ec5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872c018cda69a0449f0375e7a800190c430736414a249152bbbfc1c4944ec5cc->enter($__internal_872c018cda69a0449f0375e7a800190c430736414a249152bbbfc1c4944ec5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f4645d844ad17a35aca668ffa82282f31144805b0d56d0dd93328bb47815a13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4645d844ad17a35aca668ffa82282f31144805b0d56d0dd93328bb47815a13a->enter($__internal_f4645d844ad17a35aca668ffa82282f31144805b0d56d0dd93328bb47815a13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872c018cda69a0449f0375e7a800190c430736414a249152bbbfc1c4944ec5cc->leave($__internal_872c018cda69a0449f0375e7a800190c430736414a249152bbbfc1c4944ec5cc_prof);

        
        $__internal_f4645d844ad17a35aca668ffa82282f31144805b0d56d0dd93328bb47815a13a->leave($__internal_f4645d844ad17a35aca668ffa82282f31144805b0d56d0dd93328bb47815a13a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eacd68e775de10f11d5e59ceed1c81452e0f907e43f1ccd116411729245d42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eacd68e775de10f11d5e59ceed1c81452e0f907e43f1ccd116411729245d42a->enter($__internal_4eacd68e775de10f11d5e59ceed1c81452e0f907e43f1ccd116411729245d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70ae91a4ff23480d72fa92e413f214382858f41a6915a72d2be9ad7982313330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ae91a4ff23480d72fa92e413f214382858f41a6915a72d2be9ad7982313330->enter($__internal_70ae91a4ff23480d72fa92e413f214382858f41a6915a72d2be9ad7982313330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_70ae91a4ff23480d72fa92e413f214382858f41a6915a72d2be9ad7982313330->leave($__internal_70ae91a4ff23480d72fa92e413f214382858f41a6915a72d2be9ad7982313330_prof);

        
        $__internal_4eacd68e775de10f11d5e59ceed1c81452e0f907e43f1ccd116411729245d42a->leave($__internal_4eacd68e775de10f11d5e59ceed1c81452e0f907e43f1ccd116411729245d42a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7db61a597bb9668f0367b8a20e9b8ef45338153a64be64f793ad440f1705960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7db61a597bb9668f0367b8a20e9b8ef45338153a64be64f793ad440f1705960->enter($__internal_e7db61a597bb9668f0367b8a20e9b8ef45338153a64be64f793ad440f1705960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde31788ace6a4db01b5bf088171c807ea5e85ef4b92ad791e406412ebfa39ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde31788ace6a4db01b5bf088171c807ea5e85ef4b92ad791e406412ebfa39ef->enter($__internal_cde31788ace6a4db01b5bf088171c807ea5e85ef4b92ad791e406412ebfa39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cde31788ace6a4db01b5bf088171c807ea5e85ef4b92ad791e406412ebfa39ef->leave($__internal_cde31788ace6a4db01b5bf088171c807ea5e85ef4b92ad791e406412ebfa39ef_prof);

        
        $__internal_e7db61a597bb9668f0367b8a20e9b8ef45338153a64be64f793ad440f1705960->leave($__internal_e7db61a597bb9668f0367b8a20e9b8ef45338153a64be64f793ad440f1705960_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
