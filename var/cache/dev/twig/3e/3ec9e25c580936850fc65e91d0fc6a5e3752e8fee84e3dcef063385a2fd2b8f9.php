<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_90c1a63aba124899c905d7d2339310ea4f9245a4e490e264b8efbccfdfc55f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_81a817f255bb1f72690e3583a7f04ffad6b5372df182aa474bf5a89ab14d2711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a817f255bb1f72690e3583a7f04ffad6b5372df182aa474bf5a89ab14d2711->enter($__internal_81a817f255bb1f72690e3583a7f04ffad6b5372df182aa474bf5a89ab14d2711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_10d5bb4bc83382953cc1c573849f25f4c4a47f107e80a76c4174fe6bb43e4297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d5bb4bc83382953cc1c573849f25f4c4a47f107e80a76c4174fe6bb43e4297->enter($__internal_10d5bb4bc83382953cc1c573849f25f4c4a47f107e80a76c4174fe6bb43e4297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a817f255bb1f72690e3583a7f04ffad6b5372df182aa474bf5a89ab14d2711->leave($__internal_81a817f255bb1f72690e3583a7f04ffad6b5372df182aa474bf5a89ab14d2711_prof);

        
        $__internal_10d5bb4bc83382953cc1c573849f25f4c4a47f107e80a76c4174fe6bb43e4297->leave($__internal_10d5bb4bc83382953cc1c573849f25f4c4a47f107e80a76c4174fe6bb43e4297_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a5d44ebf11f508a675427542b2104864e6804bae3aa444db57710fa138d0848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5d44ebf11f508a675427542b2104864e6804bae3aa444db57710fa138d0848->enter($__internal_5a5d44ebf11f508a675427542b2104864e6804bae3aa444db57710fa138d0848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e9f7b25efa08fd3e694bc4f76ab5f81b46d624a7dfba9e01d3567020d250919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9f7b25efa08fd3e694bc4f76ab5f81b46d624a7dfba9e01d3567020d250919->enter($__internal_0e9f7b25efa08fd3e694bc4f76ab5f81b46d624a7dfba9e01d3567020d250919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0e9f7b25efa08fd3e694bc4f76ab5f81b46d624a7dfba9e01d3567020d250919->leave($__internal_0e9f7b25efa08fd3e694bc4f76ab5f81b46d624a7dfba9e01d3567020d250919_prof);

        
        $__internal_5a5d44ebf11f508a675427542b2104864e6804bae3aa444db57710fa138d0848->leave($__internal_5a5d44ebf11f508a675427542b2104864e6804bae3aa444db57710fa138d0848_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
