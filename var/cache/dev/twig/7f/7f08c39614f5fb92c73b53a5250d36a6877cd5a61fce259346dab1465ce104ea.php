<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5e574a10f155a288ffab61ed7cf443a299938de2c35bbcbc0e6b142780a815a4 extends Twig_Template
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
        $__internal_7ec6a1cf5f09f5e583cbb9cbbc7489e896ee0be3757b17429d971f9b1dc4465b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec6a1cf5f09f5e583cbb9cbbc7489e896ee0be3757b17429d971f9b1dc4465b->enter($__internal_7ec6a1cf5f09f5e583cbb9cbbc7489e896ee0be3757b17429d971f9b1dc4465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e080030ff7d2640fa412b1be26a454c6798347ccb58dfb004adf7c3545653385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e080030ff7d2640fa412b1be26a454c6798347ccb58dfb004adf7c3545653385->enter($__internal_e080030ff7d2640fa412b1be26a454c6798347ccb58dfb004adf7c3545653385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7ec6a1cf5f09f5e583cbb9cbbc7489e896ee0be3757b17429d971f9b1dc4465b->leave($__internal_7ec6a1cf5f09f5e583cbb9cbbc7489e896ee0be3757b17429d971f9b1dc4465b_prof);

        
        $__internal_e080030ff7d2640fa412b1be26a454c6798347ccb58dfb004adf7c3545653385->leave($__internal_e080030ff7d2640fa412b1be26a454c6798347ccb58dfb004adf7c3545653385_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
