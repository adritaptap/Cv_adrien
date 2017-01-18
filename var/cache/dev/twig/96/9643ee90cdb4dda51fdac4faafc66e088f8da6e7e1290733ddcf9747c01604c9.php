<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_841cd138737fcef0f2b87a6b573bcdb8644f1c67db9aa5f5c30b44348d6bd67e extends Twig_Template
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
        $__internal_3db11206d4704ae4c994c0536ce812d2f98284510fec28b665b414a82fff3eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db11206d4704ae4c994c0536ce812d2f98284510fec28b665b414a82fff3eb3->enter($__internal_3db11206d4704ae4c994c0536ce812d2f98284510fec28b665b414a82fff3eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8676ca9997ac75faf1de1bba847890385458f94f641856c3494e36b5f77b15fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8676ca9997ac75faf1de1bba847890385458f94f641856c3494e36b5f77b15fa->enter($__internal_8676ca9997ac75faf1de1bba847890385458f94f641856c3494e36b5f77b15fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3db11206d4704ae4c994c0536ce812d2f98284510fec28b665b414a82fff3eb3->leave($__internal_3db11206d4704ae4c994c0536ce812d2f98284510fec28b665b414a82fff3eb3_prof);

        
        $__internal_8676ca9997ac75faf1de1bba847890385458f94f641856c3494e36b5f77b15fa->leave($__internal_8676ca9997ac75faf1de1bba847890385458f94f641856c3494e36b5f77b15fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
