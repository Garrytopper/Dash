<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_99060df9734e425a59336c32e617c60c213109a321be1c6a45382f59ec3a50da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99060df9734e425a59336c32e617c60c213109a321be1c6a45382f59ec3a50da->enter($__internal_99060df9734e425a59336c32e617c60c213109a321be1c6a45382f59ec3a50da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_002576808bd642fdf96d1e2f9dcd9abbd3edcf5b9b0cdc53d5549aac814c4db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002576808bd642fdf96d1e2f9dcd9abbd3edcf5b9b0cdc53d5549aac814c4db0->enter($__internal_002576808bd642fdf96d1e2f9dcd9abbd3edcf5b9b0cdc53d5549aac814c4db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_99060df9734e425a59336c32e617c60c213109a321be1c6a45382f59ec3a50da->leave($__internal_99060df9734e425a59336c32e617c60c213109a321be1c6a45382f59ec3a50da_prof);

        
        $__internal_002576808bd642fdf96d1e2f9dcd9abbd3edcf5b9b0cdc53d5549aac814c4db0->leave($__internal_002576808bd642fdf96d1e2f9dcd9abbd3edcf5b9b0cdc53d5549aac814c4db0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
