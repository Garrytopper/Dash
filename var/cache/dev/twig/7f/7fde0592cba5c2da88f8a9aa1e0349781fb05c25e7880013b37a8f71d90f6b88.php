<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5397e3e03ee38fe9e9bc698b509b764ac9dfd295a60998a669bbf14384deba53 extends Twig_Template
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
        $__internal_b1caa83fac77f77428051827436b3bced9c3f1badda582095bd0abb608ecff31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1caa83fac77f77428051827436b3bced9c3f1badda582095bd0abb608ecff31->enter($__internal_b1caa83fac77f77428051827436b3bced9c3f1badda582095bd0abb608ecff31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_cabc9aa85be385450f4db1cedb6378ae3c6044e7d6abb43541732aa7af706903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabc9aa85be385450f4db1cedb6378ae3c6044e7d6abb43541732aa7af706903->enter($__internal_cabc9aa85be385450f4db1cedb6378ae3c6044e7d6abb43541732aa7af706903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_b1caa83fac77f77428051827436b3bced9c3f1badda582095bd0abb608ecff31->leave($__internal_b1caa83fac77f77428051827436b3bced9c3f1badda582095bd0abb608ecff31_prof);

        
        $__internal_cabc9aa85be385450f4db1cedb6378ae3c6044e7d6abb43541732aa7af706903->leave($__internal_cabc9aa85be385450f4db1cedb6378ae3c6044e7d6abb43541732aa7af706903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
