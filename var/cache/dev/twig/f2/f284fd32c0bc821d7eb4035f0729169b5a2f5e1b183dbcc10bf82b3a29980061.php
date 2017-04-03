<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_cba6a96b67c0d1000bd5ff632e74eb8df0a8c1562d18d996a099c2f53073f847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba6a96b67c0d1000bd5ff632e74eb8df0a8c1562d18d996a099c2f53073f847->enter($__internal_cba6a96b67c0d1000bd5ff632e74eb8df0a8c1562d18d996a099c2f53073f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f3d14314994e0e8460d3fdbd2e39c70747e97a673877280439dc658d8b68c196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d14314994e0e8460d3fdbd2e39c70747e97a673877280439dc658d8b68c196->enter($__internal_f3d14314994e0e8460d3fdbd2e39c70747e97a673877280439dc658d8b68c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cba6a96b67c0d1000bd5ff632e74eb8df0a8c1562d18d996a099c2f53073f847->leave($__internal_cba6a96b67c0d1000bd5ff632e74eb8df0a8c1562d18d996a099c2f53073f847_prof);

        
        $__internal_f3d14314994e0e8460d3fdbd2e39c70747e97a673877280439dc658d8b68c196->leave($__internal_f3d14314994e0e8460d3fdbd2e39c70747e97a673877280439dc658d8b68c196_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
