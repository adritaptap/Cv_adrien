<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b6b27a93adc8bd7cbb356fde1321413478a0f95d820b8ae2011616f2f5160581 extends Twig_Template
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
        $__internal_fef8229da28a3af0a4846e74583c385e3dd94c81c8aa6b9acfaa6396a5993c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef8229da28a3af0a4846e74583c385e3dd94c81c8aa6b9acfaa6396a5993c9c->enter($__internal_fef8229da28a3af0a4846e74583c385e3dd94c81c8aa6b9acfaa6396a5993c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3814cebea8e6c3223f13bf67c01c633e76a05482fa10e996696c1e14159915f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3814cebea8e6c3223f13bf67c01c633e76a05482fa10e996696c1e14159915f7->enter($__internal_3814cebea8e6c3223f13bf67c01c633e76a05482fa10e996696c1e14159915f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fef8229da28a3af0a4846e74583c385e3dd94c81c8aa6b9acfaa6396a5993c9c->leave($__internal_fef8229da28a3af0a4846e74583c385e3dd94c81c8aa6b9acfaa6396a5993c9c_prof);

        
        $__internal_3814cebea8e6c3223f13bf67c01c633e76a05482fa10e996696c1e14159915f7->leave($__internal_3814cebea8e6c3223f13bf67c01c633e76a05482fa10e996696c1e14159915f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
