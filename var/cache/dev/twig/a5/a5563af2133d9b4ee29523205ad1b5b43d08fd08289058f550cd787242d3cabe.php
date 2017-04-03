<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa697850b04f0fce2a27c9d2aba0dcc1160556dfba1f7233609d98398aeb562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa697850b04f0fce2a27c9d2aba0dcc1160556dfba1f7233609d98398aeb562->enter($__internal_9fa697850b04f0fce2a27c9d2aba0dcc1160556dfba1f7233609d98398aeb562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ea7814f597994858163ec46651d4f05d86ebbcd24bf742b3e22c8adf9d68fdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7814f597994858163ec46651d4f05d86ebbcd24bf742b3e22c8adf9d68fdc2->enter($__internal_ea7814f597994858163ec46651d4f05d86ebbcd24bf742b3e22c8adf9d68fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9fa697850b04f0fce2a27c9d2aba0dcc1160556dfba1f7233609d98398aeb562->leave($__internal_9fa697850b04f0fce2a27c9d2aba0dcc1160556dfba1f7233609d98398aeb562_prof);

        
        $__internal_ea7814f597994858163ec46651d4f05d86ebbcd24bf742b3e22c8adf9d68fdc2->leave($__internal_ea7814f597994858163ec46651d4f05d86ebbcd24bf742b3e22c8adf9d68fdc2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fded78dd78fe5db70d20d17bcbe79e03e9fcc325452790f235122a13cb49a630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fded78dd78fe5db70d20d17bcbe79e03e9fcc325452790f235122a13cb49a630->enter($__internal_fded78dd78fe5db70d20d17bcbe79e03e9fcc325452790f235122a13cb49a630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9e276660e4266b8553a433fb0aac54f3ba94fce2c7d3b2e2bb06561a6345b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e276660e4266b8553a433fb0aac54f3ba94fce2c7d3b2e2bb06561a6345b76->enter($__internal_c9e276660e4266b8553a433fb0aac54f3ba94fce2c7d3b2e2bb06561a6345b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9e276660e4266b8553a433fb0aac54f3ba94fce2c7d3b2e2bb06561a6345b76->leave($__internal_c9e276660e4266b8553a433fb0aac54f3ba94fce2c7d3b2e2bb06561a6345b76_prof);

        
        $__internal_fded78dd78fe5db70d20d17bcbe79e03e9fcc325452790f235122a13cb49a630->leave($__internal_fded78dd78fe5db70d20d17bcbe79e03e9fcc325452790f235122a13cb49a630_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
