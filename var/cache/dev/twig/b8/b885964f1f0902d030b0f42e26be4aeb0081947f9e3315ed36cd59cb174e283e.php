<?php

/* DashPortefeuilleBundle:liste:general.html.twig */
class __TwigTemplate_934dffe3dcce5269de36ecef0677df902e54addd0ca748630ca3e8466a9dea55 extends Twig_Template
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
        $__internal_4bde3d8afca36b83adc3a2f409e0cfc5db807b3827f4eb1afbec96147a929de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bde3d8afca36b83adc3a2f409e0cfc5db807b3827f4eb1afbec96147a929de4->enter($__internal_4bde3d8afca36b83adc3a2f409e0cfc5db807b3827f4eb1afbec96147a929de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:liste:general.html.twig"));

        $__internal_affefa636b0b73e0c9252150fe9bad7d90fc4d879c000bce8fa8f92c72915d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affefa636b0b73e0c9252150fe9bad7d90fc4d879c000bce8fa8f92c72915d92->enter($__internal_affefa636b0b73e0c9252150fe9bad7d90fc4d879c000bce8fa8f92c72915d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashPortefeuilleBundle:liste:general.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bde3d8afca36b83adc3a2f409e0cfc5db807b3827f4eb1afbec96147a929de4->leave($__internal_4bde3d8afca36b83adc3a2f409e0cfc5db807b3827f4eb1afbec96147a929de4_prof);

        
        $__internal_affefa636b0b73e0c9252150fe9bad7d90fc4d879c000bce8fa8f92c72915d92->leave($__internal_affefa636b0b73e0c9252150fe9bad7d90fc4d879c000bce8fa8f92c72915d92_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d39d019eb99fbb73148851ee906be97e4b813c8cc3e67c5a1be685539d16be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d39d019eb99fbb73148851ee906be97e4b813c8cc3e67c5a1be685539d16be->enter($__internal_61d39d019eb99fbb73148851ee906be97e4b813c8cc3e67c5a1be685539d16be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c17959bb3d0c6fd767c449a7f166ff6592f1e9496d0811655ac4efd44950d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c17959bb3d0c6fd767c449a7f166ff6592f1e9496d0811655ac4efd44950d74->enter($__internal_2c17959bb3d0c6fd767c449a7f166ff6592f1e9496d0811655ac4efd44950d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Aujourd'hui</div>
    ";
        // line 6
        if ((twig_length_filter($this->env, ($context["todayCustomer"] ?? $this->getContext($context, "todayCustomer"))) > 0)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["todayCustomer"] ?? $this->getContext($context, "todayCustomer")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 8
                echo "            <div class=\"row ligne\">
                <a class=\"  ";
                // line 9
                if (($this->getAttribute($context["client"], "etat", array()) == "Retour")) {
                    echo " retour ";
                }
                // line 10
                echo "                            ";
                if (($this->getAttribute($context["client"], "etat", array()) == "Decouverte")) {
                    echo " decouverte ";
                }
                // line 11
                echo "                            ";
                if (($this->getAttribute($context["client"], "etat", array()) == "Relance")) {
                    echo " relance ";
                }
                echo "\"
                    href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-xs-5\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateRdv", array()), "d/m"), "html", null, true);
                echo "</div>
                    ";
                // line 15
                if (($this->getAttribute($context["client"], "budget", array()) == null)) {
                    // line 16
                    echo "                        <div class=\"col-xs-4\">...</div>
                    ";
                } else {
                    // line 18
                    echo "                        <div class=\"col-xs-4\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "budget", array()), "html", null, true);
                    echo " €</div>
                    ";
                }
                // line 20
                echo "                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "        <div class=\"col-xs-12 \">
            <p>Pas de rendez-vous aujourd'hui</p>
        </div>
    ";
        }
        // line 28
        echo "</div>
<div class=\"col-xs-12 tampon\"></div>
";
        // line 30
        if ((twig_length_filter($this->env, ($context["pastCustomers"] ?? $this->getContext($context, "pastCustomers"))) > 0)) {
            // line 31
            echo "    <div class=\"col-xs-12 white\">
        <div class=\"col-xz-12 center\">Client à redéfinir</div>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pastCustomers"] ?? $this->getContext($context, "pastCustomers")));
            foreach ($context['_seq'] as $context["_key"] => $context["pastCustomer"]) {
                // line 34
                echo "            <div class=\"row ligne\">
                <a class=\"  ";
                // line 35
                if (($this->getAttribute($context["pastCustomer"], "etat", array()) == "Retour")) {
                    echo " retour ";
                }
                // line 36
                echo "                            ";
                if (($this->getAttribute($context["pastCustomer"], "etat", array()) == "Decouverte")) {
                    echo " decouverte ";
                }
                // line 37
                echo "                            ";
                if (($this->getAttribute($context["pastCustomer"], "etat", array()) == "Relance")) {
                    echo " relance ";
                }
                echo "\"
                    href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["pastCustomer"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-xs-3\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "etat", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "nom", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-3\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pastCustomer"], "dateRDV", array()), "d/m"), "html", null, true);
                echo "</div>
                    ";
                // line 42
                if (($this->getAttribute($context["pastCustomer"], "budget", array()) == null)) {
                    // line 43
                    echo "                        <div class=\"col-xs-4\">...</div>
                    ";
                } else {
                    // line 45
                    echo "                        <div class=\"col-xs-4\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pastCustomer"], "budget", array()), "html", null, true);
                    echo " €</div>
                    ";
                }
                // line 47
                echo "                </a>
            </div>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pastCustomer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </div>
";
        }
        // line 53
        echo "<div class=\"col-xs-12 tampon\"></div>
<div class=\"col-xs-12 border white\">
    <div class=\"col-xs-12 center\">Ensemble des rendez-vous à venir</div>
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allCustomer"] ?? $this->getContext($context, "allCustomer")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 57
            echo "        <div class=\"row ligne\">
            <a  class=\"  ";
            // line 58
            if (($this->getAttribute($context["client"], "etat", array()) == "Retour")) {
                echo " retour ";
            }
            // line 59
            echo "                         ";
            if (($this->getAttribute($context["client"], "etat", array()) == "Decouverte")) {
                echo " decouverte ";
            }
            // line 60
            echo "                         ";
            if (($this->getAttribute($context["client"], "etat", array()) == "Relance")) {
                echo " relance ";
            }
            echo "\" 
                href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
                <div class=\"col-xs-5 overflow  \">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</div>
                <div class=\"col-xs-3\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "dateRdv", array()), "d/m"), "html", null, true);
            echo "</div>
                ";
            // line 64
            if (($this->getAttribute($context["client"], "budget", array()) == null)) {
                // line 65
                echo "                    <div class=\"col-xs-4\">...</div>
                ";
            } else {
                // line 67
                echo "                    <div class=\"col-xs-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "budget", array()), "html", null, true);
                echo " €</div>
                ";
            }
            // line 69
            echo "            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>
";
        
        $__internal_2c17959bb3d0c6fd767c449a7f166ff6592f1e9496d0811655ac4efd44950d74->leave($__internal_2c17959bb3d0c6fd767c449a7f166ff6592f1e9496d0811655ac4efd44950d74_prof);

        
        $__internal_61d39d019eb99fbb73148851ee906be97e4b813c8cc3e67c5a1be685539d16be->leave($__internal_61d39d019eb99fbb73148851ee906be97e4b813c8cc3e67c5a1be685539d16be_prof);

    }

    // line 75
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a55bb16a9f62fd3c5f3537e1e623faa043e5ff4a4e972f7e041acc4510d5e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a55bb16a9f62fd3c5f3537e1e623faa043e5ff4a4e972f7e041acc4510d5e11->enter($__internal_4a55bb16a9f62fd3c5f3537e1e623faa043e5ff4a4e972f7e041acc4510d5e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_735e4629c9332fed43a2e8317747f99494d8bd6cf04664d7c827664245ce8d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735e4629c9332fed43a2e8317747f99494d8bd6cf04664d7c827664245ce8d48->enter($__internal_735e4629c9332fed43a2e8317747f99494d8bd6cf04664d7c827664245ce8d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 76
        echo "    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_portefeuille_nouveau");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/ajout.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_735e4629c9332fed43a2e8317747f99494d8bd6cf04664d7c827664245ce8d48->leave($__internal_735e4629c9332fed43a2e8317747f99494d8bd6cf04664d7c827664245ce8d48_prof);

        
        $__internal_4a55bb16a9f62fd3c5f3537e1e623faa043e5ff4a4e972f7e041acc4510d5e11->leave($__internal_4a55bb16a9f62fd3c5f3537e1e623faa043e5ff4a4e972f7e041acc4510d5e11_prof);

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
        return array (  294 => 83,  290 => 82,  283 => 78,  279 => 77,  276 => 76,  267 => 75,  256 => 72,  248 => 69,  242 => 67,  238 => 65,  236 => 64,  232 => 63,  228 => 62,  224 => 61,  217 => 60,  212 => 59,  208 => 58,  205 => 57,  201 => 56,  196 => 53,  192 => 51,  183 => 47,  177 => 45,  173 => 43,  171 => 42,  167 => 41,  163 => 40,  159 => 39,  155 => 38,  148 => 37,  143 => 36,  139 => 35,  136 => 34,  132 => 33,  128 => 31,  126 => 30,  122 => 28,  116 => 24,  113 => 23,  105 => 20,  99 => 18,  95 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  74 => 11,  69 => 10,  65 => 9,  62 => 8,  57 => 7,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
                <a class=\"  {% if client.etat == 'Retour' %} retour {% endif %}
                            {% if client.etat == 'Decouverte' %} decouverte {% endif %}
                            {% if client.etat == 'Relance' %} relance {% endif %}\"
                    href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                    <div class=\"col-xs-5\">{{ client.nom }}</div>
                    <div class=\"col-xs-3\">{{ client.dateRdv|date('d/m') }}</div>
                    {% if client.budget == null %}
                        <div class=\"col-xs-4\">...</div>
                    {% else %}
                        <div class=\"col-xs-4\">{{ client.budget }} €</div>
                    {% endif %}
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
                <a class=\"  {% if pastCustomer.etat == 'Retour' %} retour {% endif %}
                            {% if pastCustomer.etat == 'Decouverte' %} decouverte {% endif %}
                            {% if pastCustomer.etat == 'Relance' %} relance {% endif %}\"
                    href=\"{{ path('dash_portefeuille_modif', {'id': pastCustomer.id}) }}\">
                    <div class=\"col-xs-3\">{{ pastCustomer.etat }}</div>
                    <div class=\"col-xs-3\">{{ pastCustomer.nom }}</div>
                    <div class=\"col-xs-3\">{{ pastCustomer.dateRDV|date('d/m') }}</div>
                    {% if pastCustomer.budget == null %}
                        <div class=\"col-xs-4\">...</div>
                    {% else %}
                        <div class=\"col-xs-4\">{{ pastCustomer.budget }} €</div>
                    {% endif %}
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
            <a  class=\"  {% if client.etat == 'Retour' %} retour {% endif %}
                         {% if client.etat == 'Decouverte' %} decouverte {% endif %}
                         {% if client.etat == 'Relance' %} relance {% endif %}\" 
                href=\"{{ path('dash_portefeuille_modif', {'id': client.id}) }}\">
                <div class=\"col-xs-5 overflow  \">{{ client.nom }}</div>
                <div class=\"col-xs-3\">{{ client.dateRdv|date('d/m') }}</div>
                {% if client.budget == null %}
                    <div class=\"col-xs-4\">...</div>
                {% else %}
                    <div class=\"col-xs-4\">{{ client.budget }} €</div>
                {% endif %}
            </a>
        </div>
    {% endfor %}
</div>
{% endblock %}

{% block menu %}
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/home.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-6 center\">
        <a href=\"{{ path('dash_portefeuille_nouveau') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/ajout.png')}} \">
        </a>
    </div>
{% endblock %}", "DashPortefeuilleBundle:liste:general.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/PortefeuilleBundle/Resources/views/liste/general.html.twig");
    }
}
