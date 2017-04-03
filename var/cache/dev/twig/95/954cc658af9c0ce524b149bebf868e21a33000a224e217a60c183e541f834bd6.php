<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_1a6fee4db6199d7717832735e50f5126f6fd93eccfca4dfc620159c29e21fcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6fee4db6199d7717832735e50f5126f6fd93eccfca4dfc620159c29e21fcf6->enter($__internal_1a6fee4db6199d7717832735e50f5126f6fd93eccfca4dfc620159c29e21fcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_93a21384f5b30ff8e5d056ba2db1d9c02cfd8a137113deece4ace3651af3541a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a21384f5b30ff8e5d056ba2db1d9c02cfd8a137113deece4ace3651af3541a->enter($__internal_93a21384f5b30ff8e5d056ba2db1d9c02cfd8a137113deece4ace3651af3541a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1a6fee4db6199d7717832735e50f5126f6fd93eccfca4dfc620159c29e21fcf6->leave($__internal_1a6fee4db6199d7717832735e50f5126f6fd93eccfca4dfc620159c29e21fcf6_prof);

        
        $__internal_93a21384f5b30ff8e5d056ba2db1d9c02cfd8a137113deece4ace3651af3541a->leave($__internal_93a21384f5b30ff8e5d056ba2db1d9c02cfd8a137113deece4ace3651af3541a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
