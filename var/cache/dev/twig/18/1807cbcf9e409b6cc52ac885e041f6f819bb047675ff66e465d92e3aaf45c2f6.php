<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b3fe1a6e6fe5913a776b008bbc67dbb2875dada4b4e9ca7717a34e3500cdd099 extends Twig_Template
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
        $__internal_b7e99bb895d1a3e3d1bc4e8916a3d276800b3bd2f20aea1f9d141d2dac16e2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e99bb895d1a3e3d1bc4e8916a3d276800b3bd2f20aea1f9d141d2dac16e2f7->enter($__internal_b7e99bb895d1a3e3d1bc4e8916a3d276800b3bd2f20aea1f9d141d2dac16e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5735b21436ef9f006bc1901d8deb6ea98c7937241512813b1d8d4fa178c39b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5735b21436ef9f006bc1901d8deb6ea98c7937241512813b1d8d4fa178c39b96->enter($__internal_5735b21436ef9f006bc1901d8deb6ea98c7937241512813b1d8d4fa178c39b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b7e99bb895d1a3e3d1bc4e8916a3d276800b3bd2f20aea1f9d141d2dac16e2f7->leave($__internal_b7e99bb895d1a3e3d1bc4e8916a3d276800b3bd2f20aea1f9d141d2dac16e2f7_prof);

        
        $__internal_5735b21436ef9f006bc1901d8deb6ea98c7937241512813b1d8d4fa178c39b96->leave($__internal_5735b21436ef9f006bc1901d8deb6ea98c7937241512813b1d8d4fa178c39b96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
