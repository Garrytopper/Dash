<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_c28e82206e4f8221e06600d78a39a5a77d9da0ec7cf15c5e586370b7e3a86fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28e82206e4f8221e06600d78a39a5a77d9da0ec7cf15c5e586370b7e3a86fbb->enter($__internal_c28e82206e4f8221e06600d78a39a5a77d9da0ec7cf15c5e586370b7e3a86fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_030e4748c421980bb60bbb685dfa582308efd27fcb3dc7cad7d9304d2fbac7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030e4748c421980bb60bbb685dfa582308efd27fcb3dc7cad7d9304d2fbac7dd->enter($__internal_030e4748c421980bb60bbb685dfa582308efd27fcb3dc7cad7d9304d2fbac7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c28e82206e4f8221e06600d78a39a5a77d9da0ec7cf15c5e586370b7e3a86fbb->leave($__internal_c28e82206e4f8221e06600d78a39a5a77d9da0ec7cf15c5e586370b7e3a86fbb_prof);

        
        $__internal_030e4748c421980bb60bbb685dfa582308efd27fcb3dc7cad7d9304d2fbac7dd->leave($__internal_030e4748c421980bb60bbb685dfa582308efd27fcb3dc7cad7d9304d2fbac7dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
