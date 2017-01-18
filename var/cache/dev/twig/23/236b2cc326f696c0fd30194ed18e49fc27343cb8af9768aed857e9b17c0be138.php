<?php

/* base.html.twig */
class __TwigTemplate_a392f7769ec450ab796128d3b68fc53a4916f3cb20ef0fc3f651dca19fcb2bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a5f18bc480b1b29bda6835882e39200c7af460c6e362270a6a35f5323246aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a5f18bc480b1b29bda6835882e39200c7af460c6e362270a6a35f5323246aa->enter($__internal_c8a5f18bc480b1b29bda6835882e39200c7af460c6e362270a6a35f5323246aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b412c9b616cd52ba1e9eaecb59ca709b8a4b2214bb529335951f310c021b8485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b412c9b616cd52ba1e9eaecb59ca709b8a4b2214bb529335951f310c021b8485->enter($__internal_b412c9b616cd52ba1e9eaecb59ca709b8a4b2214bb529335951f310c021b8485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c8a5f18bc480b1b29bda6835882e39200c7af460c6e362270a6a35f5323246aa->leave($__internal_c8a5f18bc480b1b29bda6835882e39200c7af460c6e362270a6a35f5323246aa_prof);

        
        $__internal_b412c9b616cd52ba1e9eaecb59ca709b8a4b2214bb529335951f310c021b8485->leave($__internal_b412c9b616cd52ba1e9eaecb59ca709b8a4b2214bb529335951f310c021b8485_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8525ba357098cc5a5c3e537a34b4c634c6448db927b3cc4f8df72de55c2b75ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8525ba357098cc5a5c3e537a34b4c634c6448db927b3cc4f8df72de55c2b75ce->enter($__internal_8525ba357098cc5a5c3e537a34b4c634c6448db927b3cc4f8df72de55c2b75ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dc55488014dd3fb48bea737c2d8b025815902a40aa346125e4eef1bae816676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc55488014dd3fb48bea737c2d8b025815902a40aa346125e4eef1bae816676->enter($__internal_0dc55488014dd3fb48bea737c2d8b025815902a40aa346125e4eef1bae816676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0dc55488014dd3fb48bea737c2d8b025815902a40aa346125e4eef1bae816676->leave($__internal_0dc55488014dd3fb48bea737c2d8b025815902a40aa346125e4eef1bae816676_prof);

        
        $__internal_8525ba357098cc5a5c3e537a34b4c634c6448db927b3cc4f8df72de55c2b75ce->leave($__internal_8525ba357098cc5a5c3e537a34b4c634c6448db927b3cc4f8df72de55c2b75ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9fea99fca88b99c709f1f47293fca379c1e6f40cd2698019faaf3bdf89d5c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fea99fca88b99c709f1f47293fca379c1e6f40cd2698019faaf3bdf89d5c01->enter($__internal_b9fea99fca88b99c709f1f47293fca379c1e6f40cd2698019faaf3bdf89d5c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df6d7d721278b84948a08ce41082e494d62a9ae039247134bb298f781e852135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6d7d721278b84948a08ce41082e494d62a9ae039247134bb298f781e852135->enter($__internal_df6d7d721278b84948a08ce41082e494d62a9ae039247134bb298f781e852135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df6d7d721278b84948a08ce41082e494d62a9ae039247134bb298f781e852135->leave($__internal_df6d7d721278b84948a08ce41082e494d62a9ae039247134bb298f781e852135_prof);

        
        $__internal_b9fea99fca88b99c709f1f47293fca379c1e6f40cd2698019faaf3bdf89d5c01->leave($__internal_b9fea99fca88b99c709f1f47293fca379c1e6f40cd2698019faaf3bdf89d5c01_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f06cf3dde648d2f29d39e1b3aa77d9821b0a7921beefd888252ab70e9bd8c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f06cf3dde648d2f29d39e1b3aa77d9821b0a7921beefd888252ab70e9bd8c99->enter($__internal_4f06cf3dde648d2f29d39e1b3aa77d9821b0a7921beefd888252ab70e9bd8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5837dc76fa6f556422030ab31e7dc52d180d7d3129b1b9d88e29407d2091327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5837dc76fa6f556422030ab31e7dc52d180d7d3129b1b9d88e29407d2091327->enter($__internal_f5837dc76fa6f556422030ab31e7dc52d180d7d3129b1b9d88e29407d2091327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5837dc76fa6f556422030ab31e7dc52d180d7d3129b1b9d88e29407d2091327->leave($__internal_f5837dc76fa6f556422030ab31e7dc52d180d7d3129b1b9d88e29407d2091327_prof);

        
        $__internal_4f06cf3dde648d2f29d39e1b3aa77d9821b0a7921beefd888252ab70e9bd8c99->leave($__internal_4f06cf3dde648d2f29d39e1b3aa77d9821b0a7921beefd888252ab70e9bd8c99_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb177b7ce9644bd9ac05402df40ff29b9e01a6af2dee9ae5af97827648d87650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb177b7ce9644bd9ac05402df40ff29b9e01a6af2dee9ae5af97827648d87650->enter($__internal_cb177b7ce9644bd9ac05402df40ff29b9e01a6af2dee9ae5af97827648d87650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba30f135e5b53055a55054e74a0dc5e496ae93255cb803563fb54442f79c47a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba30f135e5b53055a55054e74a0dc5e496ae93255cb803563fb54442f79c47a7->enter($__internal_ba30f135e5b53055a55054e74a0dc5e496ae93255cb803563fb54442f79c47a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba30f135e5b53055a55054e74a0dc5e496ae93255cb803563fb54442f79c47a7->leave($__internal_ba30f135e5b53055a55054e74a0dc5e496ae93255cb803563fb54442f79c47a7_prof);

        
        $__internal_cb177b7ce9644bd9ac05402df40ff29b9e01a6af2dee9ae5af97827648d87650->leave($__internal_cb177b7ce9644bd9ac05402df40ff29b9e01a6af2dee9ae5af97827648d87650_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/Adrien/Cv_adrien/app/Resources/views/base.html.twig");
    }
}
