<?php

/* DashDventeBundle:Formulaire:new.html.twig */
class __TwigTemplate_9a66f72ba97eaa673fd7f92cd1e70b96f9dbf41eb97628d7b3be914987809754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Formulaire:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DashCoreBundle::coreLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b0ef69d58a5e2603bb9e300fac3365a00b5d4425cd26e45ded55e51f30f6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b0ef69d58a5e2603bb9e300fac3365a00b5d4425cd26e45ded55e51f30f6e8->enter($__internal_97b0ef69d58a5e2603bb9e300fac3365a00b5d4425cd26e45ded55e51f30f6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:new.html.twig"));

        $__internal_d869f17568911dd6d6e15bc694b2495ed1b03415f26228f1baa66faf3c4a5587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d869f17568911dd6d6e15bc694b2495ed1b03415f26228f1baa66faf3c4a5587->enter($__internal_d869f17568911dd6d6e15bc694b2495ed1b03415f26228f1baa66faf3c4a5587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Formulaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b0ef69d58a5e2603bb9e300fac3365a00b5d4425cd26e45ded55e51f30f6e8->leave($__internal_97b0ef69d58a5e2603bb9e300fac3365a00b5d4425cd26e45ded55e51f30f6e8_prof);

        
        $__internal_d869f17568911dd6d6e15bc694b2495ed1b03415f26228f1baa66faf3c4a5587->leave($__internal_d869f17568911dd6d6e15bc694b2495ed1b03415f26228f1baa66faf3c4a5587_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c953796a3d69dbf1742eaece04dfc4cf50524da52489a1fdbfa7864a69872276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c953796a3d69dbf1742eaece04dfc4cf50524da52489a1fdbfa7864a69872276->enter($__internal_c953796a3d69dbf1742eaece04dfc4cf50524da52489a1fdbfa7864a69872276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83107078f2f876734f7e06bfa98f3c0d81106d12fbfe9d8d347d986248e68ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83107078f2f876734f7e06bfa98f3c0d81106d12fbfe9d8d347d986248e68ea8->enter($__internal_83107078f2f876734f7e06bfa98f3c0d81106d12fbfe9d8d347d986248e68ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_83107078f2f876734f7e06bfa98f3c0d81106d12fbfe9d8d347d986248e68ea8->leave($__internal_83107078f2f876734f7e06bfa98f3c0d81106d12fbfe9d8d347d986248e68ea8_prof);

        
        $__internal_c953796a3d69dbf1742eaece04dfc4cf50524da52489a1fdbfa7864a69872276->leave($__internal_c953796a3d69dbf1742eaece04dfc4cf50524da52489a1fdbfa7864a69872276_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e7d12575852eb2148f2743e3132201858997c3ffd12979f7a4e296ff48a475d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7d12575852eb2148f2743e3132201858997c3ffd12979f7a4e296ff48a475d->enter($__internal_1e7d12575852eb2148f2743e3132201858997c3ffd12979f7a4e296ff48a475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f74939410f69c23f4af9f00faf49ecca8eedb129f924ef6b076febdabed53f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74939410f69c23f4af9f00faf49ecca8eedb129f924ef6b076febdabed53f53->enter($__internal_f74939410f69c23f4af9f00faf49ecca8eedb129f924ef6b076febdabed53f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "    <div class='col-xs-offset-3 col-xs-6'>
        <div class=\"btn btn-info\">Next</div>
    </div>
";
        
        $__internal_f74939410f69c23f4af9f00faf49ecca8eedb129f924ef6b076febdabed53f53->leave($__internal_f74939410f69c23f4af9f00faf49ecca8eedb129f924ef6b076febdabed53f53_prof);

        
        $__internal_1e7d12575852eb2148f2743e3132201858997c3ffd12979f7a4e296ff48a475d->leave($__internal_1e7d12575852eb2148f2743e3132201858997c3ffd12979f7a4e296ff48a475d_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Formulaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::coreLayout.html.twig' %}

{% block body %}
    {{ form(form) }}
{% endblock %}

{% block menu %}
    <div class='col-xs-offset-3 col-xs-6'>
        <div class=\"btn btn-info\">Next</div>
    </div>
{% endblock %}", "DashDventeBundle:Formulaire:new.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Formulaire/new.html.twig");
    }
}
