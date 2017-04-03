<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6b63f63229a17eec55dd9f9f4db5fba08fbd09392948fadd84c0eced1983ebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b63f63229a17eec55dd9f9f4db5fba08fbd09392948fadd84c0eced1983ebd9->enter($__internal_6b63f63229a17eec55dd9f9f4db5fba08fbd09392948fadd84c0eced1983ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9a448b70f9e9c85b1a5e9baea6d116aba577a13eda6f5aec12514e5cfd634c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a448b70f9e9c85b1a5e9baea6d116aba577a13eda6f5aec12514e5cfd634c0->enter($__internal_f9a448b70f9e9c85b1a5e9baea6d116aba577a13eda6f5aec12514e5cfd634c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b63f63229a17eec55dd9f9f4db5fba08fbd09392948fadd84c0eced1983ebd9->leave($__internal_6b63f63229a17eec55dd9f9f4db5fba08fbd09392948fadd84c0eced1983ebd9_prof);

        
        $__internal_f9a448b70f9e9c85b1a5e9baea6d116aba577a13eda6f5aec12514e5cfd634c0->leave($__internal_f9a448b70f9e9c85b1a5e9baea6d116aba577a13eda6f5aec12514e5cfd634c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c56510260d8ad390f5718228e12095864a9ba25a843f2c7759997789ab63913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c56510260d8ad390f5718228e12095864a9ba25a843f2c7759997789ab63913->enter($__internal_1c56510260d8ad390f5718228e12095864a9ba25a843f2c7759997789ab63913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f442b59314c4599f14f61f252bbc07f9415d7d7e68f2ddd1e8c1c6a30b2f6205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f442b59314c4599f14f61f252bbc07f9415d7d7e68f2ddd1e8c1c6a30b2f6205->enter($__internal_f442b59314c4599f14f61f252bbc07f9415d7d7e68f2ddd1e8c1c6a30b2f6205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f442b59314c4599f14f61f252bbc07f9415d7d7e68f2ddd1e8c1c6a30b2f6205->leave($__internal_f442b59314c4599f14f61f252bbc07f9415d7d7e68f2ddd1e8c1c6a30b2f6205_prof);

        
        $__internal_1c56510260d8ad390f5718228e12095864a9ba25a843f2c7759997789ab63913->leave($__internal_1c56510260d8ad390f5718228e12095864a9ba25a843f2c7759997789ab63913_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1ee353527af8f3d817e4cabfbf6848b92498f4efcb575e78c28b6c3a622b61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ee353527af8f3d817e4cabfbf6848b92498f4efcb575e78c28b6c3a622b61b->enter($__internal_f1ee353527af8f3d817e4cabfbf6848b92498f4efcb575e78c28b6c3a622b61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d10d636f0182cc4b2db3d26d704c56e8ccceae25eb0d0001419055acc6ecd85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10d636f0182cc4b2db3d26d704c56e8ccceae25eb0d0001419055acc6ecd85a->enter($__internal_d10d636f0182cc4b2db3d26d704c56e8ccceae25eb0d0001419055acc6ecd85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d10d636f0182cc4b2db3d26d704c56e8ccceae25eb0d0001419055acc6ecd85a->leave($__internal_d10d636f0182cc4b2db3d26d704c56e8ccceae25eb0d0001419055acc6ecd85a_prof);

        
        $__internal_f1ee353527af8f3d817e4cabfbf6848b92498f4efcb575e78c28b6c3a622b61b->leave($__internal_f1ee353527af8f3d817e4cabfbf6848b92498f4efcb575e78c28b6c3a622b61b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ad59753a919597e9732e407d0df7d5a9ab5e860b7322a4fcdb5cea319005b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad59753a919597e9732e407d0df7d5a9ab5e860b7322a4fcdb5cea319005b62->enter($__internal_4ad59753a919597e9732e407d0df7d5a9ab5e860b7322a4fcdb5cea319005b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbd25beeed5e33e3b1d67e9b77cb90dfd7877b270393b0da3913d4e7f77875bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd25beeed5e33e3b1d67e9b77cb90dfd7877b270393b0da3913d4e7f77875bd->enter($__internal_bbd25beeed5e33e3b1d67e9b77cb90dfd7877b270393b0da3913d4e7f77875bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbd25beeed5e33e3b1d67e9b77cb90dfd7877b270393b0da3913d4e7f77875bd->leave($__internal_bbd25beeed5e33e3b1d67e9b77cb90dfd7877b270393b0da3913d4e7f77875bd_prof);

        
        $__internal_4ad59753a919597e9732e407d0df7d5a9ab5e860b7322a4fcdb5cea319005b62->leave($__internal_4ad59753a919597e9732e407d0df7d5a9ab5e860b7322a4fcdb5cea319005b62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
