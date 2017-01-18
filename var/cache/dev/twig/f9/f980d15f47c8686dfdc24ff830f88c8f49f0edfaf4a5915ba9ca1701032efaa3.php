<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_85993e8d7262bcf0db3e6a52103077d4456a475b2823d910bf8b24b6fb372bdb extends Twig_Template
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
        $__internal_5de96f3ff94c1d519a7f64a1fb9f06ee8b616bb4c599303c91afe73a6ba79df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de96f3ff94c1d519a7f64a1fb9f06ee8b616bb4c599303c91afe73a6ba79df6->enter($__internal_5de96f3ff94c1d519a7f64a1fb9f06ee8b616bb4c599303c91afe73a6ba79df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f2c58cbc7ef0a07d86cdc19094845769bae47c5b9f88a2159b4cd2562e248424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c58cbc7ef0a07d86cdc19094845769bae47c5b9f88a2159b4cd2562e248424->enter($__internal_f2c58cbc7ef0a07d86cdc19094845769bae47c5b9f88a2159b4cd2562e248424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5de96f3ff94c1d519a7f64a1fb9f06ee8b616bb4c599303c91afe73a6ba79df6->leave($__internal_5de96f3ff94c1d519a7f64a1fb9f06ee8b616bb4c599303c91afe73a6ba79df6_prof);

        
        $__internal_f2c58cbc7ef0a07d86cdc19094845769bae47c5b9f88a2159b4cd2562e248424->leave($__internal_f2c58cbc7ef0a07d86cdc19094845769bae47c5b9f88a2159b4cd2562e248424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
