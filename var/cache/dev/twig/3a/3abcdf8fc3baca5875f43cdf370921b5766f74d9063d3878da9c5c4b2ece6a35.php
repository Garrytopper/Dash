<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_3addc24ab9dab67071f52ee6a0ada7c77ad42ca40207e080c2c7b37f2da38a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3addc24ab9dab67071f52ee6a0ada7c77ad42ca40207e080c2c7b37f2da38a2d->enter($__internal_3addc24ab9dab67071f52ee6a0ada7c77ad42ca40207e080c2c7b37f2da38a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e659f1213e8a00c9b455c090d84466a5217a1cf89e7dd4343a37cdb62ee82847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e659f1213e8a00c9b455c090d84466a5217a1cf89e7dd4343a37cdb62ee82847->enter($__internal_e659f1213e8a00c9b455c090d84466a5217a1cf89e7dd4343a37cdb62ee82847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3addc24ab9dab67071f52ee6a0ada7c77ad42ca40207e080c2c7b37f2da38a2d->leave($__internal_3addc24ab9dab67071f52ee6a0ada7c77ad42ca40207e080c2c7b37f2da38a2d_prof);

        
        $__internal_e659f1213e8a00c9b455c090d84466a5217a1cf89e7dd4343a37cdb62ee82847->leave($__internal_e659f1213e8a00c9b455c090d84466a5217a1cf89e7dd4343a37cdb62ee82847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
