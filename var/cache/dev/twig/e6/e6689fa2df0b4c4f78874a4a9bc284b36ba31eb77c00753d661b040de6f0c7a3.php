<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_4401a37f27088cad453a94b61acc2591e4d81c6b73fe35d2c9afe2ad0737ef04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4401a37f27088cad453a94b61acc2591e4d81c6b73fe35d2c9afe2ad0737ef04->enter($__internal_4401a37f27088cad453a94b61acc2591e4d81c6b73fe35d2c9afe2ad0737ef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f0565d75cd6e0614e0d9b49007eee3f8e5b6fa2e5a492b224bf489abaf4a1a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0565d75cd6e0614e0d9b49007eee3f8e5b6fa2e5a492b224bf489abaf4a1a48->enter($__internal_f0565d75cd6e0614e0d9b49007eee3f8e5b6fa2e5a492b224bf489abaf4a1a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4401a37f27088cad453a94b61acc2591e4d81c6b73fe35d2c9afe2ad0737ef04->leave($__internal_4401a37f27088cad453a94b61acc2591e4d81c6b73fe35d2c9afe2ad0737ef04_prof);

        
        $__internal_f0565d75cd6e0614e0d9b49007eee3f8e5b6fa2e5a492b224bf489abaf4a1a48->leave($__internal_f0565d75cd6e0614e0d9b49007eee3f8e5b6fa2e5a492b224bf489abaf4a1a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
