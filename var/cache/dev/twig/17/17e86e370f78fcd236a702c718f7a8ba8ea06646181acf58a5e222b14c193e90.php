<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0b6b52afe5d64aa211c8a177d47a2d2b422632707b05c5e91cf6d420dacc5dbe extends Twig_Template
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
        $__internal_b62d4f87ee4def2f832817a5ff0801ccc9d9a07f098e23ec6910ccc0244e3c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62d4f87ee4def2f832817a5ff0801ccc9d9a07f098e23ec6910ccc0244e3c2a->enter($__internal_b62d4f87ee4def2f832817a5ff0801ccc9d9a07f098e23ec6910ccc0244e3c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2e426697339bba4d187a7f03af1a6941fad9431b54fb8bc5fc7a9bd84aac854b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e426697339bba4d187a7f03af1a6941fad9431b54fb8bc5fc7a9bd84aac854b->enter($__internal_2e426697339bba4d187a7f03af1a6941fad9431b54fb8bc5fc7a9bd84aac854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b62d4f87ee4def2f832817a5ff0801ccc9d9a07f098e23ec6910ccc0244e3c2a->leave($__internal_b62d4f87ee4def2f832817a5ff0801ccc9d9a07f098e23ec6910ccc0244e3c2a_prof);

        
        $__internal_2e426697339bba4d187a7f03af1a6941fad9431b54fb8bc5fc7a9bd84aac854b->leave($__internal_2e426697339bba4d187a7f03af1a6941fad9431b54fb8bc5fc7a9bd84aac854b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
