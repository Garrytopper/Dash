<?php

/* DashDventeBundle:Liste:ListeRelanceCheque.html.twig */
class __TwigTemplate_ac5d2939131089d2ada166a24490915004b3fbfceabd749645506475df60e7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DashCoreBundle::coreLayout.html.twig", "DashDventeBundle:Liste:ListeRelanceCheque.html.twig", 1);
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
        $__internal_5287c13fe8dd18c79f55cf72d9ce3ec6d2bbb18dc399e6526e849e31d58f2ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5287c13fe8dd18c79f55cf72d9ce3ec6d2bbb18dc399e6526e849e31d58f2ee3->enter($__internal_5287c13fe8dd18c79f55cf72d9ce3ec6d2bbb18dc399e6526e849e31d58f2ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Liste:ListeRelanceCheque.html.twig"));

        $__internal_ad32560b7c30d4535609dd8f209488eb1667a74ebbd7c8d574231c752f6267a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad32560b7c30d4535609dd8f209488eb1667a74ebbd7c8d574231c752f6267a6->enter($__internal_ad32560b7c30d4535609dd8f209488eb1667a74ebbd7c8d574231c752f6267a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashDventeBundle:Liste:ListeRelanceCheque.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5287c13fe8dd18c79f55cf72d9ce3ec6d2bbb18dc399e6526e849e31d58f2ee3->leave($__internal_5287c13fe8dd18c79f55cf72d9ce3ec6d2bbb18dc399e6526e849e31d58f2ee3_prof);

        
        $__internal_ad32560b7c30d4535609dd8f209488eb1667a74ebbd7c8d574231c752f6267a6->leave($__internal_ad32560b7c30d4535609dd8f209488eb1667a74ebbd7c8d574231c752f6267a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df73c8bba4863fd5703b83a179a9c851233dad3d145f86b5ad85e8b0f72e5301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df73c8bba4863fd5703b83a179a9c851233dad3d145f86b5ad85e8b0f72e5301->enter($__internal_df73c8bba4863fd5703b83a179a9c851233dad3d145f86b5ad85e8b0f72e5301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8f22f1431e4f85636d99ead59390c1b0204d64da0e3feb833c0d373ad21d4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f22f1431e4f85636d99ead59390c1b0204d64da0e3feb833c0d373ad21d4a4->enter($__internal_d8f22f1431e4f85636d99ead59390c1b0204d64da0e3feb833c0d373ad21d4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row white\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-3\"><img class=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Rcheque.png"), "html", null, true);
        echo "\"></div>
        <div class=\"col-xs-12 tampon\"></div>
        ";
        // line 7
        if ((twig_length_filter($this->env, ($context["Rcheques"] ?? $this->getContext($context, "Rcheques"))) < 1)) {
            // line 8
            echo "            <div class=\"col-xs-12 center\">Pas de Relance de chèque à faire</div>
        ";
        } else {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Rcheques"] ?? $this->getContext($context, "Rcheques")));
            foreach ($context['_seq'] as $context["_key"] => $context["Rcheque"]) {
                // line 11
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_modif_rcheque", array("id" => $this->getAttribute($context["Rcheque"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-xs-4\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Rcheque"], "dossier", array()), "client", array()), "nom", array()), "html", null, true);
                echo "</div>
                    <div class=\"col-xs-4\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["Rcheque"], "montant", array()), "html", null, true);
                echo " €</div>
                    <div class=\"col-xs-4\">";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Rcheque"], "dateRel", array()), "d/m/y"), "html", null, true);
                echo "</div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Rcheque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </div>
";
        
        $__internal_d8f22f1431e4f85636d99ead59390c1b0204d64da0e3feb833c0d373ad21d4a4->leave($__internal_d8f22f1431e4f85636d99ead59390c1b0204d64da0e3feb833c0d373ad21d4a4_prof);

        
        $__internal_df73c8bba4863fd5703b83a179a9c851233dad3d145f86b5ad85e8b0f72e5301->leave($__internal_df73c8bba4863fd5703b83a179a9c851233dad3d145f86b5ad85e8b0f72e5301_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2400f6100e1d0fd909e25326f29fbb29d176b327a2220b35518c0c11798b8d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2400f6100e1d0fd909e25326f29fbb29d176b327a2220b35518c0c11798b8d4a->enter($__internal_2400f6100e1d0fd909e25326f29fbb29d176b327a2220b35518c0c11798b8d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03e30d98428285c44254744a00cadcbc1423d52d8fb4e67aa80004c533082d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e30d98428285c44254744a00cadcbc1423d52d8fb4e67aa80004c533082d3f->enter($__internal_03e30d98428285c44254744a00cadcbc1423d52d8fb4e67aa80004c533082d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "    <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/home.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_dvente_liste");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Dvente.png"), "html", null, true);
        echo " \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dash_core_homepage");
        echo "\">
            <img class=\"logo\" src=\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dashcore/image/Ppierre.png"), "html", null, true);
        echo " \">
        </a>
    </div>
";
        
        $__internal_03e30d98428285c44254744a00cadcbc1423d52d8fb4e67aa80004c533082d3f->leave($__internal_03e30d98428285c44254744a00cadcbc1423d52d8fb4e67aa80004c533082d3f_prof);

        
        $__internal_2400f6100e1d0fd909e25326f29fbb29d176b327a2220b35518c0c11798b8d4a->leave($__internal_2400f6100e1d0fd909e25326f29fbb29d176b327a2220b35518c0c11798b8d4a_prof);

    }

    public function getTemplateName()
    {
        return "DashDventeBundle:Liste:ListeRelanceCheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 33,  140 => 32,  133 => 28,  129 => 27,  122 => 23,  118 => 22,  115 => 21,  106 => 20,  95 => 18,  92 => 17,  83 => 14,  79 => 13,  75 => 12,  70 => 11,  65 => 10,  61 => 8,  59 => 7,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DashCoreBundle::coreLayout.html.twig' %}
{% block body %}
    <div class=\"row white\">
        <div class=\"col-xs-12 tampon\"></div>
        <div class=\"col-xs-3\"><img class=\"logo\" src=\"{{ asset('bundles/dashcore/image/Rcheque.png') }}\"></div>
        <div class=\"col-xs-12 tampon\"></div>
        {% if Rcheques|length < 1 %}
            <div class=\"col-xs-12 center\">Pas de Relance de chèque à faire</div>
        {% else %}
            {% for Rcheque in Rcheques %}
                <a href=\"{{ path('dash_dvente_modif_rcheque', {'id': Rcheque.id}) }}\">
                    <div class=\"col-xs-4\">{{ Rcheque.dossier.client.nom }}</div>
                    <div class=\"col-xs-4\">{{ Rcheque.montant }} €</div>
                    <div class=\"col-xs-4\">{{ Rcheque.dateRel|date('d/m/y') }}</div>
                </a>
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
        <a href=\"{{ path('dash_dvente_liste') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Dvente.png')}} \">
        </a>
    </div>
    <div class=\"col-xs-4 center\">
        <a href=\"{{ path('dash_core_homepage') }}\">
            <img class=\"logo\" src=\" {{ asset('bundles/dashcore/image/Ppierre.png')}} \">
        </a>
    </div>
{% endblock %}", "DashDventeBundle:Liste:ListeRelanceCheque.html.twig", "/Applications/MAMP/htdocs/Dash/src/Dash/DventeBundle/Resources/views/Liste/ListeRelanceCheque.html.twig");
    }
}
