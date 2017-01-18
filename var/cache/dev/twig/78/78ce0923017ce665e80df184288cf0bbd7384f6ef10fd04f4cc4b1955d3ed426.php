<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_99b72e5f80f25988ba6cf1a8ecb0591bb49fb0042b4be4a9434a7ef56b231a91 extends Twig_Template
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
        $__internal_807684e66982db222f7bcddcf4ea2b8d590f940d1dea6150a1ff07c9bc0cb046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807684e66982db222f7bcddcf4ea2b8d590f940d1dea6150a1ff07c9bc0cb046->enter($__internal_807684e66982db222f7bcddcf4ea2b8d590f940d1dea6150a1ff07c9bc0cb046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_aabbb2d33171c703245851425f656b66de4578b605c22824e600026d26afc9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabbb2d33171c703245851425f656b66de4578b605c22824e600026d26afc9df->enter($__internal_aabbb2d33171c703245851425f656b66de4578b605c22824e600026d26afc9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_807684e66982db222f7bcddcf4ea2b8d590f940d1dea6150a1ff07c9bc0cb046->leave($__internal_807684e66982db222f7bcddcf4ea2b8d590f940d1dea6150a1ff07c9bc0cb046_prof);

        
        $__internal_aabbb2d33171c703245851425f656b66de4578b605c22824e600026d26afc9df->leave($__internal_aabbb2d33171c703245851425f656b66de4578b605c22824e600026d26afc9df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
