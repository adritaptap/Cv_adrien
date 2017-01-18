<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_67d8b62f1e1b6c32b0b1dc04ef85c7b86f182fb93ea9c34039ae0e085b0483c0 extends Twig_Template
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
        $__internal_6b7f675922d2c20479441068727de5a773dc8b29662c9a0e8a040037f5e4b50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7f675922d2c20479441068727de5a773dc8b29662c9a0e8a040037f5e4b50f->enter($__internal_6b7f675922d2c20479441068727de5a773dc8b29662c9a0e8a040037f5e4b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_41c3c2f0d8005d741a7d9eabc0fbab199fa0c43ec76f38361ff5a367abb9e0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c3c2f0d8005d741a7d9eabc0fbab199fa0c43ec76f38361ff5a367abb9e0c0->enter($__internal_41c3c2f0d8005d741a7d9eabc0fbab199fa0c43ec76f38361ff5a367abb9e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6b7f675922d2c20479441068727de5a773dc8b29662c9a0e8a040037f5e4b50f->leave($__internal_6b7f675922d2c20479441068727de5a773dc8b29662c9a0e8a040037f5e4b50f_prof);

        
        $__internal_41c3c2f0d8005d741a7d9eabc0fbab199fa0c43ec76f38361ff5a367abb9e0c0->leave($__internal_41c3c2f0d8005d741a7d9eabc0fbab199fa0c43ec76f38361ff5a367abb9e0c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
