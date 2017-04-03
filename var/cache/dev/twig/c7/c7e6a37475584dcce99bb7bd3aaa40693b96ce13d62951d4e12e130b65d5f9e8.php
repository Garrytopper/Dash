<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4fb7cc18625e4a162a8e8b53b07c35b37a1eeda398e94458abbc14c92bada940 extends Twig_Template
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
        $__internal_7afd2bd9a0023ccfb539ee147ab5559c36e13cf711ca9c0b59bea33968751e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afd2bd9a0023ccfb539ee147ab5559c36e13cf711ca9c0b59bea33968751e2b->enter($__internal_7afd2bd9a0023ccfb539ee147ab5559c36e13cf711ca9c0b59bea33968751e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e82137cd049df2565f09b5af89adc76b6e7e147f17bb1f7844bd9a67ab4525d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82137cd049df2565f09b5af89adc76b6e7e147f17bb1f7844bd9a67ab4525d1->enter($__internal_e82137cd049df2565f09b5af89adc76b6e7e147f17bb1f7844bd9a67ab4525d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7afd2bd9a0023ccfb539ee147ab5559c36e13cf711ca9c0b59bea33968751e2b->leave($__internal_7afd2bd9a0023ccfb539ee147ab5559c36e13cf711ca9c0b59bea33968751e2b_prof);

        
        $__internal_e82137cd049df2565f09b5af89adc76b6e7e147f17bb1f7844bd9a67ab4525d1->leave($__internal_e82137cd049df2565f09b5af89adc76b6e7e147f17bb1f7844bd9a67ab4525d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
