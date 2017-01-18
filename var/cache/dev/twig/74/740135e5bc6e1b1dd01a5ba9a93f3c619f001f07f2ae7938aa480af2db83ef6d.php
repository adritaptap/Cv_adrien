<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9919a304896a6fde2093a928179d7f5b6c6ba316fb71d2441c73411f580dcf7c extends Twig_Template
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
        $__internal_923ff0393cc3ba1b9a5913678b65c4e5b4993e989e4e26cf3ee9771338bea0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923ff0393cc3ba1b9a5913678b65c4e5b4993e989e4e26cf3ee9771338bea0d0->enter($__internal_923ff0393cc3ba1b9a5913678b65c4e5b4993e989e4e26cf3ee9771338bea0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_53b06439f11e17d860f14b622a2b1d1a4bee365f353bd1ed35f82e6afa682c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b06439f11e17d860f14b622a2b1d1a4bee365f353bd1ed35f82e6afa682c21->enter($__internal_53b06439f11e17d860f14b622a2b1d1a4bee365f353bd1ed35f82e6afa682c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_923ff0393cc3ba1b9a5913678b65c4e5b4993e989e4e26cf3ee9771338bea0d0->leave($__internal_923ff0393cc3ba1b9a5913678b65c4e5b4993e989e4e26cf3ee9771338bea0d0_prof);

        
        $__internal_53b06439f11e17d860f14b622a2b1d1a4bee365f353bd1ed35f82e6afa682c21->leave($__internal_53b06439f11e17d860f14b622a2b1d1a4bee365f353bd1ed35f82e6afa682c21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
