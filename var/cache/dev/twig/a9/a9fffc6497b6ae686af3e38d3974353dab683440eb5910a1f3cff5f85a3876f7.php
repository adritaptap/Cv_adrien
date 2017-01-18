<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ef27c0df4382ef65a0fb44a543f5a8780e2206af28ed63e6863aec565dd05b43 extends Twig_Template
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
        $__internal_183113bc1b25c12a30c7e0d76f2526bd1e8f7be007d0f9fcaa6ddabe40c8b462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183113bc1b25c12a30c7e0d76f2526bd1e8f7be007d0f9fcaa6ddabe40c8b462->enter($__internal_183113bc1b25c12a30c7e0d76f2526bd1e8f7be007d0f9fcaa6ddabe40c8b462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_ede80a65e6d9f305410ba6292be351d8fb1f4a9c6603dd7da406df87663e8754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede80a65e6d9f305410ba6292be351d8fb1f4a9c6603dd7da406df87663e8754->enter($__internal_ede80a65e6d9f305410ba6292be351d8fb1f4a9c6603dd7da406df87663e8754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_183113bc1b25c12a30c7e0d76f2526bd1e8f7be007d0f9fcaa6ddabe40c8b462->leave($__internal_183113bc1b25c12a30c7e0d76f2526bd1e8f7be007d0f9fcaa6ddabe40c8b462_prof);

        
        $__internal_ede80a65e6d9f305410ba6292be351d8fb1f4a9c6603dd7da406df87663e8754->leave($__internal_ede80a65e6d9f305410ba6292be351d8fb1f4a9c6603dd7da406df87663e8754_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
