<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_fb3c0aa18e270259fddf8dde977977ae161567f42f3c43a45bec7b1214f5b923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3c0aa18e270259fddf8dde977977ae161567f42f3c43a45bec7b1214f5b923->enter($__internal_fb3c0aa18e270259fddf8dde977977ae161567f42f3c43a45bec7b1214f5b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b624fd4440b17f0ce7f00371dd797aa88c6e5c4583aa44d7acd7b5c801833af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b624fd4440b17f0ce7f00371dd797aa88c6e5c4583aa44d7acd7b5c801833af3->enter($__internal_b624fd4440b17f0ce7f00371dd797aa88c6e5c4583aa44d7acd7b5c801833af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fb3c0aa18e270259fddf8dde977977ae161567f42f3c43a45bec7b1214f5b923->leave($__internal_fb3c0aa18e270259fddf8dde977977ae161567f42f3c43a45bec7b1214f5b923_prof);

        
        $__internal_b624fd4440b17f0ce7f00371dd797aa88c6e5c4583aa44d7acd7b5c801833af3->leave($__internal_b624fd4440b17f0ce7f00371dd797aa88c6e5c4583aa44d7acd7b5c801833af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
