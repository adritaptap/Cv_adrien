<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ed1d8cd9cec2af9c7034bf3fded31a3f95e1d31a618fd154ed88bedcaa2ce9b1 extends Twig_Template
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
        $__internal_0e5600591db37d6bfa30bd39deeb093b43d3be574906510e9ada1dad3520ab37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5600591db37d6bfa30bd39deeb093b43d3be574906510e9ada1dad3520ab37->enter($__internal_0e5600591db37d6bfa30bd39deeb093b43d3be574906510e9ada1dad3520ab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_392f301d83fc46204582b6ce17ee4b682d5a9cba18ea8e87b445b39af25a7328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392f301d83fc46204582b6ce17ee4b682d5a9cba18ea8e87b445b39af25a7328->enter($__internal_392f301d83fc46204582b6ce17ee4b682d5a9cba18ea8e87b445b39af25a7328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0e5600591db37d6bfa30bd39deeb093b43d3be574906510e9ada1dad3520ab37->leave($__internal_0e5600591db37d6bfa30bd39deeb093b43d3be574906510e9ada1dad3520ab37_prof);

        
        $__internal_392f301d83fc46204582b6ce17ee4b682d5a9cba18ea8e87b445b39af25a7328->leave($__internal_392f301d83fc46204582b6ce17ee4b682d5a9cba18ea8e87b445b39af25a7328_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
