<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_62bf95cf26c72f011fba9ff48f98dc0df2873388aca76cf82880893254bf3527 extends Twig_Template
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
        $__internal_b469ece619f49872feded2063c0a6ffd96f1f551f8bd0ec02c6ccadbaee596b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b469ece619f49872feded2063c0a6ffd96f1f551f8bd0ec02c6ccadbaee596b3->enter($__internal_b469ece619f49872feded2063c0a6ffd96f1f551f8bd0ec02c6ccadbaee596b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d32087980042dccf4beb0c21bde33f0d8486df674a716bfaa41c417623e668e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32087980042dccf4beb0c21bde33f0d8486df674a716bfaa41c417623e668e7->enter($__internal_d32087980042dccf4beb0c21bde33f0d8486df674a716bfaa41c417623e668e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_b469ece619f49872feded2063c0a6ffd96f1f551f8bd0ec02c6ccadbaee596b3->leave($__internal_b469ece619f49872feded2063c0a6ffd96f1f551f8bd0ec02c6ccadbaee596b3_prof);

        
        $__internal_d32087980042dccf4beb0c21bde33f0d8486df674a716bfaa41c417623e668e7->leave($__internal_d32087980042dccf4beb0c21bde33f0d8486df674a716bfaa41c417623e668e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
