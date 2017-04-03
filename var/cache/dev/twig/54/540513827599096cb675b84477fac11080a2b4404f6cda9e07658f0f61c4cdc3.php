<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_948d00d763efacfa48841e3e9b46fca2c3603ff7a02fa3d1c3314760ecadbac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948d00d763efacfa48841e3e9b46fca2c3603ff7a02fa3d1c3314760ecadbac9->enter($__internal_948d00d763efacfa48841e3e9b46fca2c3603ff7a02fa3d1c3314760ecadbac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0e1e77a682f4ddd76c62497a02f47232318754ad553e4f2ce9efd427e03cb85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1e77a682f4ddd76c62497a02f47232318754ad553e4f2ce9efd427e03cb85d->enter($__internal_0e1e77a682f4ddd76c62497a02f47232318754ad553e4f2ce9efd427e03cb85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_948d00d763efacfa48841e3e9b46fca2c3603ff7a02fa3d1c3314760ecadbac9->leave($__internal_948d00d763efacfa48841e3e9b46fca2c3603ff7a02fa3d1c3314760ecadbac9_prof);

        
        $__internal_0e1e77a682f4ddd76c62497a02f47232318754ad553e4f2ce9efd427e03cb85d->leave($__internal_0e1e77a682f4ddd76c62497a02f47232318754ad553e4f2ce9efd427e03cb85d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
