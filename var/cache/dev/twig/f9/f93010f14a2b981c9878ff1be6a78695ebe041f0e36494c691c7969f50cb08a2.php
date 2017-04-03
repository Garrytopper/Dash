<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_17b9b71cd5239e36aed13a5e218cbb82b7ef0a771438f2fc0b25cb3c81ca9759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b9b71cd5239e36aed13a5e218cbb82b7ef0a771438f2fc0b25cb3c81ca9759->enter($__internal_17b9b71cd5239e36aed13a5e218cbb82b7ef0a771438f2fc0b25cb3c81ca9759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4e95c25100abc1028b68cd01c374dc04b2dad7dc4c63d2fb23bc2442a05e5070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e95c25100abc1028b68cd01c374dc04b2dad7dc4c63d2fb23bc2442a05e5070->enter($__internal_4e95c25100abc1028b68cd01c374dc04b2dad7dc4c63d2fb23bc2442a05e5070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17b9b71cd5239e36aed13a5e218cbb82b7ef0a771438f2fc0b25cb3c81ca9759->leave($__internal_17b9b71cd5239e36aed13a5e218cbb82b7ef0a771438f2fc0b25cb3c81ca9759_prof);

        
        $__internal_4e95c25100abc1028b68cd01c374dc04b2dad7dc4c63d2fb23bc2442a05e5070->leave($__internal_4e95c25100abc1028b68cd01c374dc04b2dad7dc4c63d2fb23bc2442a05e5070_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
