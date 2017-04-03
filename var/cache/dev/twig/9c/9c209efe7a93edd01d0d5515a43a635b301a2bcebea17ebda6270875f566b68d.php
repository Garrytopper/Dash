<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_8295476488df89b0d4e39e5d6f95784f583d425e5a6fd9222d7301d4c49aef12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8295476488df89b0d4e39e5d6f95784f583d425e5a6fd9222d7301d4c49aef12->enter($__internal_8295476488df89b0d4e39e5d6f95784f583d425e5a6fd9222d7301d4c49aef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_29233f607c20bd6ab40a504f0c6c075365f3bccbc07f69a4b4941b980e5d27ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29233f607c20bd6ab40a504f0c6c075365f3bccbc07f69a4b4941b980e5d27ce->enter($__internal_29233f607c20bd6ab40a504f0c6c075365f3bccbc07f69a4b4941b980e5d27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8295476488df89b0d4e39e5d6f95784f583d425e5a6fd9222d7301d4c49aef12->leave($__internal_8295476488df89b0d4e39e5d6f95784f583d425e5a6fd9222d7301d4c49aef12_prof);

        
        $__internal_29233f607c20bd6ab40a504f0c6c075365f3bccbc07f69a4b4941b980e5d27ce->leave($__internal_29233f607c20bd6ab40a504f0c6c075365f3bccbc07f69a4b4941b980e5d27ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
