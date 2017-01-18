<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_df83b6e07b68def83fefcc448a10972ae6d470dcab882431395111d3caea1537 extends Twig_Template
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
        $__internal_215171c7cc633ff66d0c3b792ec81a3df4c6f389879b1dc71456ed6d34479d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215171c7cc633ff66d0c3b792ec81a3df4c6f389879b1dc71456ed6d34479d68->enter($__internal_215171c7cc633ff66d0c3b792ec81a3df4c6f389879b1dc71456ed6d34479d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a0e5da36620d53494da5eb493f99473b66855292dc91f50f8be8673afc865c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e5da36620d53494da5eb493f99473b66855292dc91f50f8be8673afc865c2d->enter($__internal_a0e5da36620d53494da5eb493f99473b66855292dc91f50f8be8673afc865c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_215171c7cc633ff66d0c3b792ec81a3df4c6f389879b1dc71456ed6d34479d68->leave($__internal_215171c7cc633ff66d0c3b792ec81a3df4c6f389879b1dc71456ed6d34479d68_prof);

        
        $__internal_a0e5da36620d53494da5eb493f99473b66855292dc91f50f8be8673afc865c2d->leave($__internal_a0e5da36620d53494da5eb493f99473b66855292dc91f50f8be8673afc865c2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
