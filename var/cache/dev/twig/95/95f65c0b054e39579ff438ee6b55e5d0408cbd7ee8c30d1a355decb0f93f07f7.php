<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c621eb95187c1501f9d56c8ff3d154326d4a85cd90f91ec42323e881e9e96e15 extends Twig_Template
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
        $__internal_4210b6e9a8ca7ea2fdb9df4a385c7a9f09478e16cb6341d714c1ea57af6d22ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4210b6e9a8ca7ea2fdb9df4a385c7a9f09478e16cb6341d714c1ea57af6d22ee->enter($__internal_4210b6e9a8ca7ea2fdb9df4a385c7a9f09478e16cb6341d714c1ea57af6d22ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b2dbdf9e69ee364cc72391f038f6ffbe675e16d9a3cfebcfa31c8a3273532db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dbdf9e69ee364cc72391f038f6ffbe675e16d9a3cfebcfa31c8a3273532db1->enter($__internal_b2dbdf9e69ee364cc72391f038f6ffbe675e16d9a3cfebcfa31c8a3273532db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4210b6e9a8ca7ea2fdb9df4a385c7a9f09478e16cb6341d714c1ea57af6d22ee->leave($__internal_4210b6e9a8ca7ea2fdb9df4a385c7a9f09478e16cb6341d714c1ea57af6d22ee_prof);

        
        $__internal_b2dbdf9e69ee364cc72391f038f6ffbe675e16d9a3cfebcfa31c8a3273532db1->leave($__internal_b2dbdf9e69ee364cc72391f038f6ffbe675e16d9a3cfebcfa31c8a3273532db1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
