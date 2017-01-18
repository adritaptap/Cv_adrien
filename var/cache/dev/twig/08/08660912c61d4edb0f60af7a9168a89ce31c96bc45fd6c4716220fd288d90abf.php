<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5210f02cd81799e4cd75b7fac657e88e9b9c7aa20c37b85cf796b090994cdddd extends Twig_Template
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
        $__internal_5d4f99db3fa0d16bc28b13adfcab1770b1cd5562b40aad3a1ea3b80c38762c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f99db3fa0d16bc28b13adfcab1770b1cd5562b40aad3a1ea3b80c38762c72->enter($__internal_5d4f99db3fa0d16bc28b13adfcab1770b1cd5562b40aad3a1ea3b80c38762c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0fb9bdbd0a2fa5e4b9da6fecfab4be336444f185ab38c206a0abdc84433684c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb9bdbd0a2fa5e4b9da6fecfab4be336444f185ab38c206a0abdc84433684c5->enter($__internal_0fb9bdbd0a2fa5e4b9da6fecfab4be336444f185ab38c206a0abdc84433684c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5d4f99db3fa0d16bc28b13adfcab1770b1cd5562b40aad3a1ea3b80c38762c72->leave($__internal_5d4f99db3fa0d16bc28b13adfcab1770b1cd5562b40aad3a1ea3b80c38762c72_prof);

        
        $__internal_0fb9bdbd0a2fa5e4b9da6fecfab4be336444f185ab38c206a0abdc84433684c5->leave($__internal_0fb9bdbd0a2fa5e4b9da6fecfab4be336444f185ab38c206a0abdc84433684c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
