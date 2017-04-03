<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6beb572cc3349330119da77b7d8d71fae0f27a564e0daff9d84425bdee21270f extends Twig_Template
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
        $__internal_01a4b5e17f569a9be933a36b4372802252e3579ddd7d5d79f48828c74f5ccba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a4b5e17f569a9be933a36b4372802252e3579ddd7d5d79f48828c74f5ccba7->enter($__internal_01a4b5e17f569a9be933a36b4372802252e3579ddd7d5d79f48828c74f5ccba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1e69f6aa8d0ad5955d60ce195f3bf01fada865e8cfc816137195a38ad41683d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e69f6aa8d0ad5955d60ce195f3bf01fada865e8cfc816137195a38ad41683d8->enter($__internal_1e69f6aa8d0ad5955d60ce195f3bf01fada865e8cfc816137195a38ad41683d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_01a4b5e17f569a9be933a36b4372802252e3579ddd7d5d79f48828c74f5ccba7->leave($__internal_01a4b5e17f569a9be933a36b4372802252e3579ddd7d5d79f48828c74f5ccba7_prof);

        
        $__internal_1e69f6aa8d0ad5955d60ce195f3bf01fada865e8cfc816137195a38ad41683d8->leave($__internal_1e69f6aa8d0ad5955d60ce195f3bf01fada865e8cfc816137195a38ad41683d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
