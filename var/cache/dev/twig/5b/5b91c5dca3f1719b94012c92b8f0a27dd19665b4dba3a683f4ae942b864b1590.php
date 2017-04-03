<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_05d30580e655c640c41fed1b45706d27d86bb76758eae5b476773c433f8e5c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d30580e655c640c41fed1b45706d27d86bb76758eae5b476773c433f8e5c8c->enter($__internal_05d30580e655c640c41fed1b45706d27d86bb76758eae5b476773c433f8e5c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fef68b8537123d41f5c9f89e262e4d2a12a809128a9e2534a581a23984e0bc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef68b8537123d41f5c9f89e262e4d2a12a809128a9e2534a581a23984e0bc87->enter($__internal_fef68b8537123d41f5c9f89e262e4d2a12a809128a9e2534a581a23984e0bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_05d30580e655c640c41fed1b45706d27d86bb76758eae5b476773c433f8e5c8c->leave($__internal_05d30580e655c640c41fed1b45706d27d86bb76758eae5b476773c433f8e5c8c_prof);

        
        $__internal_fef68b8537123d41f5c9f89e262e4d2a12a809128a9e2534a581a23984e0bc87->leave($__internal_fef68b8537123d41f5c9f89e262e4d2a12a809128a9e2534a581a23984e0bc87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
