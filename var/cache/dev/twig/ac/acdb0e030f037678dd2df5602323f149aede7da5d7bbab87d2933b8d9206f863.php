<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_03502311b0136a0119b69b597d9e951dba319a0a05e7551a46514c541073524e extends Twig_Template
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
        $__internal_f93b6dbc96815692847f9852589b9cb43b6eb063cedfd9c02e20096a7dd963a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93b6dbc96815692847f9852589b9cb43b6eb063cedfd9c02e20096a7dd963a2->enter($__internal_f93b6dbc96815692847f9852589b9cb43b6eb063cedfd9c02e20096a7dd963a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_bd6f7b4e354d63049d29688308690a358c02655cc34f0bcaef23f23c014dcff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6f7b4e354d63049d29688308690a358c02655cc34f0bcaef23f23c014dcff6->enter($__internal_bd6f7b4e354d63049d29688308690a358c02655cc34f0bcaef23f23c014dcff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f93b6dbc96815692847f9852589b9cb43b6eb063cedfd9c02e20096a7dd963a2->leave($__internal_f93b6dbc96815692847f9852589b9cb43b6eb063cedfd9c02e20096a7dd963a2_prof);

        
        $__internal_bd6f7b4e354d63049d29688308690a358c02655cc34f0bcaef23f23c014dcff6->leave($__internal_bd6f7b4e354d63049d29688308690a358c02655cc34f0bcaef23f23c014dcff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
