<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_45eb3d0f6ed5598f2809d6600318284b864619bf4d04a35f311e70b7b7272a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eb3d0f6ed5598f2809d6600318284b864619bf4d04a35f311e70b7b7272a4e->enter($__internal_45eb3d0f6ed5598f2809d6600318284b864619bf4d04a35f311e70b7b7272a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fb8b87aac1996bfe3f7703aafd6f86cf7e9c23bc54d71993652dd31568f2565a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8b87aac1996bfe3f7703aafd6f86cf7e9c23bc54d71993652dd31568f2565a->enter($__internal_fb8b87aac1996bfe3f7703aafd6f86cf7e9c23bc54d71993652dd31568f2565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_45eb3d0f6ed5598f2809d6600318284b864619bf4d04a35f311e70b7b7272a4e->leave($__internal_45eb3d0f6ed5598f2809d6600318284b864619bf4d04a35f311e70b7b7272a4e_prof);

        
        $__internal_fb8b87aac1996bfe3f7703aafd6f86cf7e9c23bc54d71993652dd31568f2565a->leave($__internal_fb8b87aac1996bfe3f7703aafd6f86cf7e9c23bc54d71993652dd31568f2565a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
