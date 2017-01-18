<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ec7dc0e3f21ff4c39118517563d70806612c92e9c712603e4ad11ed75c988fb9 extends Twig_Template
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
        $__internal_affd9b16fc32e9b7a4059857c1c19adac757f927f8d83017f088e11c8ae5cd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affd9b16fc32e9b7a4059857c1c19adac757f927f8d83017f088e11c8ae5cd36->enter($__internal_affd9b16fc32e9b7a4059857c1c19adac757f927f8d83017f088e11c8ae5cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3fb83e1ab4e2e98f082b9d62e82ba498d27e43305fc5cc1118e27539f1bc9ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb83e1ab4e2e98f082b9d62e82ba498d27e43305fc5cc1118e27539f1bc9ae5->enter($__internal_3fb83e1ab4e2e98f082b9d62e82ba498d27e43305fc5cc1118e27539f1bc9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_affd9b16fc32e9b7a4059857c1c19adac757f927f8d83017f088e11c8ae5cd36->leave($__internal_affd9b16fc32e9b7a4059857c1c19adac757f927f8d83017f088e11c8ae5cd36_prof);

        
        $__internal_3fb83e1ab4e2e98f082b9d62e82ba498d27e43305fc5cc1118e27539f1bc9ae5->leave($__internal_3fb83e1ab4e2e98f082b9d62e82ba498d27e43305fc5cc1118e27539f1bc9ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
