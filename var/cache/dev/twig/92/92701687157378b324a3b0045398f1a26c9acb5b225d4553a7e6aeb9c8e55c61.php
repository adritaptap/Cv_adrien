<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c9702a94a79d9bd2c10e6cefbe9db821f7601959cdd4ba096281384507750f47 extends Twig_Template
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
        $__internal_138cc885a587fa09689fa89243ae3eeb61c6b550ef909ce3eed7d072bd74e4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138cc885a587fa09689fa89243ae3eeb61c6b550ef909ce3eed7d072bd74e4bc->enter($__internal_138cc885a587fa09689fa89243ae3eeb61c6b550ef909ce3eed7d072bd74e4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1b549d6824a418d9a26a9092d263c33c023d87c765f50a04980ecdc89de1a088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b549d6824a418d9a26a9092d263c33c023d87c765f50a04980ecdc89de1a088->enter($__internal_1b549d6824a418d9a26a9092d263c33c023d87c765f50a04980ecdc89de1a088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_138cc885a587fa09689fa89243ae3eeb61c6b550ef909ce3eed7d072bd74e4bc->leave($__internal_138cc885a587fa09689fa89243ae3eeb61c6b550ef909ce3eed7d072bd74e4bc_prof);

        
        $__internal_1b549d6824a418d9a26a9092d263c33c023d87c765f50a04980ecdc89de1a088->leave($__internal_1b549d6824a418d9a26a9092d263c33c023d87c765f50a04980ecdc89de1a088_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
