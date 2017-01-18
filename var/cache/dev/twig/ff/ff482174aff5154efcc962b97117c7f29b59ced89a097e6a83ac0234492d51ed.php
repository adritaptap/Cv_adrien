<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eacd0257fccd314fbc63fc542e148dc5265cf7e1948c596da109370dd2a943ac extends Twig_Template
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
        $__internal_2f8de219696d4a4cfd1f5e330820cb65d099e7b356d983f1d1e7ffe34a736ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8de219696d4a4cfd1f5e330820cb65d099e7b356d983f1d1e7ffe34a736ba7->enter($__internal_2f8de219696d4a4cfd1f5e330820cb65d099e7b356d983f1d1e7ffe34a736ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d9dddb30660dff08c0bc7e1f28f3e5e0890a6630b7afe5853aafd404fdd8d3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dddb30660dff08c0bc7e1f28f3e5e0890a6630b7afe5853aafd404fdd8d3e8->enter($__internal_d9dddb30660dff08c0bc7e1f28f3e5e0890a6630b7afe5853aafd404fdd8d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2f8de219696d4a4cfd1f5e330820cb65d099e7b356d983f1d1e7ffe34a736ba7->leave($__internal_2f8de219696d4a4cfd1f5e330820cb65d099e7b356d983f1d1e7ffe34a736ba7_prof);

        
        $__internal_d9dddb30660dff08c0bc7e1f28f3e5e0890a6630b7afe5853aafd404fdd8d3e8->leave($__internal_d9dddb30660dff08c0bc7e1f28f3e5e0890a6630b7afe5853aafd404fdd8d3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
