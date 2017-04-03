<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ff95babfcda70595578c4e9550ca8e188c0e99c259c46b023576c8fe811a155a extends Twig_Template
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
        $__internal_1b41a9f15dc27eb660fd8b295fd5842839b3126da93cd7350133edd0fe3417d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b41a9f15dc27eb660fd8b295fd5842839b3126da93cd7350133edd0fe3417d4->enter($__internal_1b41a9f15dc27eb660fd8b295fd5842839b3126da93cd7350133edd0fe3417d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8082796be65c4cf8f2a03ae5676aee5f3d422c45f9c25e20d5ba8452f9b69f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8082796be65c4cf8f2a03ae5676aee5f3d422c45f9c25e20d5ba8452f9b69f33->enter($__internal_8082796be65c4cf8f2a03ae5676aee5f3d422c45f9c25e20d5ba8452f9b69f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1b41a9f15dc27eb660fd8b295fd5842839b3126da93cd7350133edd0fe3417d4->leave($__internal_1b41a9f15dc27eb660fd8b295fd5842839b3126da93cd7350133edd0fe3417d4_prof);

        
        $__internal_8082796be65c4cf8f2a03ae5676aee5f3d422c45f9c25e20d5ba8452f9b69f33->leave($__internal_8082796be65c4cf8f2a03ae5676aee5f3d422c45f9c25e20d5ba8452f9b69f33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
