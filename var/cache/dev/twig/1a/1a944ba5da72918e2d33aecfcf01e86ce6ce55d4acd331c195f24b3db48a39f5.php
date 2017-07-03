<?php

/* DashSecurityBundle:Security:login.html.twig */
class __TwigTemplate_ee0bb3e23849ecc5431863b0347aa457321ddd5fe75583d7c612578e27a75661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::corelayout.html.twig", "DashSecurityBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DashCoreBundle::corelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fa0930515962e3c3eb13b56e355f06bc2187d8b725bd4491c8d0b2e279c4fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa0930515962e3c3eb13b56e355f06bc2187d8b725bd4491c8d0b2e279c4fb6->enter($__internal_7fa0930515962e3c3eb13b56e355f06bc2187d8b725bd4491c8d0b2e279c4fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashSecurityBundle:Security:login.html.twig"));

        $__internal_6165786526f9c7d8d2d88f9b2428bfeac7d770267485bf4c4b02f19f7cdc9157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6165786526f9c7d8d2d88f9b2428bfeac7d770267485bf4c4b02f19f7cdc9157->enter($__internal_6165786526f9c7d8d2d88f9b2428bfeac7d770267485bf4c4b02f19f7cdc9157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashSecurityBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa0930515962e3c3eb13b56e355f06bc2187d8b725bd4491c8d0b2e279c4fb6->leave($__internal_7fa0930515962e3c3eb13b56e355f06bc2187d8b725bd4491c8d0b2e279c4fb6_prof);

        
        $__internal_6165786526f9c7d8d2d88f9b2428bfeac7d770267485bf4c4b02f19f7cdc9157->leave($__internal_6165786526f9c7d8d2d88f9b2428bfeac7d770267485bf4c4b02f19f7cdc9157_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5278711b12bbb2e89461aa46dc6d254890953d31628f24e5f9daaf15eab06b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5278711b12bbb2e89461aa46dc6d254890953d31628f24e5f9daaf15eab06b04->enter($__internal_5278711b12bbb2e89461aa46dc6d254890953d31628f24e5f9daaf15eab06b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27e81914bf12074cc6fb5937b7deabe6a28bb3121d98564ad749dba28aad7fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e81914bf12074cc6fb5937b7deabe6a28bb3121d98564ad749dba28aad7fee->enter($__internal_27e81914bf12074cc6fb5937b7deabe6a28bb3121d98564ad749dba28aad7fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class=\"row center\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>
    <div class=\"tampon\"></div>
    <div class='tampon'></div>
     <div class=\"row\">
    <div class=\"col-xs-offset-8 col-xs-2 \">
         <input type=\"submit\" value=\"Connexion\" />
    </div> 
 </form>
</div>

";
        
        $__internal_27e81914bf12074cc6fb5937b7deabe6a28bb3121d98564ad749dba28aad7fee->leave($__internal_27e81914bf12074cc6fb5937b7deabe6a28bb3121d98564ad749dba28aad7fee_prof);

        
        $__internal_5278711b12bbb2e89461aa46dc6d254890953d31628f24e5f9daaf15eab06b04->leave($__internal_5278711b12bbb2e89461aa46dc6d254890953d31628f24e5f9daaf15eab06b04_prof);

    }

    public function getTemplateName()
    {
        return "DashSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  64 => 11,  61 => 9,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::corelayout.html.twig' %}

{% block body %}

  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

  {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
<form action=\"{{ path('login_check') }}\" method=\"post\">
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class='tampon'></div>
    <div class=\"row center\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>
    <div class=\"tampon\"></div>
    <div class='tampon'></div>
     <div class=\"row\">
    <div class=\"col-xs-offset-8 col-xs-2 \">
         <input type=\"submit\" value=\"Connexion\" />
    </div> 
 </form>
</div>

{% endblock %}", "DashSecurityBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/SecurityBundle/Resources/views/Security/login.html.twig");
    }
}
