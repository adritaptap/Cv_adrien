<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6c9a2d69d79bdc7f111fe4f0dbc274ac296248d8c59deb77bc07ef5d2bcf37d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_300b277ea80937238e98ef571464797200402180b2893d22b2a7064e6a2fbdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300b277ea80937238e98ef571464797200402180b2893d22b2a7064e6a2fbdc7->enter($__internal_300b277ea80937238e98ef571464797200402180b2893d22b2a7064e6a2fbdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8e5955c9cb61b826195e3b94041e9bc5f0053cc1944f0a844571fd43757712d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5955c9cb61b826195e3b94041e9bc5f0053cc1944f0a844571fd43757712d2->enter($__internal_8e5955c9cb61b826195e3b94041e9bc5f0053cc1944f0a844571fd43757712d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300b277ea80937238e98ef571464797200402180b2893d22b2a7064e6a2fbdc7->leave($__internal_300b277ea80937238e98ef571464797200402180b2893d22b2a7064e6a2fbdc7_prof);

        
        $__internal_8e5955c9cb61b826195e3b94041e9bc5f0053cc1944f0a844571fd43757712d2->leave($__internal_8e5955c9cb61b826195e3b94041e9bc5f0053cc1944f0a844571fd43757712d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5466377d497e1419fdf24f7f420575102d50333c30745344685a87cfc0830116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5466377d497e1419fdf24f7f420575102d50333c30745344685a87cfc0830116->enter($__internal_5466377d497e1419fdf24f7f420575102d50333c30745344685a87cfc0830116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83b673d351d043f15e6d380741189fbfd79885692c3daa6d6d6633f8b27a4f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b673d351d043f15e6d380741189fbfd79885692c3daa6d6d6633f8b27a4f46->enter($__internal_83b673d351d043f15e6d380741189fbfd79885692c3daa6d6d6633f8b27a4f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_83b673d351d043f15e6d380741189fbfd79885692c3daa6d6d6633f8b27a4f46->leave($__internal_83b673d351d043f15e6d380741189fbfd79885692c3daa6d6d6633f8b27a4f46_prof);

        
        $__internal_5466377d497e1419fdf24f7f420575102d50333c30745344685a87cfc0830116->leave($__internal_5466377d497e1419fdf24f7f420575102d50333c30745344685a87cfc0830116_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_914cff70c3d206de99a8d4da307f167a23cb9cc8ec614e093560fad72b50d24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914cff70c3d206de99a8d4da307f167a23cb9cc8ec614e093560fad72b50d24b->enter($__internal_914cff70c3d206de99a8d4da307f167a23cb9cc8ec614e093560fad72b50d24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91482665b8a7090fc6120fe33da403e8fde7220360d715fbc2a7944efca41d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91482665b8a7090fc6120fe33da403e8fde7220360d715fbc2a7944efca41d1c->enter($__internal_91482665b8a7090fc6120fe33da403e8fde7220360d715fbc2a7944efca41d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_91482665b8a7090fc6120fe33da403e8fde7220360d715fbc2a7944efca41d1c->leave($__internal_91482665b8a7090fc6120fe33da403e8fde7220360d715fbc2a7944efca41d1c_prof);

        
        $__internal_914cff70c3d206de99a8d4da307f167a23cb9cc8ec614e093560fad72b50d24b->leave($__internal_914cff70c3d206de99a8d4da307f167a23cb9cc8ec614e093560fad72b50d24b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
