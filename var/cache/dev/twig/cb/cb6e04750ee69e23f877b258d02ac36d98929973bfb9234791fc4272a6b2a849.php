<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1969fac615b287854a5611ff8f1403ce2a983e9a177905c534f836b5cd890a1e extends Twig_Template
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
        $__internal_ae003927a3a3967fff0e9b0c141880caf78c3c73652eb20633cd8a12e3cb7999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae003927a3a3967fff0e9b0c141880caf78c3c73652eb20633cd8a12e3cb7999->enter($__internal_ae003927a3a3967fff0e9b0c141880caf78c3c73652eb20633cd8a12e3cb7999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_89720d6e5269125cac1a37b1d2a092f7ef0e289c2620617c475e2649cdc04ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89720d6e5269125cac1a37b1d2a092f7ef0e289c2620617c475e2649cdc04ec5->enter($__internal_89720d6e5269125cac1a37b1d2a092f7ef0e289c2620617c475e2649cdc04ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ae003927a3a3967fff0e9b0c141880caf78c3c73652eb20633cd8a12e3cb7999->leave($__internal_ae003927a3a3967fff0e9b0c141880caf78c3c73652eb20633cd8a12e3cb7999_prof);

        
        $__internal_89720d6e5269125cac1a37b1d2a092f7ef0e289c2620617c475e2649cdc04ec5->leave($__internal_89720d6e5269125cac1a37b1d2a092f7ef0e289c2620617c475e2649cdc04ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
