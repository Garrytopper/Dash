<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_75d6d7f099dd7d9ccc02af6d6ed12ad2adbf39c4745a57f27b7f318ce8c719cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d6d7f099dd7d9ccc02af6d6ed12ad2adbf39c4745a57f27b7f318ce8c719cc->enter($__internal_75d6d7f099dd7d9ccc02af6d6ed12ad2adbf39c4745a57f27b7f318ce8c719cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_18e78e2929ce1ff4778ddaead11670b52c4fc64e2ab4e4997ed37a9ba29f0964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e78e2929ce1ff4778ddaead11670b52c4fc64e2ab4e4997ed37a9ba29f0964->enter($__internal_18e78e2929ce1ff4778ddaead11670b52c4fc64e2ab4e4997ed37a9ba29f0964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_75d6d7f099dd7d9ccc02af6d6ed12ad2adbf39c4745a57f27b7f318ce8c719cc->leave($__internal_75d6d7f099dd7d9ccc02af6d6ed12ad2adbf39c4745a57f27b7f318ce8c719cc_prof);

        
        $__internal_18e78e2929ce1ff4778ddaead11670b52c4fc64e2ab4e4997ed37a9ba29f0964->leave($__internal_18e78e2929ce1ff4778ddaead11670b52c4fc64e2ab4e4997ed37a9ba29f0964_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
