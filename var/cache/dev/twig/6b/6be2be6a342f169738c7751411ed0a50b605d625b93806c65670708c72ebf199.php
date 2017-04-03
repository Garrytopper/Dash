<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_857fc8a90a9b1b5493d021ccb857e435713dce7da6addfdb0700071c932aee58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857fc8a90a9b1b5493d021ccb857e435713dce7da6addfdb0700071c932aee58->enter($__internal_857fc8a90a9b1b5493d021ccb857e435713dce7da6addfdb0700071c932aee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_14404cd059850002454fe354a03bb355dde1add7c39a6eec6027d3ffdd9e9f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14404cd059850002454fe354a03bb355dde1add7c39a6eec6027d3ffdd9e9f5d->enter($__internal_14404cd059850002454fe354a03bb355dde1add7c39a6eec6027d3ffdd9e9f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_857fc8a90a9b1b5493d021ccb857e435713dce7da6addfdb0700071c932aee58->leave($__internal_857fc8a90a9b1b5493d021ccb857e435713dce7da6addfdb0700071c932aee58_prof);

        
        $__internal_14404cd059850002454fe354a03bb355dde1add7c39a6eec6027d3ffdd9e9f5d->leave($__internal_14404cd059850002454fe354a03bb355dde1add7c39a6eec6027d3ffdd9e9f5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
