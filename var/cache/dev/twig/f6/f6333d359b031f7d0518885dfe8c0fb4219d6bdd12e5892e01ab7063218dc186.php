<?php

/* DashPortefeuilleBundle:liste:general.html.twig */
class __TwigTemplate_b4cbb849fa08476116717240f4ca8bb687a3126cfe2c62b1a7518f6a96f38f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashPortefeuilleBundle:liste:general.html.twig", 1);
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
        $__internal_a95426f4e5e92e22cc91a8759510285835028b74de59eae43eb7bf46b6dcc1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95426f4e5e92e22cc91a8759510285835028b74de59eae43eb7bf46b6dcc1b6->enter($__internal_a95426f4e5e92e22cc91a8759510285835028b74de59eae43eb7bf46b6dcc1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:liste:general.html.twig"));

        $__internal_ee05825d934a60a8f03f5e8f8b9ec1ea62f5185f68504ddab1311f7ad0eeff32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee05825d934a60a8f03f5e8f8b9ec1ea62f5185f68504ddab1311f7ad0eeff32->enter($__internal_ee05825d934a60a8f03f5e8f8b9ec1ea62f5185f68504ddab1311f7ad0eeff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:liste:general.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a95426f4e5e92e22cc91a8759510285835028b74de59eae43eb7bf46b6dcc1b6->leave($__internal_a95426f4e5e92e22cc91a8759510285835028b74de59eae43eb7bf46b6dcc1b6_prof);

        
        $__internal_ee05825d934a60a8f03f5e8f8b9ec1ea62f5185f68504ddab1311f7ad0eeff32->leave($__internal_ee05825d934a60a8f03f5e8f8b9ec1ea62f5185f68504ddab1311f7ad0eeff32_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab64b5cc02dcaa6fb5c948906fb232a90df88401a865eb08ad923fde14cbe736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab64b5cc02dcaa6fb5c948906fb232a90df88401a865eb08ad923fde14cbe736->enter($__internal_ab64b5cc02dcaa6fb5c948906fb232a90df88401a865eb08ad923fde14cbe736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9a00b4b12a4ad32b3a886efde5f168a2bb8c95107e6e55843af4bd8dd07be9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a00b4b12a4ad32b3a886efde5f168a2bb8c95107e6e55843af4bd8dd07be9d->enter($__internal_e9a00b4b12a4ad32b3a886efde5f168a2bb8c95107e6e55843af4bd8dd07be9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Aujourd'hui</div>
    ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["todayCustomer"]) ? $context["todayCustomer"] : $this->getContext($context, "todayCustomer"))) > 0)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["todayCustomer"]) ? $context["todayCustomer"] : $this->getContext($context, "todayCustomer")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 8
                echo "            <div class=\"row ligne\">
                <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-xs-3\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateRdv", array()), "d/m"), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "budget", array()), "html", null, true);
                echo "</div>
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "        <div class=\"col-xs-12 \">
            <p>Pas de rendez-vous aujourd'hui</p>
        </div>
    ";
        }
        // line 22
        echo "</div>
<div class=\"col-xs-12 tampon\"></div>
";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["pastCustomers"]) ? $context["pastCustomers"] : $this->getContext($context, "pastCustomers"))) > 0)) {
            // line 25
            echo "    <div class=\"col-xs-12 white\">
        <div class=\"col-xz-12 center\">Client à redéfinir</div>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pastCustomers"]) ? $context["pastCustomers"] : $this->getContext($context, "pastCustomers")));
            foreach ($context['_seq'] as $context["_key"] => $context["pastCustomer"]) {
                // line 28
                echo "            <div class=\"row ligne\">
                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["pastCustomer"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-xs-3\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "etat", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "nom", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pastCustomer"], "dateRDV", array()), "d/m"), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "budget", array()), "html", null, true);
                echo "</div>
                </a>
            </div>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pastCustomer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </div>
";
        }
        // line 40
        echo "<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Ensemble des rendez-vous à venir</div>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCustomer"]) ? $context["allCustomer"] : $this->getContext($context, "allCustomer")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 44
            echo "        <div class=\"row ligne\">
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                <div class=\"col-xs-3\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</div>
                <div class=\"col-xs-3 overflow\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                <div class=\"col-xs-3\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateRdv", array()), "d/m"), "html", null, true);
            echo "</div>
                <div class=\"col-xs-3\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "budget", array()), "html", null, true);
            echo "</div>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>
";
        
        $__internal_e9a00b4b12a4ad32b3a886efde5f168a2bb8c95107e6e55843af4bd8dd07be9d->leave($__internal_e9a00b4b12a4ad32b3a886efde5f168a2bb8c95107e6e55843af4bd8dd07be9d_prof);

        
        $__internal_ab64b5cc02dcaa6fb5c948906fb232a90df88401a865eb08ad923fde14cbe736->leave($__internal_ab64b5cc02dcaa6fb5c948906fb232a90df88401a865eb08ad923fde14cbe736_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfd73040d279a86629b8cb38bbb61d5d1d1d63a100e201c0c7713209a31583b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd73040d279a86629b8cb38bbb61d5d1d1d63a100e201c0c7713209a31583b1->enter($__internal_dfd73040d279a86629b8cb38bbb61d5d1d1d63a100e201c0c7713209a31583b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a568d1d564eadf6b1975fefc68427e8ec9791fc424353edadb9c42ec8c5db396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a568d1d564eadf6b1975fefc68427e8ec9791fc424353edadb9c42ec8c5db396->enter($__internal_a568d1d564eadf6b1975fefc68427e8ec9791fc424353edadb9c42ec8c5db396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 57
        echo "    <div class=\"col-xs-12 center\">
        <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_a568d1d564eadf6b1975fefc68427e8ec9791fc424353edadb9c42ec8c5db396->leave($__internal_a568d1d564eadf6b1975fefc68427e8ec9791fc424353edadb9c42ec8c5db396_prof);

        
        $__internal_dfd73040d279a86629b8cb38bbb61d5d1d1d63a100e201c0c7713209a31583b1->leave($__internal_dfd73040d279a86629b8cb38bbb61d5d1d1d63a100e201c0c7713209a31583b1_prof);

    }

    public function getTemplateName()
    {
        return "DashPortefeuilleBundle:liste:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 59,  209 => 58,  206 => 57,  197 => 56,  186 => 53,  176 => 49,  172 => 48,  168 => 47,  164 => 46,  160 => 45,  157 => 44,  153 => 43,  148 => 40,  144 => 38,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  114 => 28,  110 => 27,  106 => 25,  104 => 24,  100 => 22,  94 => 18,  91 => 17,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  62 => 8,  57 => 7,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Aujourd'hui</div>
    {% if todayCustomer|length > 0 %}
        {% for client in todayCustomer %}
            <div class=\"row ligne\">
                <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-3\">{{ client.etat }}</div>
                    <div class=\"col-xs-3\">{{ client.nom }}</div>
                    <div class=\"col-xs-3\">{{ client.dateRdv|date('d/m') }}</div>
                    <div class=\"col-xs-3\">{{ client.budget }}</div>
                </a>
            </div>
        {% endfor %}
    {% else %}
        <div class=\"col-xs-12 \">
            <p>Pas de rendez-vous aujourd'hui</p>
        </div>
    {% endif %}
</div>
<div class=\"col-xs-12 tampon\"></div>
{% if pastCustomers|length > 0 %}
    <div class=\"col-xs-12 white\">
        <div class=\"col-xz-12 center\">Client à redéfinir</div>
        {% for pastCustomer in pastCustomers %}
            <div class=\"row ligne\">
                <a href=\"{{ path('dash_portefeuille_modif', {'id': pastCustomer.id}) }}\">
                    <div class=\"col-xs-3\">{{ pastCustomer.etat }}</div>
                    <div class=\"col-xs-3\">{{ pastCustomer.nom }}</div>
                    <div class=\"col-xs-3\">{{ pastCustomer.dateRDV|date('d/m') }}</div>
                    <div class=\"col-xs-3\">{{ pastCustomer.budget }}</div>
                </a>
            </div>
            
        {% endfor %}
    </div>
{% endif %}
<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Ensemble des rendez-vous à venir</div>
    {% for client in allCustomer %}
        <div class=\"row ligne\">
            <a href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                <div class=\"col-xs-3\">{{ client.etat }}</div>
                <div class=\"col-xs-3 overflow\">{{ client.nom }}</div>
                <div class=\"col-xs-3\">{{ client.dateRdv|date('d/m') }}</div>
                <div class=\"col-xs-3\">{{ client.budget }}</div>
            </a>
        </div>
    {% endfor %}
</div>
{% endblock %}

{% block menu %}
    <div class=\"col-xs-12 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
{% endblock %}", "DashPortefeuilleBundle:liste:general.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/PortefeuilleBundle/Resources/views/liste/general.html.twig");
    }
}
