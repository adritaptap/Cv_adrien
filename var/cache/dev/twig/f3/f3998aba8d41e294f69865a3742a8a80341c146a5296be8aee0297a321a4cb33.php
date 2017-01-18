<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9d55a04871ac08a62fa51bd28c63862139159686ad5b72138b6d17bed0a8c97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_209ea6126f45dc746ad94af8e0a1dace9bd8af5271b2d8417ca5c0899b827ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209ea6126f45dc746ad94af8e0a1dace9bd8af5271b2d8417ca5c0899b827ede->enter($__internal_209ea6126f45dc746ad94af8e0a1dace9bd8af5271b2d8417ca5c0899b827ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3d28c69fabf8c6f790af13f5f6e54d612a50521f2e6a5cc4081a08a217fb5dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d28c69fabf8c6f790af13f5f6e54d612a50521f2e6a5cc4081a08a217fb5dde->enter($__internal_3d28c69fabf8c6f790af13f5f6e54d612a50521f2e6a5cc4081a08a217fb5dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209ea6126f45dc746ad94af8e0a1dace9bd8af5271b2d8417ca5c0899b827ede->leave($__internal_209ea6126f45dc746ad94af8e0a1dace9bd8af5271b2d8417ca5c0899b827ede_prof);

        
        $__internal_3d28c69fabf8c6f790af13f5f6e54d612a50521f2e6a5cc4081a08a217fb5dde->leave($__internal_3d28c69fabf8c6f790af13f5f6e54d612a50521f2e6a5cc4081a08a217fb5dde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46bc08ebe3cc4cd70cc617d71ef41ff8fd963576acb64df782a30dc2d33569d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bc08ebe3cc4cd70cc617d71ef41ff8fd963576acb64df782a30dc2d33569d7->enter($__internal_46bc08ebe3cc4cd70cc617d71ef41ff8fd963576acb64df782a30dc2d33569d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5200bfbe1866c74e0ff135609386ec51da00550f0d2624ad768c68c3c13ee7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5200bfbe1866c74e0ff135609386ec51da00550f0d2624ad768c68c3c13ee7fe->enter($__internal_5200bfbe1866c74e0ff135609386ec51da00550f0d2624ad768c68c3c13ee7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5200bfbe1866c74e0ff135609386ec51da00550f0d2624ad768c68c3c13ee7fe->leave($__internal_5200bfbe1866c74e0ff135609386ec51da00550f0d2624ad768c68c3c13ee7fe_prof);

        
        $__internal_46bc08ebe3cc4cd70cc617d71ef41ff8fd963576acb64df782a30dc2d33569d7->leave($__internal_46bc08ebe3cc4cd70cc617d71ef41ff8fd963576acb64df782a30dc2d33569d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
