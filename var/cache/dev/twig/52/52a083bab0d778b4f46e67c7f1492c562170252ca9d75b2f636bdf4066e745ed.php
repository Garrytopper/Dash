<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8dc9e6c82196d273eff516f503cb02cd1de7ad444fd39dc242077a723ca70405 extends Twig_Template
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
        $__internal_464100adbdebeb0e68f1d46036dc673f72d223b1bea9f37bb6cb9626539278aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464100adbdebeb0e68f1d46036dc673f72d223b1bea9f37bb6cb9626539278aa->enter($__internal_464100adbdebeb0e68f1d46036dc673f72d223b1bea9f37bb6cb9626539278aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_95055c89ff6ef155fac2e4dcb746cda5947cbad05008c47fc1d83ff7416b5b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95055c89ff6ef155fac2e4dcb746cda5947cbad05008c47fc1d83ff7416b5b4a->enter($__internal_95055c89ff6ef155fac2e4dcb746cda5947cbad05008c47fc1d83ff7416b5b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_464100adbdebeb0e68f1d46036dc673f72d223b1bea9f37bb6cb9626539278aa->leave($__internal_464100adbdebeb0e68f1d46036dc673f72d223b1bea9f37bb6cb9626539278aa_prof);

        
        $__internal_95055c89ff6ef155fac2e4dcb746cda5947cbad05008c47fc1d83ff7416b5b4a->leave($__internal_95055c89ff6ef155fac2e4dcb746cda5947cbad05008c47fc1d83ff7416b5b4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
