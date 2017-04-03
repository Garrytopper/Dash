<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_aa83e7e981072ccff926ed1457e105efc995ee29f14ee444c4280f49c7c19df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa83e7e981072ccff926ed1457e105efc995ee29f14ee444c4280f49c7c19df6->enter($__internal_aa83e7e981072ccff926ed1457e105efc995ee29f14ee444c4280f49c7c19df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_897cff6a0cd796a66f699e58a480c85ae44acaa755915e80d41c2c1cc7f268c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897cff6a0cd796a66f699e58a480c85ae44acaa755915e80d41c2c1cc7f268c0->enter($__internal_897cff6a0cd796a66f699e58a480c85ae44acaa755915e80d41c2c1cc7f268c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_aa83e7e981072ccff926ed1457e105efc995ee29f14ee444c4280f49c7c19df6->leave($__internal_aa83e7e981072ccff926ed1457e105efc995ee29f14ee444c4280f49c7c19df6_prof);

        
        $__internal_897cff6a0cd796a66f699e58a480c85ae44acaa755915e80d41c2c1cc7f268c0->leave($__internal_897cff6a0cd796a66f699e58a480c85ae44acaa755915e80d41c2c1cc7f268c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
