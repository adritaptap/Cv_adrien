<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_103f87bd04eb4dcfb5b06f48a54199869e9637c80fe24f08b3fd8a6a4579064b extends Twig_Template
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
        $__internal_35cbcb5b5d32dd8534d6b9a9b77b0ab00603c24849c2473d7e1e1c2e6c54f23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cbcb5b5d32dd8534d6b9a9b77b0ab00603c24849c2473d7e1e1c2e6c54f23b->enter($__internal_35cbcb5b5d32dd8534d6b9a9b77b0ab00603c24849c2473d7e1e1c2e6c54f23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2aefb24adf52e0ef78b354ce43dc42166ca2f96e4abb024b45790a56a2d31c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aefb24adf52e0ef78b354ce43dc42166ca2f96e4abb024b45790a56a2d31c86->enter($__internal_2aefb24adf52e0ef78b354ce43dc42166ca2f96e4abb024b45790a56a2d31c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_35cbcb5b5d32dd8534d6b9a9b77b0ab00603c24849c2473d7e1e1c2e6c54f23b->leave($__internal_35cbcb5b5d32dd8534d6b9a9b77b0ab00603c24849c2473d7e1e1c2e6c54f23b_prof);

        
        $__internal_2aefb24adf52e0ef78b354ce43dc42166ca2f96e4abb024b45790a56a2d31c86->leave($__internal_2aefb24adf52e0ef78b354ce43dc42166ca2f96e4abb024b45790a56a2d31c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
