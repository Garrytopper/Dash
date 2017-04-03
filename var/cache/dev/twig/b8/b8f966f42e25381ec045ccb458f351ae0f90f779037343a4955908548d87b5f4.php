<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fd8f83552ee3e9fee75b0a5fbbaa947f1769a2d6daec2bd7bc8f8f3c232064e9 extends Twig_Template
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
        $__internal_b26eb9e563af1faa6a2593ed565316658654ac3e918e4d616f002dcb69b0b6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26eb9e563af1faa6a2593ed565316658654ac3e918e4d616f002dcb69b0b6ec->enter($__internal_b26eb9e563af1faa6a2593ed565316658654ac3e918e4d616f002dcb69b0b6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_824ed87c2b498e0b194082480c5ea6eb19903c9bd4d21e14e11f08a61e6cc23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824ed87c2b498e0b194082480c5ea6eb19903c9bd4d21e14e11f08a61e6cc23e->enter($__internal_824ed87c2b498e0b194082480c5ea6eb19903c9bd4d21e14e11f08a61e6cc23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b26eb9e563af1faa6a2593ed565316658654ac3e918e4d616f002dcb69b0b6ec->leave($__internal_b26eb9e563af1faa6a2593ed565316658654ac3e918e4d616f002dcb69b0b6ec_prof);

        
        $__internal_824ed87c2b498e0b194082480c5ea6eb19903c9bd4d21e14e11f08a61e6cc23e->leave($__internal_824ed87c2b498e0b194082480c5ea6eb19903c9bd4d21e14e11f08a61e6cc23e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
