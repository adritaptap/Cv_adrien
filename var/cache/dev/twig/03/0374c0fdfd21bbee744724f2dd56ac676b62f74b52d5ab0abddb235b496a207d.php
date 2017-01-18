<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_bf53eb830d48cf6c51cd33aa99ded0024a736da88322f4fcbd9c3b2631ed91a4 extends Twig_Template
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
        $__internal_47f09986a804c0f7ae8dc796fd34c2843e668176b07b1a9896f1cb9b7df7d113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f09986a804c0f7ae8dc796fd34c2843e668176b07b1a9896f1cb9b7df7d113->enter($__internal_47f09986a804c0f7ae8dc796fd34c2843e668176b07b1a9896f1cb9b7df7d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_6c2f054220bc88dc8550005cef4206045499ba06c239b2f2860f899d5790f6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2f054220bc88dc8550005cef4206045499ba06c239b2f2860f899d5790f6c0->enter($__internal_6c2f054220bc88dc8550005cef4206045499ba06c239b2f2860f899d5790f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_47f09986a804c0f7ae8dc796fd34c2843e668176b07b1a9896f1cb9b7df7d113->leave($__internal_47f09986a804c0f7ae8dc796fd34c2843e668176b07b1a9896f1cb9b7df7d113_prof);

        
        $__internal_6c2f054220bc88dc8550005cef4206045499ba06c239b2f2860f899d5790f6c0->leave($__internal_6c2f054220bc88dc8550005cef4206045499ba06c239b2f2860f899d5790f6c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
