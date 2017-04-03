<?php

/* DashDventeBundle:Liste:ListeDossierVente.html.twig */
class __TwigTemplate_b07735cd360a347742d486db8b89fe94f1669ad57e99bcee4b13f9490e9e55a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Liste:ListeDossierVente.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DashCoreBundle::coreLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df225f7a903252aacc625a56002b4241e406d0fcda853bd3f3ea21f3d7f97cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df225f7a903252aacc625a56002b4241e406d0fcda853bd3f3ea21f3d7f97cef->enter($__internal_df225f7a903252aacc625a56002b4241e406d0fcda853bd3f3ea21f3d7f97cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Liste:ListeDossierVente.html.twig"));

        $__internal_fde7167503dbed73503075a419b4c790033d72bf3c8cbb98f75eb6298e1341c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde7167503dbed73503075a419b4c790033d72bf3c8cbb98f75eb6298e1341c6->enter($__internal_fde7167503dbed73503075a419b4c790033d72bf3c8cbb98f75eb6298e1341c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Liste:ListeDossierVente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df225f7a903252aacc625a56002b4241e406d0fcda853bd3f3ea21f3d7f97cef->leave($__internal_df225f7a903252aacc625a56002b4241e406d0fcda853bd3f3ea21f3d7f97cef_prof);

        
        $__internal_fde7167503dbed73503075a419b4c790033d72bf3c8cbb98f75eb6298e1341c6->leave($__internal_fde7167503dbed73503075a419b4c790033d72bf3c8cbb98f75eb6298e1341c6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8204f652923c7a81431e18da3aeca3806ae42b9ce6f6ddc02b0088d752815909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8204f652923c7a81431e18da3aeca3806ae42b9ce6f6ddc02b0088d752815909->enter($__internal_8204f652923c7a81431e18da3aeca3806ae42b9ce6f6ddc02b0088d752815909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f6dc8860f39ddeb14aebbdee8ef4d4733a6ea3c02e94fd32b7d0f640b2efc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6dc8860f39ddeb14aebbdee8ef4d4733a6ea3c02e94fd32b7d0f640b2efc3a->enter($__internal_4f6dc8860f39ddeb14aebbdee8ef4d4733a6ea3c02e94fd32b7d0f640b2efc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row white\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-3\"><img class=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Dvente.png"), "html", null, true);
        echo "\"></div>
        <div class=\"col-xs-12 tampon\"></div>
        ";
        // line 7
        if ((twig_length_filter($this->env, ($context["Dventes"] ?? $this->getContext($context, "Dventes"))) == 0)) {
            // line 8
            echo "            <div class=\"row center white\">Tu n'as encore rien vendu</div>
        ";
        } else {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Dventes"] ?? $this->getContext($context, "Dventes")));
            foreach ($context['_seq'] as $context["_key"] => $context["dVente"]) {
                // line 11
                echo "                <div class=\"row\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_modif", array("id" => $this->getAttribute($context["dVente"], "id", array()))), "html", null, true);
                echo "\">
                        <div class=\"col-xs-4 center\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dVente"], "client", array()), "nom", array()), "html", null, true);
                echo "</div>
                        <div class=\"col-xs-offset-2 col-xs-6\">Livraison : ";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dVente"], "dateliv", array()), "m/y"), "html", null, true);
                echo "</div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dVente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        // line 19
        echo "    </div>
";
        
        $__internal_4f6dc8860f39ddeb14aebbdee8ef4d4733a6ea3c02e94fd32b7d0f640b2efc3a->leave($__internal_4f6dc8860f39ddeb14aebbdee8ef4d4733a6ea3c02e94fd32b7d0f640b2efc3a_prof);

        
        $__internal_8204f652923c7a81431e18da3aeca3806ae42b9ce6f6ddc02b0088d752815909->leave($__internal_8204f652923c7a81431e18da3aeca3806ae42b9ce6f6ddc02b0088d752815909_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a406fe8ba93827f096a5fe0f9b035ee25b4ad1bb79867a4796494cd85b8eb33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a406fe8ba93827f096a5fe0f9b035ee25b4ad1bb79867a4796494cd85b8eb33b->enter($__internal_a406fe8ba93827f096a5fe0f9b035ee25b4ad1bb79867a4796494cd85b8eb33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45e95a39e0c5f76cf898259adbf14fe47940944959ec3aa55d222bb6a6d64e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e95a39e0c5f76cf898259adbf14fe47940944959ec3aa55d222bb6a6d64e31->enter($__internal_45e95a39e0c5f76cf898259adbf14fe47940944959ec3aa55d222bb6a6d64e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "     <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_listeRcheque");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Rcheque.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Ppierre.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_45e95a39e0c5f76cf898259adbf14fe47940944959ec3aa55d222bb6a6d64e31->leave($__internal_45e95a39e0c5f76cf898259adbf14fe47940944959ec3aa55d222bb6a6d64e31_prof);

        
        $__internal_a406fe8ba93827f096a5fe0f9b035ee25b4ad1bb79867a4796494cd85b8eb33b->leave($__internal_a406fe8ba93827f096a5fe0f9b035ee25b4ad1bb79867a4796494cd85b8eb33b_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Liste:ListeDossierVente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  139 => 33,  132 => 29,  128 => 28,  121 => 24,  117 => 23,  114 => 22,  105 => 21,  94 => 19,  91 => 18,  81 => 14,  77 => 13,  73 => 12,  70 => 11,  65 => 10,  61 => 8,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::coreLayout.html.twig'%}
{% block body %}
    <div class=\"row white\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-3\"><img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Dvente.png') }}\"></div>
        <div class=\"col-xs-12 tampon\"></div>
        {% if Dventes|length == 0 %}
            <div class=\"row center white\">Tu n'as encore rien vendu</div>
        {% else %}
            {% for dVente in Dventes %}
                <div class=\"row\">
                    <a href=\"{{ path('dash_dvente_modif', {'id': dVente.id}) }}\">
                        <div class=\"col-xs-4 center\">{{ dVente.client.nom }}</div>
                        <div class=\"col-xs-offset-2 col-xs-6\">Livraison : {{ dVente.dateliv|date('m/y')}}</div>
                    </a>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
{% block menu %}
     <div class=\"col-xs-4 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"{{ path('dash_dvente_listeRcheque') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Rcheque.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Ppierre.png')}} \">
        </a>
    </div>
{% endblock %}", "DashDventeBundle:Liste:ListeDossierVente.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Liste/ListeDossierVente.html.twig");
    }
}
