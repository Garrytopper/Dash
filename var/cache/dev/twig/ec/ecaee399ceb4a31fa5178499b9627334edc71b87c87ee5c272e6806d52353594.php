<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_61899c0f0f06bf91d9056259e23c8d0d6828131bcba95887c5b32735a840d9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61899c0f0f06bf91d9056259e23c8d0d6828131bcba95887c5b32735a840d9df->enter($__internal_61899c0f0f06bf91d9056259e23c8d0d6828131bcba95887c5b32735a840d9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fea51fd4d3bebaf3d8e54a1ccfcd7d9dd0bc82313851cd41dd25ca9777bd10d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea51fd4d3bebaf3d8e54a1ccfcd7d9dd0bc82313851cd41dd25ca9777bd10d1->enter($__internal_fea51fd4d3bebaf3d8e54a1ccfcd7d9dd0bc82313851cd41dd25ca9777bd10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_61899c0f0f06bf91d9056259e23c8d0d6828131bcba95887c5b32735a840d9df->leave($__internal_61899c0f0f06bf91d9056259e23c8d0d6828131bcba95887c5b32735a840d9df_prof);

        
        $__internal_fea51fd4d3bebaf3d8e54a1ccfcd7d9dd0bc82313851cd41dd25ca9777bd10d1->leave($__internal_fea51fd4d3bebaf3d8e54a1ccfcd7d9dd0bc82313851cd41dd25ca9777bd10d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
