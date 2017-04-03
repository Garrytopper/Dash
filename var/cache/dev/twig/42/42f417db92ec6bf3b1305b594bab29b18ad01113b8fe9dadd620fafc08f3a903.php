<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ac4d13a7fe8e9b741f1c05c47099b6ad2af8a2b42b450209b54b76fb4bcecd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4d13a7fe8e9b741f1c05c47099b6ad2af8a2b42b450209b54b76fb4bcecd75->enter($__internal_ac4d13a7fe8e9b741f1c05c47099b6ad2af8a2b42b450209b54b76fb4bcecd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b805821be8088e263c67e034a664f550ad74748d1782deb7cf3022c4a18c78cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b805821be8088e263c67e034a664f550ad74748d1782deb7cf3022c4a18c78cb->enter($__internal_b805821be8088e263c67e034a664f550ad74748d1782deb7cf3022c4a18c78cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4d13a7fe8e9b741f1c05c47099b6ad2af8a2b42b450209b54b76fb4bcecd75->leave($__internal_ac4d13a7fe8e9b741f1c05c47099b6ad2af8a2b42b450209b54b76fb4bcecd75_prof);

        
        $__internal_b805821be8088e263c67e034a664f550ad74748d1782deb7cf3022c4a18c78cb->leave($__internal_b805821be8088e263c67e034a664f550ad74748d1782deb7cf3022c4a18c78cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3bbe7dd69a4671e02a2f0fa4f4d68f7bdbd1133eabea1d3bf5889a1f11766b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bbe7dd69a4671e02a2f0fa4f4d68f7bdbd1133eabea1d3bf5889a1f11766b3->enter($__internal_b3bbe7dd69a4671e02a2f0fa4f4d68f7bdbd1133eabea1d3bf5889a1f11766b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6427959761bd49f433f7223d951a2bfd27ce9c79b041be45e42172297fbe63ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6427959761bd49f433f7223d951a2bfd27ce9c79b041be45e42172297fbe63ab->enter($__internal_6427959761bd49f433f7223d951a2bfd27ce9c79b041be45e42172297fbe63ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6427959761bd49f433f7223d951a2bfd27ce9c79b041be45e42172297fbe63ab->leave($__internal_6427959761bd49f433f7223d951a2bfd27ce9c79b041be45e42172297fbe63ab_prof);

        
        $__internal_b3bbe7dd69a4671e02a2f0fa4f4d68f7bdbd1133eabea1d3bf5889a1f11766b3->leave($__internal_b3bbe7dd69a4671e02a2f0fa4f4d68f7bdbd1133eabea1d3bf5889a1f11766b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a10c83f03771edc92b6248ebd9f44fe3afac0631953adfa5fb899ca16a089cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10c83f03771edc92b6248ebd9f44fe3afac0631953adfa5fb899ca16a089cb2->enter($__internal_a10c83f03771edc92b6248ebd9f44fe3afac0631953adfa5fb899ca16a089cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d62bbae9a05f0319b216795ec44d9e683ebd1c65d937c089e901b98bc1fdedf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62bbae9a05f0319b216795ec44d9e683ebd1c65d937c089e901b98bc1fdedf6->enter($__internal_d62bbae9a05f0319b216795ec44d9e683ebd1c65d937c089e901b98bc1fdedf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d62bbae9a05f0319b216795ec44d9e683ebd1c65d937c089e901b98bc1fdedf6->leave($__internal_d62bbae9a05f0319b216795ec44d9e683ebd1c65d937c089e901b98bc1fdedf6_prof);

        
        $__internal_a10c83f03771edc92b6248ebd9f44fe3afac0631953adfa5fb899ca16a089cb2->leave($__internal_a10c83f03771edc92b6248ebd9f44fe3afac0631953adfa5fb899ca16a089cb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c42bb9979074036aba89ad3e08f209393313e367441e0794c9009e02ae9ade15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42bb9979074036aba89ad3e08f209393313e367441e0794c9009e02ae9ade15->enter($__internal_c42bb9979074036aba89ad3e08f209393313e367441e0794c9009e02ae9ade15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63345c41d686ad6a27b212bcafa1011c52b0af8f3a656df04baf493362347d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63345c41d686ad6a27b212bcafa1011c52b0af8f3a656df04baf493362347d8f->enter($__internal_63345c41d686ad6a27b212bcafa1011c52b0af8f3a656df04baf493362347d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63345c41d686ad6a27b212bcafa1011c52b0af8f3a656df04baf493362347d8f->leave($__internal_63345c41d686ad6a27b212bcafa1011c52b0af8f3a656df04baf493362347d8f_prof);

        
        $__internal_c42bb9979074036aba89ad3e08f209393313e367441e0794c9009e02ae9ade15->leave($__internal_c42bb9979074036aba89ad3e08f209393313e367441e0794c9009e02ae9ade15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
