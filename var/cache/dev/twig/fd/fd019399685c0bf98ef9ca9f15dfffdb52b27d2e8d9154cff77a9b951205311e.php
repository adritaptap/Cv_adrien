<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e7626528cb282d0dded910c6d83bf75435cca001e5a129eda7daa694fad5aeb1 extends Twig_Template
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
        $__internal_306998e15bf5e53058864b235a0201995721c89079bf41c0c0fc91348836e74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306998e15bf5e53058864b235a0201995721c89079bf41c0c0fc91348836e74d->enter($__internal_306998e15bf5e53058864b235a0201995721c89079bf41c0c0fc91348836e74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c38f088d257093243514c5c0244b89b5dda8190560a983f566d01b33c62955f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38f088d257093243514c5c0244b89b5dda8190560a983f566d01b33c62955f9->enter($__internal_c38f088d257093243514c5c0244b89b5dda8190560a983f566d01b33c62955f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_306998e15bf5e53058864b235a0201995721c89079bf41c0c0fc91348836e74d->leave($__internal_306998e15bf5e53058864b235a0201995721c89079bf41c0c0fc91348836e74d_prof);

        
        $__internal_c38f088d257093243514c5c0244b89b5dda8190560a983f566d01b33c62955f9->leave($__internal_c38f088d257093243514c5c0244b89b5dda8190560a983f566d01b33c62955f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
