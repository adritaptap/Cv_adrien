<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5b5aa1c9f852f0debdf043f38b2b8f2e009c007d979cb182f28331a751fa0b27 extends Twig_Template
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
        $__internal_f48867ca6b52699bee889ef7a39131d1130da3f582dbcee278aaeb5db9ee379c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48867ca6b52699bee889ef7a39131d1130da3f582dbcee278aaeb5db9ee379c->enter($__internal_f48867ca6b52699bee889ef7a39131d1130da3f582dbcee278aaeb5db9ee379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_eca3bbdb046ad783e1fc3f0546e1699a82c998bd766e51f07bcca8ed0e305adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca3bbdb046ad783e1fc3f0546e1699a82c998bd766e51f07bcca8ed0e305adb->enter($__internal_eca3bbdb046ad783e1fc3f0546e1699a82c998bd766e51f07bcca8ed0e305adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f48867ca6b52699bee889ef7a39131d1130da3f582dbcee278aaeb5db9ee379c->leave($__internal_f48867ca6b52699bee889ef7a39131d1130da3f582dbcee278aaeb5db9ee379c_prof);

        
        $__internal_eca3bbdb046ad783e1fc3f0546e1699a82c998bd766e51f07bcca8ed0e305adb->leave($__internal_eca3bbdb046ad783e1fc3f0546e1699a82c998bd766e51f07bcca8ed0e305adb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
