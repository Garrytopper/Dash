<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cb1ae64f00fb8c7bfacd63409c3ac19f7d61daf0e9517210948259a983d6146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb1ae64f00fb8c7bfacd63409c3ac19f7d61daf0e9517210948259a983d6146->enter($__internal_3cb1ae64f00fb8c7bfacd63409c3ac19f7d61daf0e9517210948259a983d6146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0dae1783e8552075e5401f3b0184634711d774161b1b8131e0698403c3df5281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dae1783e8552075e5401f3b0184634711d774161b1b8131e0698403c3df5281->enter($__internal_0dae1783e8552075e5401f3b0184634711d774161b1b8131e0698403c3df5281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb1ae64f00fb8c7bfacd63409c3ac19f7d61daf0e9517210948259a983d6146->leave($__internal_3cb1ae64f00fb8c7bfacd63409c3ac19f7d61daf0e9517210948259a983d6146_prof);

        
        $__internal_0dae1783e8552075e5401f3b0184634711d774161b1b8131e0698403c3df5281->leave($__internal_0dae1783e8552075e5401f3b0184634711d774161b1b8131e0698403c3df5281_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2de6a78ccb2c5cf8c264f0c3f7d98801f9d56c3004f800903ab8be3c615c51f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de6a78ccb2c5cf8c264f0c3f7d98801f9d56c3004f800903ab8be3c615c51f5->enter($__internal_2de6a78ccb2c5cf8c264f0c3f7d98801f9d56c3004f800903ab8be3c615c51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_41f4d932abdc0a1641a8447622b44c00ba3f1c3b212240bccbe477217546b3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f4d932abdc0a1641a8447622b44c00ba3f1c3b212240bccbe477217546b3a7->enter($__internal_41f4d932abdc0a1641a8447622b44c00ba3f1c3b212240bccbe477217546b3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_41f4d932abdc0a1641a8447622b44c00ba3f1c3b212240bccbe477217546b3a7->leave($__internal_41f4d932abdc0a1641a8447622b44c00ba3f1c3b212240bccbe477217546b3a7_prof);

        
        $__internal_2de6a78ccb2c5cf8c264f0c3f7d98801f9d56c3004f800903ab8be3c615c51f5->leave($__internal_2de6a78ccb2c5cf8c264f0c3f7d98801f9d56c3004f800903ab8be3c615c51f5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec6abc477adb62e9ad7df67d5209811c1295d60971952e04d84669cb55707507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6abc477adb62e9ad7df67d5209811c1295d60971952e04d84669cb55707507->enter($__internal_ec6abc477adb62e9ad7df67d5209811c1295d60971952e04d84669cb55707507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c0f53e4906c8d60fe552a9ef084ca89d95973e42b0d9ba523f11cbc474dfe46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0f53e4906c8d60fe552a9ef084ca89d95973e42b0d9ba523f11cbc474dfe46->enter($__internal_9c0f53e4906c8d60fe552a9ef084ca89d95973e42b0d9ba523f11cbc474dfe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9c0f53e4906c8d60fe552a9ef084ca89d95973e42b0d9ba523f11cbc474dfe46->leave($__internal_9c0f53e4906c8d60fe552a9ef084ca89d95973e42b0d9ba523f11cbc474dfe46_prof);

        
        $__internal_ec6abc477adb62e9ad7df67d5209811c1295d60971952e04d84669cb55707507->leave($__internal_ec6abc477adb62e9ad7df67d5209811c1295d60971952e04d84669cb55707507_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
