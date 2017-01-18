<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d5cbd8570f9f8f7183d122cca933713486f2446ff091ca446241f3acc0e63b4a extends Twig_Template
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
        $__internal_fc987166c41fc65c3a6ac7cd28dec30e087e5ae6f31556ac35d8ea9b950956c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc987166c41fc65c3a6ac7cd28dec30e087e5ae6f31556ac35d8ea9b950956c9->enter($__internal_fc987166c41fc65c3a6ac7cd28dec30e087e5ae6f31556ac35d8ea9b950956c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_62b032beba783c2922136912c9b224857ccf91f13c5c8e48c6f88018ca0d0907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b032beba783c2922136912c9b224857ccf91f13c5c8e48c6f88018ca0d0907->enter($__internal_62b032beba783c2922136912c9b224857ccf91f13c5c8e48c6f88018ca0d0907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fc987166c41fc65c3a6ac7cd28dec30e087e5ae6f31556ac35d8ea9b950956c9->leave($__internal_fc987166c41fc65c3a6ac7cd28dec30e087e5ae6f31556ac35d8ea9b950956c9_prof);

        
        $__internal_62b032beba783c2922136912c9b224857ccf91f13c5c8e48c6f88018ca0d0907->leave($__internal_62b032beba783c2922136912c9b224857ccf91f13c5c8e48c6f88018ca0d0907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
