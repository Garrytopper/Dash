<?php

/* ::base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc03d01b4a4806f230943aac0bccdacc53fd445d685797089b18dcedd9f9427a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc03d01b4a4806f230943aac0bccdacc53fd445d685797089b18dcedd9f9427a->enter($__internal_bc03d01b4a4806f230943aac0bccdacc53fd445d685797089b18dcedd9f9427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ebdf2eb7f23bb24aa3d87eeb910edab91c40739268c9dc0fff5455ac32915a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdf2eb7f23bb24aa3d87eeb910edab91c40739268c9dc0fff5455ac32915a8b->enter($__internal_ebdf2eb7f23bb24aa3d87eeb910edab91c40739268c9dc0fff5455ac32915a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bc03d01b4a4806f230943aac0bccdacc53fd445d685797089b18dcedd9f9427a->leave($__internal_bc03d01b4a4806f230943aac0bccdacc53fd445d685797089b18dcedd9f9427a_prof);

        
        $__internal_ebdf2eb7f23bb24aa3d87eeb910edab91c40739268c9dc0fff5455ac32915a8b->leave($__internal_ebdf2eb7f23bb24aa3d87eeb910edab91c40739268c9dc0fff5455ac32915a8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72ef7d25c612a28903a30b3a0f5d0501a58da7e454ca458f6e914f8256883ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ef7d25c612a28903a30b3a0f5d0501a58da7e454ca458f6e914f8256883ae2->enter($__internal_72ef7d25c612a28903a30b3a0f5d0501a58da7e454ca458f6e914f8256883ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_068a572e7ab3cf64cb0715620c402418d0d6e249545402d506b50b375c048595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068a572e7ab3cf64cb0715620c402418d0d6e249545402d506b50b375c048595->enter($__internal_068a572e7ab3cf64cb0715620c402418d0d6e249545402d506b50b375c048595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_068a572e7ab3cf64cb0715620c402418d0d6e249545402d506b50b375c048595->leave($__internal_068a572e7ab3cf64cb0715620c402418d0d6e249545402d506b50b375c048595_prof);

        
        $__internal_72ef7d25c612a28903a30b3a0f5d0501a58da7e454ca458f6e914f8256883ae2->leave($__internal_72ef7d25c612a28903a30b3a0f5d0501a58da7e454ca458f6e914f8256883ae2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_505aca62117ef618a73294cef1021e123cf64db1f3e0b057f6f51f7a5f491a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505aca62117ef618a73294cef1021e123cf64db1f3e0b057f6f51f7a5f491a5e->enter($__internal_505aca62117ef618a73294cef1021e123cf64db1f3e0b057f6f51f7a5f491a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc79d7969604de7ab32f27fd5756d14ab1e621192c5eb651c0664644c10bb828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc79d7969604de7ab32f27fd5756d14ab1e621192c5eb651c0664644c10bb828->enter($__internal_fc79d7969604de7ab32f27fd5756d14ab1e621192c5eb651c0664644c10bb828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fc79d7969604de7ab32f27fd5756d14ab1e621192c5eb651c0664644c10bb828->leave($__internal_fc79d7969604de7ab32f27fd5756d14ab1e621192c5eb651c0664644c10bb828_prof);

        
        $__internal_505aca62117ef618a73294cef1021e123cf64db1f3e0b057f6f51f7a5f491a5e->leave($__internal_505aca62117ef618a73294cef1021e123cf64db1f3e0b057f6f51f7a5f491a5e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1db3d182ed4bb2335d3516b1746e1160db5f264fd4924c0a15b8d618ee1fb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1db3d182ed4bb2335d3516b1746e1160db5f264fd4924c0a15b8d618ee1fb7f->enter($__internal_a1db3d182ed4bb2335d3516b1746e1160db5f264fd4924c0a15b8d618ee1fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c05fb0e3077be446a55f37bb61af1bd7f3bbb6f7f67e4f234891aa438c3cefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c05fb0e3077be446a55f37bb61af1bd7f3bbb6f7f67e4f234891aa438c3cefa->enter($__internal_7c05fb0e3077be446a55f37bb61af1bd7f3bbb6f7f67e4f234891aa438c3cefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c05fb0e3077be446a55f37bb61af1bd7f3bbb6f7f67e4f234891aa438c3cefa->leave($__internal_7c05fb0e3077be446a55f37bb61af1bd7f3bbb6f7f67e4f234891aa438c3cefa_prof);

        
        $__internal_a1db3d182ed4bb2335d3516b1746e1160db5f264fd4924c0a15b8d618ee1fb7f->leave($__internal_a1db3d182ed4bb2335d3516b1746e1160db5f264fd4924c0a15b8d618ee1fb7f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9614dd073f7096a0b4b717afa23618ce7006107e52cbf3e8741565de9a9df0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9614dd073f7096a0b4b717afa23618ce7006107e52cbf3e8741565de9a9df0b6->enter($__internal_9614dd073f7096a0b4b717afa23618ce7006107e52cbf3e8741565de9a9df0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_949d1611b77fbedc12fa1d245b1f56b4c56c4a8c26f9294fe832cb98af96081f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949d1611b77fbedc12fa1d245b1f56b4c56c4a8c26f9294fe832cb98af96081f->enter($__internal_949d1611b77fbedc12fa1d245b1f56b4c56c4a8c26f9294fe832cb98af96081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_949d1611b77fbedc12fa1d245b1f56b4c56c4a8c26f9294fe832cb98af96081f->leave($__internal_949d1611b77fbedc12fa1d245b1f56b4c56c4a8c26f9294fe832cb98af96081f_prof);

        
        $__internal_9614dd073f7096a0b4b717afa23618ce7006107e52cbf3e8741565de9a9df0b6->leave($__internal_9614dd073f7096a0b4b717afa23618ce7006107e52cbf3e8741565de9a9df0b6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/Dash/app/Resources/views/base.html.twig");
    }
}
