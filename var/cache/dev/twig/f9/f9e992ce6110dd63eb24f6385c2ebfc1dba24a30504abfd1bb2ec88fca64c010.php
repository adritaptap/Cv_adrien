<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ca5dd32b5a43e7ba5107b075636e9c88933970ebda1e4745277abc2050fd3d3f extends Twig_Template
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
        $__internal_e5506328b2af281a584f4f89fe575824355608a0c60bf4ba93d7b6f5dbfaf907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5506328b2af281a584f4f89fe575824355608a0c60bf4ba93d7b6f5dbfaf907->enter($__internal_e5506328b2af281a584f4f89fe575824355608a0c60bf4ba93d7b6f5dbfaf907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2bad3c2953a7c7447fd0483459cfe3c9619c4d88ad2ac5c155f59878037d3ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bad3c2953a7c7447fd0483459cfe3c9619c4d88ad2ac5c155f59878037d3ad5->enter($__internal_2bad3c2953a7c7447fd0483459cfe3c9619c4d88ad2ac5c155f59878037d3ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e5506328b2af281a584f4f89fe575824355608a0c60bf4ba93d7b6f5dbfaf907->leave($__internal_e5506328b2af281a584f4f89fe575824355608a0c60bf4ba93d7b6f5dbfaf907_prof);

        
        $__internal_2bad3c2953a7c7447fd0483459cfe3c9619c4d88ad2ac5c155f59878037d3ad5->leave($__internal_2bad3c2953a7c7447fd0483459cfe3c9619c4d88ad2ac5c155f59878037d3ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
