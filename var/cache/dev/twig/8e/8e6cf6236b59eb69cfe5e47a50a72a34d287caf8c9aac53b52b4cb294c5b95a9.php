<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c784234235a7ff887bc50d174fd272f250a41d940cce5594db2bbeb23d36505b extends Twig_Template
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
        $__internal_4a098fc7c041a59a9ed040ffa6b40bf8ec6c52ce515d6a8028864a5496bd3655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a098fc7c041a59a9ed040ffa6b40bf8ec6c52ce515d6a8028864a5496bd3655->enter($__internal_4a098fc7c041a59a9ed040ffa6b40bf8ec6c52ce515d6a8028864a5496bd3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_efaaf673424e7f5a9295ccee9528fb6cf264792201a2d06d9f57dd8f63a8f66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaaf673424e7f5a9295ccee9528fb6cf264792201a2d06d9f57dd8f63a8f66d->enter($__internal_efaaf673424e7f5a9295ccee9528fb6cf264792201a2d06d9f57dd8f63a8f66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4a098fc7c041a59a9ed040ffa6b40bf8ec6c52ce515d6a8028864a5496bd3655->leave($__internal_4a098fc7c041a59a9ed040ffa6b40bf8ec6c52ce515d6a8028864a5496bd3655_prof);

        
        $__internal_efaaf673424e7f5a9295ccee9528fb6cf264792201a2d06d9f57dd8f63a8f66d->leave($__internal_efaaf673424e7f5a9295ccee9528fb6cf264792201a2d06d9f57dd8f63a8f66d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
