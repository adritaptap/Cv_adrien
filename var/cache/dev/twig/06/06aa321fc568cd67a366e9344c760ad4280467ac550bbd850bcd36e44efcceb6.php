<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_345eb0b9a957753dc7dccec56b649908c6129bfcd7cc71db93309afd7eec1e62 extends Twig_Template
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
        $__internal_37e48ddcb5c31fc34621e2f10b4b6c8391104341165f3a60db09c1682bc7b69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e48ddcb5c31fc34621e2f10b4b6c8391104341165f3a60db09c1682bc7b69b->enter($__internal_37e48ddcb5c31fc34621e2f10b4b6c8391104341165f3a60db09c1682bc7b69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2f73e423ba6a99a32670f9d17b5c11644bf710e549e7327705b6fafa6748f89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f73e423ba6a99a32670f9d17b5c11644bf710e549e7327705b6fafa6748f89f->enter($__internal_2f73e423ba6a99a32670f9d17b5c11644bf710e549e7327705b6fafa6748f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_37e48ddcb5c31fc34621e2f10b4b6c8391104341165f3a60db09c1682bc7b69b->leave($__internal_37e48ddcb5c31fc34621e2f10b4b6c8391104341165f3a60db09c1682bc7b69b_prof);

        
        $__internal_2f73e423ba6a99a32670f9d17b5c11644bf710e549e7327705b6fafa6748f89f->leave($__internal_2f73e423ba6a99a32670f9d17b5c11644bf710e549e7327705b6fafa6748f89f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
