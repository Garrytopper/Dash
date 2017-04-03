<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6da1c8af6b4e995f3ff08d5c44e2e177a01f3be5e53b990cd973d48c40a9ecc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da1c8af6b4e995f3ff08d5c44e2e177a01f3be5e53b990cd973d48c40a9ecc7->enter($__internal_6da1c8af6b4e995f3ff08d5c44e2e177a01f3be5e53b990cd973d48c40a9ecc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_17200f87bc2066c5b8ebd3d9b4194ea14bf025e90702bcbe2d81d0bf3802cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17200f87bc2066c5b8ebd3d9b4194ea14bf025e90702bcbe2d81d0bf3802cc0c->enter($__internal_17200f87bc2066c5b8ebd3d9b4194ea14bf025e90702bcbe2d81d0bf3802cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da1c8af6b4e995f3ff08d5c44e2e177a01f3be5e53b990cd973d48c40a9ecc7->leave($__internal_6da1c8af6b4e995f3ff08d5c44e2e177a01f3be5e53b990cd973d48c40a9ecc7_prof);

        
        $__internal_17200f87bc2066c5b8ebd3d9b4194ea14bf025e90702bcbe2d81d0bf3802cc0c->leave($__internal_17200f87bc2066c5b8ebd3d9b4194ea14bf025e90702bcbe2d81d0bf3802cc0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12ec2a2d4245cdd10966ad687db893ef6270eb9321554589094e829f743a48ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ec2a2d4245cdd10966ad687db893ef6270eb9321554589094e829f743a48ad->enter($__internal_12ec2a2d4245cdd10966ad687db893ef6270eb9321554589094e829f743a48ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8a74776cc20c3f171b31301bfd69c6413b10e0ece9d1bd8f092cd4264d10b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a74776cc20c3f171b31301bfd69c6413b10e0ece9d1bd8f092cd4264d10b5d->enter($__internal_c8a74776cc20c3f171b31301bfd69c6413b10e0ece9d1bd8f092cd4264d10b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8a74776cc20c3f171b31301bfd69c6413b10e0ece9d1bd8f092cd4264d10b5d->leave($__internal_c8a74776cc20c3f171b31301bfd69c6413b10e0ece9d1bd8f092cd4264d10b5d_prof);

        
        $__internal_12ec2a2d4245cdd10966ad687db893ef6270eb9321554589094e829f743a48ad->leave($__internal_12ec2a2d4245cdd10966ad687db893ef6270eb9321554589094e829f743a48ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7a85435f993a0fb2ce23297a52f8affb8197658443408af3e5671b42a99cfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a85435f993a0fb2ce23297a52f8affb8197658443408af3e5671b42a99cfad->enter($__internal_a7a85435f993a0fb2ce23297a52f8affb8197658443408af3e5671b42a99cfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7d7120250b82c54edce360fd710afc7675f0448067490bea212859e45cd0442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7120250b82c54edce360fd710afc7675f0448067490bea212859e45cd0442->enter($__internal_f7d7120250b82c54edce360fd710afc7675f0448067490bea212859e45cd0442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_f7d7120250b82c54edce360fd710afc7675f0448067490bea212859e45cd0442->leave($__internal_f7d7120250b82c54edce360fd710afc7675f0448067490bea212859e45cd0442_prof);

        
        $__internal_a7a85435f993a0fb2ce23297a52f8affb8197658443408af3e5671b42a99cfad->leave($__internal_a7a85435f993a0fb2ce23297a52f8affb8197658443408af3e5671b42a99cfad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
