<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_c811ef4bacff10681d4a5b1a67c6b18e648b8b0ba0aeb9908ac1cf9337a9e181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c811ef4bacff10681d4a5b1a67c6b18e648b8b0ba0aeb9908ac1cf9337a9e181->enter($__internal_c811ef4bacff10681d4a5b1a67c6b18e648b8b0ba0aeb9908ac1cf9337a9e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_710e616b9b2d1844d59830d8bb4be195c0977ae322beb63dfb10cb4832425a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710e616b9b2d1844d59830d8bb4be195c0977ae322beb63dfb10cb4832425a9e->enter($__internal_710e616b9b2d1844d59830d8bb4be195c0977ae322beb63dfb10cb4832425a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c811ef4bacff10681d4a5b1a67c6b18e648b8b0ba0aeb9908ac1cf9337a9e181->leave($__internal_c811ef4bacff10681d4a5b1a67c6b18e648b8b0ba0aeb9908ac1cf9337a9e181_prof);

        
        $__internal_710e616b9b2d1844d59830d8bb4be195c0977ae322beb63dfb10cb4832425a9e->leave($__internal_710e616b9b2d1844d59830d8bb4be195c0977ae322beb63dfb10cb4832425a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}