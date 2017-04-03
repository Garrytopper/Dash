<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
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
        $__internal_572d2f33d2935f3bf94510a3f3d1cdae5fa6c688cd25360def19b9f749604ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572d2f33d2935f3bf94510a3f3d1cdae5fa6c688cd25360def19b9f749604ff9->enter($__internal_572d2f33d2935f3bf94510a3f3d1cdae5fa6c688cd25360def19b9f749604ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_259a6d522ab8cc19d7b6611fcddd8208d17b60025bd295bd2af2cf701fefe42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259a6d522ab8cc19d7b6611fcddd8208d17b60025bd295bd2af2cf701fefe42c->enter($__internal_259a6d522ab8cc19d7b6611fcddd8208d17b60025bd295bd2af2cf701fefe42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_572d2f33d2935f3bf94510a3f3d1cdae5fa6c688cd25360def19b9f749604ff9->leave($__internal_572d2f33d2935f3bf94510a3f3d1cdae5fa6c688cd25360def19b9f749604ff9_prof);

        
        $__internal_259a6d522ab8cc19d7b6611fcddd8208d17b60025bd295bd2af2cf701fefe42c->leave($__internal_259a6d522ab8cc19d7b6611fcddd8208d17b60025bd295bd2af2cf701fefe42c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
