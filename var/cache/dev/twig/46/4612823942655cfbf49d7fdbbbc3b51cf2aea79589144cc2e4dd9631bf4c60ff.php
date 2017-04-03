<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_3947be3ac4bf300747c373a9761445d8240489fd2b251c23c381ff5e8de33699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3947be3ac4bf300747c373a9761445d8240489fd2b251c23c381ff5e8de33699->enter($__internal_3947be3ac4bf300747c373a9761445d8240489fd2b251c23c381ff5e8de33699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_df6c74021839971cacf942a5410ce5298b79ea173c2962d3760ffb35ef99f8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6c74021839971cacf942a5410ce5298b79ea173c2962d3760ffb35ef99f8bc->enter($__internal_df6c74021839971cacf942a5410ce5298b79ea173c2962d3760ffb35ef99f8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3947be3ac4bf300747c373a9761445d8240489fd2b251c23c381ff5e8de33699->leave($__internal_3947be3ac4bf300747c373a9761445d8240489fd2b251c23c381ff5e8de33699_prof);

        
        $__internal_df6c74021839971cacf942a5410ce5298b79ea173c2962d3760ffb35ef99f8bc->leave($__internal_df6c74021839971cacf942a5410ce5298b79ea173c2962d3760ffb35ef99f8bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
