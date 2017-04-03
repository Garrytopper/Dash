<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_35a565ddd37570f96a186712de667dc0998df0831940022a14d624e226bb44d4 extends Twig_Template
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
        $__internal_e7ee40c1e8165cae7acedafbb36dd2d71c3d4564d685ab2e50336184b4dc0ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ee40c1e8165cae7acedafbb36dd2d71c3d4564d685ab2e50336184b4dc0ad3->enter($__internal_e7ee40c1e8165cae7acedafbb36dd2d71c3d4564d685ab2e50336184b4dc0ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b034714251a3da1e252dd382ac9ca6d17eb434fd22edf655b24665e7513c3efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b034714251a3da1e252dd382ac9ca6d17eb434fd22edf655b24665e7513c3efe->enter($__internal_b034714251a3da1e252dd382ac9ca6d17eb434fd22edf655b24665e7513c3efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e7ee40c1e8165cae7acedafbb36dd2d71c3d4564d685ab2e50336184b4dc0ad3->leave($__internal_e7ee40c1e8165cae7acedafbb36dd2d71c3d4564d685ab2e50336184b4dc0ad3_prof);

        
        $__internal_b034714251a3da1e252dd382ac9ca6d17eb434fd22edf655b24665e7513c3efe->leave($__internal_b034714251a3da1e252dd382ac9ca6d17eb434fd22edf655b24665e7513c3efe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
