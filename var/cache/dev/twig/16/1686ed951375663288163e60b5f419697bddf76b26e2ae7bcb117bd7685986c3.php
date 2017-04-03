<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_a710d0116cca20e8cacb08027beed3dc6f413d1f9deb723667b102d1646f7e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a710d0116cca20e8cacb08027beed3dc6f413d1f9deb723667b102d1646f7e9f->enter($__internal_a710d0116cca20e8cacb08027beed3dc6f413d1f9deb723667b102d1646f7e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_928ee030bd964e0bdba037ed594bd746b4c3bd63b0b4b759f7b77bb474771923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928ee030bd964e0bdba037ed594bd746b4c3bd63b0b4b759f7b77bb474771923->enter($__internal_928ee030bd964e0bdba037ed594bd746b4c3bd63b0b4b759f7b77bb474771923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a710d0116cca20e8cacb08027beed3dc6f413d1f9deb723667b102d1646f7e9f->leave($__internal_a710d0116cca20e8cacb08027beed3dc6f413d1f9deb723667b102d1646f7e9f_prof);

        
        $__internal_928ee030bd964e0bdba037ed594bd746b4c3bd63b0b4b759f7b77bb474771923->leave($__internal_928ee030bd964e0bdba037ed594bd746b4c3bd63b0b4b759f7b77bb474771923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Dash/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
