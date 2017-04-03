<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf4ec3de8f5ed9a5fe3b4e068c101ffbf15fc1d15d4eb233682cdc68ea0866ab extends Twig_Template
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
        $__internal_92abb885bfdcc3500119599648153b7e5f9926e175b6e9766a2a11dddb077efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92abb885bfdcc3500119599648153b7e5f9926e175b6e9766a2a11dddb077efe->enter($__internal_92abb885bfdcc3500119599648153b7e5f9926e175b6e9766a2a11dddb077efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_48ef94269b9a8eed384ceaef9bccde80d4f8f6b5908b3ff48048cfa73735e0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ef94269b9a8eed384ceaef9bccde80d4f8f6b5908b3ff48048cfa73735e0eb->enter($__internal_48ef94269b9a8eed384ceaef9bccde80d4f8f6b5908b3ff48048cfa73735e0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_92abb885bfdcc3500119599648153b7e5f9926e175b6e9766a2a11dddb077efe->leave($__internal_92abb885bfdcc3500119599648153b7e5f9926e175b6e9766a2a11dddb077efe_prof);

        
        $__internal_48ef94269b9a8eed384ceaef9bccde80d4f8f6b5908b3ff48048cfa73735e0eb->leave($__internal_48ef94269b9a8eed384ceaef9bccde80d4f8f6b5908b3ff48048cfa73735e0eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
