<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_83bcc4e989bfea9beec5202e14e35787acaf160b617b2ea548c81155080d3f0e extends Twig_Template
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
        $__internal_c64b75453864e00dc7e89c93753fed6e96a65c7b2a9b36f7f7ee62bda71a7b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64b75453864e00dc7e89c93753fed6e96a65c7b2a9b36f7f7ee62bda71a7b02->enter($__internal_c64b75453864e00dc7e89c93753fed6e96a65c7b2a9b36f7f7ee62bda71a7b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d4835d48684441a8cb2cb7ea97c4adafb07c7582a561983be5ad47907e31065a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4835d48684441a8cb2cb7ea97c4adafb07c7582a561983be5ad47907e31065a->enter($__internal_d4835d48684441a8cb2cb7ea97c4adafb07c7582a561983be5ad47907e31065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c64b75453864e00dc7e89c93753fed6e96a65c7b2a9b36f7f7ee62bda71a7b02->leave($__internal_c64b75453864e00dc7e89c93753fed6e96a65c7b2a9b36f7f7ee62bda71a7b02_prof);

        
        $__internal_d4835d48684441a8cb2cb7ea97c4adafb07c7582a561983be5ad47907e31065a->leave($__internal_d4835d48684441a8cb2cb7ea97c4adafb07c7582a561983be5ad47907e31065a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
