<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_5e770cf3fe51db2f55cb66a29a4a6a91d8aa14d3ab225b90563158b32073a72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e770cf3fe51db2f55cb66a29a4a6a91d8aa14d3ab225b90563158b32073a72a->enter($__internal_5e770cf3fe51db2f55cb66a29a4a6a91d8aa14d3ab225b90563158b32073a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_712a028f63ac510dacc197da61ce27ceeb1821e7918bb7ed579e82cfc0d7b069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712a028f63ac510dacc197da61ce27ceeb1821e7918bb7ed579e82cfc0d7b069->enter($__internal_712a028f63ac510dacc197da61ce27ceeb1821e7918bb7ed579e82cfc0d7b069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5e770cf3fe51db2f55cb66a29a4a6a91d8aa14d3ab225b90563158b32073a72a->leave($__internal_5e770cf3fe51db2f55cb66a29a4a6a91d8aa14d3ab225b90563158b32073a72a_prof);

        
        $__internal_712a028f63ac510dacc197da61ce27ceeb1821e7918bb7ed579e82cfc0d7b069->leave($__internal_712a028f63ac510dacc197da61ce27ceeb1821e7918bb7ed579e82cfc0d7b069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
