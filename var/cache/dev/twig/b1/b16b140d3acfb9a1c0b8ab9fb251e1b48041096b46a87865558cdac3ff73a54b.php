<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_46a82236de442f5a519aa1b09533135b887023269b0b11145d4b0a98ae20a64c extends Twig_Template
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
        $__internal_87f0339217fc62d1cdd436f54c133578a32b079f8f13be773849c7d1a091d5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f0339217fc62d1cdd436f54c133578a32b079f8f13be773849c7d1a091d5b5->enter($__internal_87f0339217fc62d1cdd436f54c133578a32b079f8f13be773849c7d1a091d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_fab2ee452e2d7a5c7fe5bdd0a394025ccbf677e3dce02375ed472de3e95c5910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab2ee452e2d7a5c7fe5bdd0a394025ccbf677e3dce02375ed472de3e95c5910->enter($__internal_fab2ee452e2d7a5c7fe5bdd0a394025ccbf677e3dce02375ed472de3e95c5910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_87f0339217fc62d1cdd436f54c133578a32b079f8f13be773849c7d1a091d5b5->leave($__internal_87f0339217fc62d1cdd436f54c133578a32b079f8f13be773849c7d1a091d5b5_prof);

        
        $__internal_fab2ee452e2d7a5c7fe5bdd0a394025ccbf677e3dce02375ed472de3e95c5910->leave($__internal_fab2ee452e2d7a5c7fe5bdd0a394025ccbf677e3dce02375ed472de3e95c5910_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
