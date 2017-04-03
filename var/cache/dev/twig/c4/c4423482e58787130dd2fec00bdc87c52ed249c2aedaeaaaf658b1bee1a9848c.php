<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab7f8ed83191514643f9c61b1e13a6bec724678a02a2558d42d65c9f4f36ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab7f8ed83191514643f9c61b1e13a6bec724678a02a2558d42d65c9f4f36ee5->enter($__internal_4ab7f8ed83191514643f9c61b1e13a6bec724678a02a2558d42d65c9f4f36ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cd9d7466e845b9a922be8e3c3e94697086bcde245716325ed989b856c36aa6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9d7466e845b9a922be8e3c3e94697086bcde245716325ed989b856c36aa6bd->enter($__internal_cd9d7466e845b9a922be8e3c3e94697086bcde245716325ed989b856c36aa6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4ab7f8ed83191514643f9c61b1e13a6bec724678a02a2558d42d65c9f4f36ee5->leave($__internal_4ab7f8ed83191514643f9c61b1e13a6bec724678a02a2558d42d65c9f4f36ee5_prof);

        
        $__internal_cd9d7466e845b9a922be8e3c3e94697086bcde245716325ed989b856c36aa6bd->leave($__internal_cd9d7466e845b9a922be8e3c3e94697086bcde245716325ed989b856c36aa6bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
