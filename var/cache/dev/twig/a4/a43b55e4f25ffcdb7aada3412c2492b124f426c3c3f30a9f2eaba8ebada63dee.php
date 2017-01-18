<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_992582c1b26ac3a817b40a64a5fc39d7c3c9e2617727b9c0e0ac6e7ea304c906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf8ef14f970201075fabc41717ea6450acce13174bd9366047b7447c2864322b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8ef14f970201075fabc41717ea6450acce13174bd9366047b7447c2864322b->enter($__internal_cf8ef14f970201075fabc41717ea6450acce13174bd9366047b7447c2864322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_42376a329a561a6b5bf35ab78c193c67a362ea90815fb53c0285e918d251ca51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42376a329a561a6b5bf35ab78c193c67a362ea90815fb53c0285e918d251ca51->enter($__internal_42376a329a561a6b5bf35ab78c193c67a362ea90815fb53c0285e918d251ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf8ef14f970201075fabc41717ea6450acce13174bd9366047b7447c2864322b->leave($__internal_cf8ef14f970201075fabc41717ea6450acce13174bd9366047b7447c2864322b_prof);

        
        $__internal_42376a329a561a6b5bf35ab78c193c67a362ea90815fb53c0285e918d251ca51->leave($__internal_42376a329a561a6b5bf35ab78c193c67a362ea90815fb53c0285e918d251ca51_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2733bff56085f7df1f11709dca4562a8d1d6ecaed4d5df19b0737244f5ddfe7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2733bff56085f7df1f11709dca4562a8d1d6ecaed4d5df19b0737244f5ddfe7a->enter($__internal_2733bff56085f7df1f11709dca4562a8d1d6ecaed4d5df19b0737244f5ddfe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_17d826be94c401b3bfe0ff021e609ff8a5fee891bf045de04e6ab95f11d51054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d826be94c401b3bfe0ff021e609ff8a5fee891bf045de04e6ab95f11d51054->enter($__internal_17d826be94c401b3bfe0ff021e609ff8a5fee891bf045de04e6ab95f11d51054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_17d826be94c401b3bfe0ff021e609ff8a5fee891bf045de04e6ab95f11d51054->leave($__internal_17d826be94c401b3bfe0ff021e609ff8a5fee891bf045de04e6ab95f11d51054_prof);

        
        $__internal_2733bff56085f7df1f11709dca4562a8d1d6ecaed4d5df19b0737244f5ddfe7a->leave($__internal_2733bff56085f7df1f11709dca4562a8d1d6ecaed4d5df19b0737244f5ddfe7a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44ba4008d7ca92b3dc50f756e560f2cd4c2591fb8a5d1f0c6f6e5d459a22f7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ba4008d7ca92b3dc50f756e560f2cd4c2591fb8a5d1f0c6f6e5d459a22f7a3->enter($__internal_44ba4008d7ca92b3dc50f756e560f2cd4c2591fb8a5d1f0c6f6e5d459a22f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42346044726a87aee8c7fa29522b6d24d3db3064f741a69156c1f46afdf0ba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42346044726a87aee8c7fa29522b6d24d3db3064f741a69156c1f46afdf0ba57->enter($__internal_42346044726a87aee8c7fa29522b6d24d3db3064f741a69156c1f46afdf0ba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_42346044726a87aee8c7fa29522b6d24d3db3064f741a69156c1f46afdf0ba57->leave($__internal_42346044726a87aee8c7fa29522b6d24d3db3064f741a69156c1f46afdf0ba57_prof);

        
        $__internal_44ba4008d7ca92b3dc50f756e560f2cd4c2591fb8a5d1f0c6f6e5d459a22f7a3->leave($__internal_44ba4008d7ca92b3dc50f756e560f2cd4c2591fb8a5d1f0c6f6e5d459a22f7a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
