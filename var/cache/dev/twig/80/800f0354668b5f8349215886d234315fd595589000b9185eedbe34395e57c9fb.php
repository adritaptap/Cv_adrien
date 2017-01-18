<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e15545afaf1817bf77b0925a6e54bf0f11ed80115e5fde6b3093466a51125718 extends Twig_Template
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
        $__internal_d494352bad9f734340a79d2ea16e1064179b4cd8e04fdc84d957dc5b6327f222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d494352bad9f734340a79d2ea16e1064179b4cd8e04fdc84d957dc5b6327f222->enter($__internal_d494352bad9f734340a79d2ea16e1064179b4cd8e04fdc84d957dc5b6327f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6091374560576bf7e9d83797d659af4f6b3b5e1d1630f58c155b78429909d125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6091374560576bf7e9d83797d659af4f6b3b5e1d1630f58c155b78429909d125->enter($__internal_6091374560576bf7e9d83797d659af4f6b3b5e1d1630f58c155b78429909d125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d494352bad9f734340a79d2ea16e1064179b4cd8e04fdc84d957dc5b6327f222->leave($__internal_d494352bad9f734340a79d2ea16e1064179b4cd8e04fdc84d957dc5b6327f222_prof);

        
        $__internal_6091374560576bf7e9d83797d659af4f6b3b5e1d1630f58c155b78429909d125->leave($__internal_6091374560576bf7e9d83797d659af4f6b3b5e1d1630f58c155b78429909d125_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
