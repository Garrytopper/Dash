<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_04a439c0fe54be0106945ba3bab2f52c498db3e6d9f3b01eca75d7502184ecb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a439c0fe54be0106945ba3bab2f52c498db3e6d9f3b01eca75d7502184ecb3->enter($__internal_04a439c0fe54be0106945ba3bab2f52c498db3e6d9f3b01eca75d7502184ecb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b7a4f014f390dcaf6e14ea0e0082ced29cb5e8135e2f4335db3da3403a2ea9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a4f014f390dcaf6e14ea0e0082ced29cb5e8135e2f4335db3da3403a2ea9e4->enter($__internal_b7a4f014f390dcaf6e14ea0e0082ced29cb5e8135e2f4335db3da3403a2ea9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_04a439c0fe54be0106945ba3bab2f52c498db3e6d9f3b01eca75d7502184ecb3->leave($__internal_04a439c0fe54be0106945ba3bab2f52c498db3e6d9f3b01eca75d7502184ecb3_prof);

        
        $__internal_b7a4f014f390dcaf6e14ea0e0082ced29cb5e8135e2f4335db3da3403a2ea9e4->leave($__internal_b7a4f014f390dcaf6e14ea0e0082ced29cb5e8135e2f4335db3da3403a2ea9e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
