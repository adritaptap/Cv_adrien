<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_62d4713c38f66c774d1c98af31c3b17d8f936b4b06791d9f1918d5eb1267f897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16417668c0eb828fea92437188988319611b94c9c776376ca81e409a1d5b3c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16417668c0eb828fea92437188988319611b94c9c776376ca81e409a1d5b3c69->enter($__internal_16417668c0eb828fea92437188988319611b94c9c776376ca81e409a1d5b3c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5f346a6384f29b4a77f7b8a62f0103a725f5109d883b137b7023309ada51e26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f346a6384f29b4a77f7b8a62f0103a725f5109d883b137b7023309ada51e26d->enter($__internal_5f346a6384f29b4a77f7b8a62f0103a725f5109d883b137b7023309ada51e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_16417668c0eb828fea92437188988319611b94c9c776376ca81e409a1d5b3c69->leave($__internal_16417668c0eb828fea92437188988319611b94c9c776376ca81e409a1d5b3c69_prof);

        
        $__internal_5f346a6384f29b4a77f7b8a62f0103a725f5109d883b137b7023309ada51e26d->leave($__internal_5f346a6384f29b4a77f7b8a62f0103a725f5109d883b137b7023309ada51e26d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae2f081bd19dc3a11fe07e808fe7474a2952ebde54534670e182dc09db302117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2f081bd19dc3a11fe07e808fe7474a2952ebde54534670e182dc09db302117->enter($__internal_ae2f081bd19dc3a11fe07e808fe7474a2952ebde54534670e182dc09db302117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5f0cde60c044bb81bb603ab2d08bed642eeac9e1652473c9fbe3a35cdafd0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f0cde60c044bb81bb603ab2d08bed642eeac9e1652473c9fbe3a35cdafd0ff->enter($__internal_b5f0cde60c044bb81bb603ab2d08bed642eeac9e1652473c9fbe3a35cdafd0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5f0cde60c044bb81bb603ab2d08bed642eeac9e1652473c9fbe3a35cdafd0ff->leave($__internal_b5f0cde60c044bb81bb603ab2d08bed642eeac9e1652473c9fbe3a35cdafd0ff_prof);

        
        $__internal_ae2f081bd19dc3a11fe07e808fe7474a2952ebde54534670e182dc09db302117->leave($__internal_ae2f081bd19dc3a11fe07e808fe7474a2952ebde54534670e182dc09db302117_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
