<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aaf0b894b488c7c8de66ce60163b8c6a7458cc6801c31234ee109e9023be78df extends Twig_Template
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
        $__internal_d97545c48036e11ec102c8f8d818af1e5cae71aa0f661f5dc23020537b63cd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97545c48036e11ec102c8f8d818af1e5cae71aa0f661f5dc23020537b63cd7d->enter($__internal_d97545c48036e11ec102c8f8d818af1e5cae71aa0f661f5dc23020537b63cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a016f093205f62f3a4fafc8f184f1e2ca83e7d163779644da9567f91749618b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a016f093205f62f3a4fafc8f184f1e2ca83e7d163779644da9567f91749618b6->enter($__internal_a016f093205f62f3a4fafc8f184f1e2ca83e7d163779644da9567f91749618b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d97545c48036e11ec102c8f8d818af1e5cae71aa0f661f5dc23020537b63cd7d->leave($__internal_d97545c48036e11ec102c8f8d818af1e5cae71aa0f661f5dc23020537b63cd7d_prof);

        
        $__internal_a016f093205f62f3a4fafc8f184f1e2ca83e7d163779644da9567f91749618b6->leave($__internal_a016f093205f62f3a4fafc8f184f1e2ca83e7d163779644da9567f91749618b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
