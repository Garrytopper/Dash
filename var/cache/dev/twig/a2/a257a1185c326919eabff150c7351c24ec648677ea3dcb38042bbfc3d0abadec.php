<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_a4fa6c481d451d69a4cc9fc611447d9a03d7ab60bbca702b3a8078e557939fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fa6c481d451d69a4cc9fc611447d9a03d7ab60bbca702b3a8078e557939fd1->enter($__internal_a4fa6c481d451d69a4cc9fc611447d9a03d7ab60bbca702b3a8078e557939fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1f35ba142961173536955af62b670002029b5efdac60102fc6283427802f70ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f35ba142961173536955af62b670002029b5efdac60102fc6283427802f70ee->enter($__internal_1f35ba142961173536955af62b670002029b5efdac60102fc6283427802f70ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a4fa6c481d451d69a4cc9fc611447d9a03d7ab60bbca702b3a8078e557939fd1->leave($__internal_a4fa6c481d451d69a4cc9fc611447d9a03d7ab60bbca702b3a8078e557939fd1_prof);

        
        $__internal_1f35ba142961173536955af62b670002029b5efdac60102fc6283427802f70ee->leave($__internal_1f35ba142961173536955af62b670002029b5efdac60102fc6283427802f70ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
