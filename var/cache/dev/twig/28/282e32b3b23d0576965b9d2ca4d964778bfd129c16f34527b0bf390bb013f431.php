<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2fc81070e0b67e7cc02cd0db8bba443b46803b675e9d94365ccfc3996e1d6817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc81070e0b67e7cc02cd0db8bba443b46803b675e9d94365ccfc3996e1d6817->enter($__internal_2fc81070e0b67e7cc02cd0db8bba443b46803b675e9d94365ccfc3996e1d6817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9c622c3f8095cd801711f01df7409bdb8665daae00c12cd3ecc369fe751098ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c622c3f8095cd801711f01df7409bdb8665daae00c12cd3ecc369fe751098ac->enter($__internal_9c622c3f8095cd801711f01df7409bdb8665daae00c12cd3ecc369fe751098ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc81070e0b67e7cc02cd0db8bba443b46803b675e9d94365ccfc3996e1d6817->leave($__internal_2fc81070e0b67e7cc02cd0db8bba443b46803b675e9d94365ccfc3996e1d6817_prof);

        
        $__internal_9c622c3f8095cd801711f01df7409bdb8665daae00c12cd3ecc369fe751098ac->leave($__internal_9c622c3f8095cd801711f01df7409bdb8665daae00c12cd3ecc369fe751098ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84f74d3e292f5fce824f3195dc4efcb4db3ff26bc77aef05ae5f4a8363e038b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f74d3e292f5fce824f3195dc4efcb4db3ff26bc77aef05ae5f4a8363e038b7->enter($__internal_84f74d3e292f5fce824f3195dc4efcb4db3ff26bc77aef05ae5f4a8363e038b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8214c031d64e177110c4a88a550d6d5b62c0bf6d9600376468a6bd630ae7730f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8214c031d64e177110c4a88a550d6d5b62c0bf6d9600376468a6bd630ae7730f->enter($__internal_8214c031d64e177110c4a88a550d6d5b62c0bf6d9600376468a6bd630ae7730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8214c031d64e177110c4a88a550d6d5b62c0bf6d9600376468a6bd630ae7730f->leave($__internal_8214c031d64e177110c4a88a550d6d5b62c0bf6d9600376468a6bd630ae7730f_prof);

        
        $__internal_84f74d3e292f5fce824f3195dc4efcb4db3ff26bc77aef05ae5f4a8363e038b7->leave($__internal_84f74d3e292f5fce824f3195dc4efcb4db3ff26bc77aef05ae5f4a8363e038b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c2e40a73d12566427895aeb7df83e37a13fe0f44100802493b04ecf316f265e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2e40a73d12566427895aeb7df83e37a13fe0f44100802493b04ecf316f265e->enter($__internal_6c2e40a73d12566427895aeb7df83e37a13fe0f44100802493b04ecf316f265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_166b9da26ccc71920ae275cca684327371cdbe6c80c4de0255777c8179415af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166b9da26ccc71920ae275cca684327371cdbe6c80c4de0255777c8179415af5->enter($__internal_166b9da26ccc71920ae275cca684327371cdbe6c80c4de0255777c8179415af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_166b9da26ccc71920ae275cca684327371cdbe6c80c4de0255777c8179415af5->leave($__internal_166b9da26ccc71920ae275cca684327371cdbe6c80c4de0255777c8179415af5_prof);

        
        $__internal_6c2e40a73d12566427895aeb7df83e37a13fe0f44100802493b04ecf316f265e->leave($__internal_6c2e40a73d12566427895aeb7df83e37a13fe0f44100802493b04ecf316f265e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6088d23f54b5ac47cc847b4242d816fb204c1b90b9cacd486b8412dd0399cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6088d23f54b5ac47cc847b4242d816fb204c1b90b9cacd486b8412dd0399cbe->enter($__internal_d6088d23f54b5ac47cc847b4242d816fb204c1b90b9cacd486b8412dd0399cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98ed2599cb585ad3e71a82e5e867a0330d5b6a50a12dd7dcff027c070f1da302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ed2599cb585ad3e71a82e5e867a0330d5b6a50a12dd7dcff027c070f1da302->enter($__internal_98ed2599cb585ad3e71a82e5e867a0330d5b6a50a12dd7dcff027c070f1da302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_98ed2599cb585ad3e71a82e5e867a0330d5b6a50a12dd7dcff027c070f1da302->leave($__internal_98ed2599cb585ad3e71a82e5e867a0330d5b6a50a12dd7dcff027c070f1da302_prof);

        
        $__internal_d6088d23f54b5ac47cc847b4242d816fb204c1b90b9cacd486b8412dd0399cbe->leave($__internal_d6088d23f54b5ac47cc847b4242d816fb204c1b90b9cacd486b8412dd0399cbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
