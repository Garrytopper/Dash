<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d7acb923d516016a4092f2dc37790c117427b6ccbc5e0eb38c71bbb9acbf415e extends Twig_Template
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
        $__internal_a429e908a4c44b7911c13a6c97bbc51fc46a2968e0c0c093a463fb4301cf2a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a429e908a4c44b7911c13a6c97bbc51fc46a2968e0c0c093a463fb4301cf2a55->enter($__internal_a429e908a4c44b7911c13a6c97bbc51fc46a2968e0c0c093a463fb4301cf2a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1ec988f29b3a31bcee43267d30ec3163127d189ea38f157bb3585a4dc572132f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec988f29b3a31bcee43267d30ec3163127d189ea38f157bb3585a4dc572132f->enter($__internal_1ec988f29b3a31bcee43267d30ec3163127d189ea38f157bb3585a4dc572132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a429e908a4c44b7911c13a6c97bbc51fc46a2968e0c0c093a463fb4301cf2a55->leave($__internal_a429e908a4c44b7911c13a6c97bbc51fc46a2968e0c0c093a463fb4301cf2a55_prof);

        
        $__internal_1ec988f29b3a31bcee43267d30ec3163127d189ea38f157bb3585a4dc572132f->leave($__internal_1ec988f29b3a31bcee43267d30ec3163127d189ea38f157bb3585a4dc572132f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
