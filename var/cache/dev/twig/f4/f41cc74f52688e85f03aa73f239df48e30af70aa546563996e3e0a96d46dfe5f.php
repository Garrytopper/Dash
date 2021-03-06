<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_81e7fff82a308c51d16f6227d0e1d51902204274c52a0808c884639a1d12d23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e7fff82a308c51d16f6227d0e1d51902204274c52a0808c884639a1d12d23f->enter($__internal_81e7fff82a308c51d16f6227d0e1d51902204274c52a0808c884639a1d12d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3d55b65901a45b2653a0f799d044afc5f8a5309d44258cf2798524464ce7b02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d55b65901a45b2653a0f799d044afc5f8a5309d44258cf2798524464ce7b02e->enter($__internal_3d55b65901a45b2653a0f799d044afc5f8a5309d44258cf2798524464ce7b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e7fff82a308c51d16f6227d0e1d51902204274c52a0808c884639a1d12d23f->leave($__internal_81e7fff82a308c51d16f6227d0e1d51902204274c52a0808c884639a1d12d23f_prof);

        
        $__internal_3d55b65901a45b2653a0f799d044afc5f8a5309d44258cf2798524464ce7b02e->leave($__internal_3d55b65901a45b2653a0f799d044afc5f8a5309d44258cf2798524464ce7b02e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8e7e3a197590266b01eefd8c2e22d54e1a20b0ca6822496ecf0bde156a81d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e7e3a197590266b01eefd8c2e22d54e1a20b0ca6822496ecf0bde156a81d78->enter($__internal_a8e7e3a197590266b01eefd8c2e22d54e1a20b0ca6822496ecf0bde156a81d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3434b74715c6a79a5fa922614e3382b95163efcef81052a22a3f82d06a377bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3434b74715c6a79a5fa922614e3382b95163efcef81052a22a3f82d06a377bd3->enter($__internal_3434b74715c6a79a5fa922614e3382b95163efcef81052a22a3f82d06a377bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3434b74715c6a79a5fa922614e3382b95163efcef81052a22a3f82d06a377bd3->leave($__internal_3434b74715c6a79a5fa922614e3382b95163efcef81052a22a3f82d06a377bd3_prof);

        
        $__internal_a8e7e3a197590266b01eefd8c2e22d54e1a20b0ca6822496ecf0bde156a81d78->leave($__internal_a8e7e3a197590266b01eefd8c2e22d54e1a20b0ca6822496ecf0bde156a81d78_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_536fd6ca160a87a4f6ba8025e7c756b62c59f48ba3152e1364c3bb6ae9ebef31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536fd6ca160a87a4f6ba8025e7c756b62c59f48ba3152e1364c3bb6ae9ebef31->enter($__internal_536fd6ca160a87a4f6ba8025e7c756b62c59f48ba3152e1364c3bb6ae9ebef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d43fdccc970294d9ea5b768a8e8619a806e8c2d04ea420d45b6dcea5189884e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43fdccc970294d9ea5b768a8e8619a806e8c2d04ea420d45b6dcea5189884e5->enter($__internal_d43fdccc970294d9ea5b768a8e8619a806e8c2d04ea420d45b6dcea5189884e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d43fdccc970294d9ea5b768a8e8619a806e8c2d04ea420d45b6dcea5189884e5->leave($__internal_d43fdccc970294d9ea5b768a8e8619a806e8c2d04ea420d45b6dcea5189884e5_prof);

        
        $__internal_536fd6ca160a87a4f6ba8025e7c756b62c59f48ba3152e1364c3bb6ae9ebef31->leave($__internal_536fd6ca160a87a4f6ba8025e7c756b62c59f48ba3152e1364c3bb6ae9ebef31_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe52ab6219c0715c44cc08a36914151c449c5421987fcc4404c057a8810e412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe52ab6219c0715c44cc08a36914151c449c5421987fcc4404c057a8810e412d->enter($__internal_fe52ab6219c0715c44cc08a36914151c449c5421987fcc4404c057a8810e412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cc3635ea23926d16fa5b683e988c9ba8b5dedea392170d7b2cee3e999e5b820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc3635ea23926d16fa5b683e988c9ba8b5dedea392170d7b2cee3e999e5b820->enter($__internal_1cc3635ea23926d16fa5b683e988c9ba8b5dedea392170d7b2cee3e999e5b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1cc3635ea23926d16fa5b683e988c9ba8b5dedea392170d7b2cee3e999e5b820->leave($__internal_1cc3635ea23926d16fa5b683e988c9ba8b5dedea392170d7b2cee3e999e5b820_prof);

        
        $__internal_fe52ab6219c0715c44cc08a36914151c449c5421987fcc4404c057a8810e412d->leave($__internal_fe52ab6219c0715c44cc08a36914151c449c5421987fcc4404c057a8810e412d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
