<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6914023c7d9da81b6f7628fbecfb8fbd9823595b8f515df0dbc9f3339c922cb6 extends Twig_Template
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
        $__internal_8a4f66d64564a332835fa2908055c41eb0b99074c2dd038fb2c779039b95fa3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4f66d64564a332835fa2908055c41eb0b99074c2dd038fb2c779039b95fa3d->enter($__internal_8a4f66d64564a332835fa2908055c41eb0b99074c2dd038fb2c779039b95fa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1f243acb72f4c6fbd9ffe5bf7e4279f645f3e489b7f583fb1753d8fbd50d10eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f243acb72f4c6fbd9ffe5bf7e4279f645f3e489b7f583fb1753d8fbd50d10eb->enter($__internal_1f243acb72f4c6fbd9ffe5bf7e4279f645f3e489b7f583fb1753d8fbd50d10eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8a4f66d64564a332835fa2908055c41eb0b99074c2dd038fb2c779039b95fa3d->leave($__internal_8a4f66d64564a332835fa2908055c41eb0b99074c2dd038fb2c779039b95fa3d_prof);

        
        $__internal_1f243acb72f4c6fbd9ffe5bf7e4279f645f3e489b7f583fb1753d8fbd50d10eb->leave($__internal_1f243acb72f4c6fbd9ffe5bf7e4279f645f3e489b7f583fb1753d8fbd50d10eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
