<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_6ddf9abb9da91b524c6cbdeba1aecff44ef64f8adf1f7e37b449a060e0354a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddf9abb9da91b524c6cbdeba1aecff44ef64f8adf1f7e37b449a060e0354a03->enter($__internal_6ddf9abb9da91b524c6cbdeba1aecff44ef64f8adf1f7e37b449a060e0354a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_005baa8beb7d0790c676bca770635dff23f41b1f267f0e38939067b4337f83be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005baa8beb7d0790c676bca770635dff23f41b1f267f0e38939067b4337f83be->enter($__internal_005baa8beb7d0790c676bca770635dff23f41b1f267f0e38939067b4337f83be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6ddf9abb9da91b524c6cbdeba1aecff44ef64f8adf1f7e37b449a060e0354a03->leave($__internal_6ddf9abb9da91b524c6cbdeba1aecff44ef64f8adf1f7e37b449a060e0354a03_prof);

        
        $__internal_005baa8beb7d0790c676bca770635dff23f41b1f267f0e38939067b4337f83be->leave($__internal_005baa8beb7d0790c676bca770635dff23f41b1f267f0e38939067b4337f83be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
