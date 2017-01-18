<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e4b26b27834f3e9e68a7be7e51f4bda15886912e6308fecb8fc52118fbb74d86 extends Twig_Template
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
        $__internal_5bd60803a8a6c3a8ea21187c56b0b30b26607deef1060d93835c90f1527b0516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd60803a8a6c3a8ea21187c56b0b30b26607deef1060d93835c90f1527b0516->enter($__internal_5bd60803a8a6c3a8ea21187c56b0b30b26607deef1060d93835c90f1527b0516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d9350713b85352cdbc478622ccfaed0a59ea69b8444bd6bcb416d15d6249091e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9350713b85352cdbc478622ccfaed0a59ea69b8444bd6bcb416d15d6249091e->enter($__internal_d9350713b85352cdbc478622ccfaed0a59ea69b8444bd6bcb416d15d6249091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5bd60803a8a6c3a8ea21187c56b0b30b26607deef1060d93835c90f1527b0516->leave($__internal_5bd60803a8a6c3a8ea21187c56b0b30b26607deef1060d93835c90f1527b0516_prof);

        
        $__internal_d9350713b85352cdbc478622ccfaed0a59ea69b8444bd6bcb416d15d6249091e->leave($__internal_d9350713b85352cdbc478622ccfaed0a59ea69b8444bd6bcb416d15d6249091e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
