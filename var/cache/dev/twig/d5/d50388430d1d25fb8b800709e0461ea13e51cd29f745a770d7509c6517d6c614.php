<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_cad302fa714591872036d5207f71b60b50d6eef2bce348e32ef125c7fe26e47a extends Twig_Template
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
        $__internal_33a71b642c4878be8c8afb3bfb03d79cc4e3647ab8463d75121ec1420a2d20e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a71b642c4878be8c8afb3bfb03d79cc4e3647ab8463d75121ec1420a2d20e5->enter($__internal_33a71b642c4878be8c8afb3bfb03d79cc4e3647ab8463d75121ec1420a2d20e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_18e026518b3d862da6283f986811a6ab3d2981663ba4add98db1e8062676284a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e026518b3d862da6283f986811a6ab3d2981663ba4add98db1e8062676284a->enter($__internal_18e026518b3d862da6283f986811a6ab3d2981663ba4add98db1e8062676284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_33a71b642c4878be8c8afb3bfb03d79cc4e3647ab8463d75121ec1420a2d20e5->leave($__internal_33a71b642c4878be8c8afb3bfb03d79cc4e3647ab8463d75121ec1420a2d20e5_prof);

        
        $__internal_18e026518b3d862da6283f986811a6ab3d2981663ba4add98db1e8062676284a->leave($__internal_18e026518b3d862da6283f986811a6ab3d2981663ba4add98db1e8062676284a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
