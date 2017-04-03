<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_71ded9c6d9600fe7d7b0ca844898d06dc531b1bb76cf4fd340f6412d9d2b97b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ded9c6d9600fe7d7b0ca844898d06dc531b1bb76cf4fd340f6412d9d2b97b8->enter($__internal_71ded9c6d9600fe7d7b0ca844898d06dc531b1bb76cf4fd340f6412d9d2b97b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9dc234461b83f3bf36fb73647bfdf7f4d306b9fbab8b5e98b051fc96dda6a6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc234461b83f3bf36fb73647bfdf7f4d306b9fbab8b5e98b051fc96dda6a6a4->enter($__internal_9dc234461b83f3bf36fb73647bfdf7f4d306b9fbab8b5e98b051fc96dda6a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_71ded9c6d9600fe7d7b0ca844898d06dc531b1bb76cf4fd340f6412d9d2b97b8->leave($__internal_71ded9c6d9600fe7d7b0ca844898d06dc531b1bb76cf4fd340f6412d9d2b97b8_prof);

        
        $__internal_9dc234461b83f3bf36fb73647bfdf7f4d306b9fbab8b5e98b051fc96dda6a6a4->leave($__internal_9dc234461b83f3bf36fb73647bfdf7f4d306b9fbab8b5e98b051fc96dda6a6a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
