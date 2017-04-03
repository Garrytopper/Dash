<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_51b974c258e61ce570e51efbfa89b062dac61d6f46284556c135b76bbe25e88d extends Twig_Template
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
        $__internal_555af1fc41025136e9d470e7fcf212079edafa1d04b6df3acb74fea221c780ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555af1fc41025136e9d470e7fcf212079edafa1d04b6df3acb74fea221c780ea->enter($__internal_555af1fc41025136e9d470e7fcf212079edafa1d04b6df3acb74fea221c780ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d2bc1685452a7f57245b734e49b02d0f44375e15b76974404e5d458211198693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bc1685452a7f57245b734e49b02d0f44375e15b76974404e5d458211198693->enter($__internal_d2bc1685452a7f57245b734e49b02d0f44375e15b76974404e5d458211198693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_555af1fc41025136e9d470e7fcf212079edafa1d04b6df3acb74fea221c780ea->leave($__internal_555af1fc41025136e9d470e7fcf212079edafa1d04b6df3acb74fea221c780ea_prof);

        
        $__internal_d2bc1685452a7f57245b734e49b02d0f44375e15b76974404e5d458211198693->leave($__internal_d2bc1685452a7f57245b734e49b02d0f44375e15b76974404e5d458211198693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
