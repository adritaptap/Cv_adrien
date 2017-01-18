<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4f34ce79427b4c30aa4071fdc90de7a028159f6a9dcac17c3ed1d0d86e1f52d4 extends Twig_Template
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
        $__internal_24dfc5f17ba16e8ff777ada003fbbf22b7af1aa4136c9360465c417de3bedbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dfc5f17ba16e8ff777ada003fbbf22b7af1aa4136c9360465c417de3bedbf4->enter($__internal_24dfc5f17ba16e8ff777ada003fbbf22b7af1aa4136c9360465c417de3bedbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f5b8e7188259112e9d6117a53845ed9ae165fae99459b6a69ec1597f4e754fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b8e7188259112e9d6117a53845ed9ae165fae99459b6a69ec1597f4e754fe2->enter($__internal_f5b8e7188259112e9d6117a53845ed9ae165fae99459b6a69ec1597f4e754fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_24dfc5f17ba16e8ff777ada003fbbf22b7af1aa4136c9360465c417de3bedbf4->leave($__internal_24dfc5f17ba16e8ff777ada003fbbf22b7af1aa4136c9360465c417de3bedbf4_prof);

        
        $__internal_f5b8e7188259112e9d6117a53845ed9ae165fae99459b6a69ec1597f4e754fe2->leave($__internal_f5b8e7188259112e9d6117a53845ed9ae165fae99459b6a69ec1597f4e754fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
