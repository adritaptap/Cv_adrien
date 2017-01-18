<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_12d9dcc5ec5ab285c64cf2b0ba4931cc8cd05ae73f7196713e497c5296c15630 extends Twig_Template
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
        $__internal_3e0f00aa75f91e26f85c164cc51ef6c79b2b730c633d763888da9c138b38673a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0f00aa75f91e26f85c164cc51ef6c79b2b730c633d763888da9c138b38673a->enter($__internal_3e0f00aa75f91e26f85c164cc51ef6c79b2b730c633d763888da9c138b38673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_de89d403fc138f036c1d0d964a26a3ed7f046301b796472bad0cd7fedeaf24f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de89d403fc138f036c1d0d964a26a3ed7f046301b796472bad0cd7fedeaf24f5->enter($__internal_de89d403fc138f036c1d0d964a26a3ed7f046301b796472bad0cd7fedeaf24f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3e0f00aa75f91e26f85c164cc51ef6c79b2b730c633d763888da9c138b38673a->leave($__internal_3e0f00aa75f91e26f85c164cc51ef6c79b2b730c633d763888da9c138b38673a_prof);

        
        $__internal_de89d403fc138f036c1d0d964a26a3ed7f046301b796472bad0cd7fedeaf24f5->leave($__internal_de89d403fc138f036c1d0d964a26a3ed7f046301b796472bad0cd7fedeaf24f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
