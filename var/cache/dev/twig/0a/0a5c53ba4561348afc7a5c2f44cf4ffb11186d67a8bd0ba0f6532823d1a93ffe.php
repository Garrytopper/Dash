<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_261fc79e79625b3a654b611a7a9ac7da2ce0ccd44df7eb8ce6bde701375c5d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261fc79e79625b3a654b611a7a9ac7da2ce0ccd44df7eb8ce6bde701375c5d53->enter($__internal_261fc79e79625b3a654b611a7a9ac7da2ce0ccd44df7eb8ce6bde701375c5d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_84ba94b3def3f543b5893671df0a88a6f4b5fecfbc6c2f3e0fa00df9fcb8046c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ba94b3def3f543b5893671df0a88a6f4b5fecfbc6c2f3e0fa00df9fcb8046c->enter($__internal_84ba94b3def3f543b5893671df0a88a6f4b5fecfbc6c2f3e0fa00df9fcb8046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_261fc79e79625b3a654b611a7a9ac7da2ce0ccd44df7eb8ce6bde701375c5d53->leave($__internal_261fc79e79625b3a654b611a7a9ac7da2ce0ccd44df7eb8ce6bde701375c5d53_prof);

        
        $__internal_84ba94b3def3f543b5893671df0a88a6f4b5fecfbc6c2f3e0fa00df9fcb8046c->leave($__internal_84ba94b3def3f543b5893671df0a88a6f4b5fecfbc6c2f3e0fa00df9fcb8046c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
