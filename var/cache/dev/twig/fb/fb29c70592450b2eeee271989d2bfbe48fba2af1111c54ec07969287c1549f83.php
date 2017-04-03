<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_4b710ed157c1697d0b297cd70a6543b4e926ebcf4ffc8c0687f831522191b615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b710ed157c1697d0b297cd70a6543b4e926ebcf4ffc8c0687f831522191b615->enter($__internal_4b710ed157c1697d0b297cd70a6543b4e926ebcf4ffc8c0687f831522191b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4d891e205ff7acaf58586de720c8bcf648c09f7fe6841e3bd95e3dd26ff5142f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d891e205ff7acaf58586de720c8bcf648c09f7fe6841e3bd95e3dd26ff5142f->enter($__internal_4d891e205ff7acaf58586de720c8bcf648c09f7fe6841e3bd95e3dd26ff5142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4b710ed157c1697d0b297cd70a6543b4e926ebcf4ffc8c0687f831522191b615->leave($__internal_4b710ed157c1697d0b297cd70a6543b4e926ebcf4ffc8c0687f831522191b615_prof);

        
        $__internal_4d891e205ff7acaf58586de720c8bcf648c09f7fe6841e3bd95e3dd26ff5142f->leave($__internal_4d891e205ff7acaf58586de720c8bcf648c09f7fe6841e3bd95e3dd26ff5142f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
