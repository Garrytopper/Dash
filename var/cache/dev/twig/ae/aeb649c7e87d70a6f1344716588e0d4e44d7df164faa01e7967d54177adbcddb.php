<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_469bb03d78ae0ef4647fb4225132c5a3d32d7400988420ca5e95cd9d628e3bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6a2630c934cb3661d1a54bedc22329f46517e9a6e5d5dcc7b4c1fcf7509fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6a2630c934cb3661d1a54bedc22329f46517e9a6e5d5dcc7b4c1fcf7509fcd->enter($__internal_2b6a2630c934cb3661d1a54bedc22329f46517e9a6e5d5dcc7b4c1fcf7509fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_044e40a5a647a73ae76789b216ccb3eeac5960abd09174317f0b1e8f3e876d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044e40a5a647a73ae76789b216ccb3eeac5960abd09174317f0b1e8f3e876d56->enter($__internal_044e40a5a647a73ae76789b216ccb3eeac5960abd09174317f0b1e8f3e876d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6a2630c934cb3661d1a54bedc22329f46517e9a6e5d5dcc7b4c1fcf7509fcd->leave($__internal_2b6a2630c934cb3661d1a54bedc22329f46517e9a6e5d5dcc7b4c1fcf7509fcd_prof);

        
        $__internal_044e40a5a647a73ae76789b216ccb3eeac5960abd09174317f0b1e8f3e876d56->leave($__internal_044e40a5a647a73ae76789b216ccb3eeac5960abd09174317f0b1e8f3e876d56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b12a3bf4c2c28ac6264f81da1e636b6fb382eac1a9518837452b4817a682d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b12a3bf4c2c28ac6264f81da1e636b6fb382eac1a9518837452b4817a682d22->enter($__internal_5b12a3bf4c2c28ac6264f81da1e636b6fb382eac1a9518837452b4817a682d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a6eecebe817fc87068acc18ba53536e353cfde58d8245013ff19598f1e15778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6eecebe817fc87068acc18ba53536e353cfde58d8245013ff19598f1e15778->enter($__internal_6a6eecebe817fc87068acc18ba53536e353cfde58d8245013ff19598f1e15778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6a6eecebe817fc87068acc18ba53536e353cfde58d8245013ff19598f1e15778->leave($__internal_6a6eecebe817fc87068acc18ba53536e353cfde58d8245013ff19598f1e15778_prof);

        
        $__internal_5b12a3bf4c2c28ac6264f81da1e636b6fb382eac1a9518837452b4817a682d22->leave($__internal_5b12a3bf4c2c28ac6264f81da1e636b6fb382eac1a9518837452b4817a682d22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
