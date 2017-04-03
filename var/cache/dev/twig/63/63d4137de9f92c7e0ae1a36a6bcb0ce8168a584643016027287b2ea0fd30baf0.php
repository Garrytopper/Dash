<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_833c840621e22019e319f27210f4e8de77ace9fc6f293705da9883ea57b20729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833c840621e22019e319f27210f4e8de77ace9fc6f293705da9883ea57b20729->enter($__internal_833c840621e22019e319f27210f4e8de77ace9fc6f293705da9883ea57b20729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8141a4e8add4d7e09913e3e6ce21c8d9c9458613a6b6ca7fc187ff50c12b4d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8141a4e8add4d7e09913e3e6ce21c8d9c9458613a6b6ca7fc187ff50c12b4d12->enter($__internal_8141a4e8add4d7e09913e3e6ce21c8d9c9458613a6b6ca7fc187ff50c12b4d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_833c840621e22019e319f27210f4e8de77ace9fc6f293705da9883ea57b20729->leave($__internal_833c840621e22019e319f27210f4e8de77ace9fc6f293705da9883ea57b20729_prof);

        
        $__internal_8141a4e8add4d7e09913e3e6ce21c8d9c9458613a6b6ca7fc187ff50c12b4d12->leave($__internal_8141a4e8add4d7e09913e3e6ce21c8d9c9458613a6b6ca7fc187ff50c12b4d12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
