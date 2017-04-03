<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6d7250fac0fe09ae9d9dc48481a6fc3c2cdd5b65b08e4cc7595d600b905dcec extends Twig_Template
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
        $__internal_0d665f5a39063ff2f82a521ae3eab051bf020974a386922db00009d1889fec6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d665f5a39063ff2f82a521ae3eab051bf020974a386922db00009d1889fec6a->enter($__internal_0d665f5a39063ff2f82a521ae3eab051bf020974a386922db00009d1889fec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d633b8e484922955bef548892a53d2b7494cb5f5a9de16b91da99a1caa292877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d633b8e484922955bef548892a53d2b7494cb5f5a9de16b91da99a1caa292877->enter($__internal_d633b8e484922955bef548892a53d2b7494cb5f5a9de16b91da99a1caa292877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0d665f5a39063ff2f82a521ae3eab051bf020974a386922db00009d1889fec6a->leave($__internal_0d665f5a39063ff2f82a521ae3eab051bf020974a386922db00009d1889fec6a_prof);

        
        $__internal_d633b8e484922955bef548892a53d2b7494cb5f5a9de16b91da99a1caa292877->leave($__internal_d633b8e484922955bef548892a53d2b7494cb5f5a9de16b91da99a1caa292877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
