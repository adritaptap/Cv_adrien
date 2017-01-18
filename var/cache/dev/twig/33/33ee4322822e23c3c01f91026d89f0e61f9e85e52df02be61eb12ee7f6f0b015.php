<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b6abafa11400ec1e74967cdbb1713cecb5f0b394e285353f88eb7089bc1a8aa8 extends Twig_Template
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
        $__internal_510213b5fa51d7b9daf0e53e07ed19eee0710bc8fdbe398c89bf9561f4e0951d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510213b5fa51d7b9daf0e53e07ed19eee0710bc8fdbe398c89bf9561f4e0951d->enter($__internal_510213b5fa51d7b9daf0e53e07ed19eee0710bc8fdbe398c89bf9561f4e0951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_af5c49654a5f0fdd819b62d3b2ca27a71ec87cc103b8abd681cc0cefeb7d214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5c49654a5f0fdd819b62d3b2ca27a71ec87cc103b8abd681cc0cefeb7d214b->enter($__internal_af5c49654a5f0fdd819b62d3b2ca27a71ec87cc103b8abd681cc0cefeb7d214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_510213b5fa51d7b9daf0e53e07ed19eee0710bc8fdbe398c89bf9561f4e0951d->leave($__internal_510213b5fa51d7b9daf0e53e07ed19eee0710bc8fdbe398c89bf9561f4e0951d_prof);

        
        $__internal_af5c49654a5f0fdd819b62d3b2ca27a71ec87cc103b8abd681cc0cefeb7d214b->leave($__internal_af5c49654a5f0fdd819b62d3b2ca27a71ec87cc103b8abd681cc0cefeb7d214b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
