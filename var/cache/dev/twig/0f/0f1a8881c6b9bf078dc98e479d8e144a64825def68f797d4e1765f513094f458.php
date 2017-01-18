<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3571b4d2e64240c1547b302be3860f81e9b7bd04b9227cd2b0d491ec6a1b6687 extends Twig_Template
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
        $__internal_699148178967e962839ccf76bd052f980f0ad1335e1266fbf917c6e9d9b93688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699148178967e962839ccf76bd052f980f0ad1335e1266fbf917c6e9d9b93688->enter($__internal_699148178967e962839ccf76bd052f980f0ad1335e1266fbf917c6e9d9b93688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_37abd1f45a2e11cf6562835841553e6385a457699504d1f7e9a7bfbb8c2c4866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37abd1f45a2e11cf6562835841553e6385a457699504d1f7e9a7bfbb8c2c4866->enter($__internal_37abd1f45a2e11cf6562835841553e6385a457699504d1f7e9a7bfbb8c2c4866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_699148178967e962839ccf76bd052f980f0ad1335e1266fbf917c6e9d9b93688->leave($__internal_699148178967e962839ccf76bd052f980f0ad1335e1266fbf917c6e9d9b93688_prof);

        
        $__internal_37abd1f45a2e11cf6562835841553e6385a457699504d1f7e9a7bfbb8c2c4866->leave($__internal_37abd1f45a2e11cf6562835841553e6385a457699504d1f7e9a7bfbb8c2c4866_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
