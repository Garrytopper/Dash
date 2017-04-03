<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305d7a8a29a600771454fbbc95c40008e392874823a6407ecccf3d2962b330c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305d7a8a29a600771454fbbc95c40008e392874823a6407ecccf3d2962b330c2->enter($__internal_305d7a8a29a600771454fbbc95c40008e392874823a6407ecccf3d2962b330c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bbd1de7a889b9548b342f8ee36922beb6b3b1a85aba935ed732f29bec98ff7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd1de7a889b9548b342f8ee36922beb6b3b1a85aba935ed732f29bec98ff7b4->enter($__internal_bbd1de7a889b9548b342f8ee36922beb6b3b1a85aba935ed732f29bec98ff7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305d7a8a29a600771454fbbc95c40008e392874823a6407ecccf3d2962b330c2->leave($__internal_305d7a8a29a600771454fbbc95c40008e392874823a6407ecccf3d2962b330c2_prof);

        
        $__internal_bbd1de7a889b9548b342f8ee36922beb6b3b1a85aba935ed732f29bec98ff7b4->leave($__internal_bbd1de7a889b9548b342f8ee36922beb6b3b1a85aba935ed732f29bec98ff7b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c952986208d99e24db6729391fb358d430c14e1af3763eeed643c895d39d536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c952986208d99e24db6729391fb358d430c14e1af3763eeed643c895d39d536->enter($__internal_1c952986208d99e24db6729391fb358d430c14e1af3763eeed643c895d39d536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca9580caca80caa4d0670fe7f264c3f003bcfb845113553afe3dbdb27a27020f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9580caca80caa4d0670fe7f264c3f003bcfb845113553afe3dbdb27a27020f->enter($__internal_ca9580caca80caa4d0670fe7f264c3f003bcfb845113553afe3dbdb27a27020f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ca9580caca80caa4d0670fe7f264c3f003bcfb845113553afe3dbdb27a27020f->leave($__internal_ca9580caca80caa4d0670fe7f264c3f003bcfb845113553afe3dbdb27a27020f_prof);

        
        $__internal_1c952986208d99e24db6729391fb358d430c14e1af3763eeed643c895d39d536->leave($__internal_1c952986208d99e24db6729391fb358d430c14e1af3763eeed643c895d39d536_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_772476131857945e5867c9a38c771f5e5207a4d578f20aa7fb90f355b74e5111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772476131857945e5867c9a38c771f5e5207a4d578f20aa7fb90f355b74e5111->enter($__internal_772476131857945e5867c9a38c771f5e5207a4d578f20aa7fb90f355b74e5111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f0802008a0bb1028d42cb8c5b060b44fbcce22e60a8ce7e5f02961577fe08f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0802008a0bb1028d42cb8c5b060b44fbcce22e60a8ce7e5f02961577fe08f8->enter($__internal_1f0802008a0bb1028d42cb8c5b060b44fbcce22e60a8ce7e5f02961577fe08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1f0802008a0bb1028d42cb8c5b060b44fbcce22e60a8ce7e5f02961577fe08f8->leave($__internal_1f0802008a0bb1028d42cb8c5b060b44fbcce22e60a8ce7e5f02961577fe08f8_prof);

        
        $__internal_772476131857945e5867c9a38c771f5e5207a4d578f20aa7fb90f355b74e5111->leave($__internal_772476131857945e5867c9a38c771f5e5207a4d578f20aa7fb90f355b74e5111_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
