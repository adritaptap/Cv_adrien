<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_64e43364a30749df382120b5e56d250ec2553681f06e768f685988e8db84de18 extends Twig_Template
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
        $__internal_ed9630e16e524c2f3892098fe2ce565946e6f3da58af826e8fa993276d789b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9630e16e524c2f3892098fe2ce565946e6f3da58af826e8fa993276d789b20->enter($__internal_ed9630e16e524c2f3892098fe2ce565946e6f3da58af826e8fa993276d789b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fad3b7f1986e077972c71de3a9c2d1f4d2adaa42c112a4279147bbe1ccfde8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad3b7f1986e077972c71de3a9c2d1f4d2adaa42c112a4279147bbe1ccfde8dd->enter($__internal_fad3b7f1986e077972c71de3a9c2d1f4d2adaa42c112a4279147bbe1ccfde8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ed9630e16e524c2f3892098fe2ce565946e6f3da58af826e8fa993276d789b20->leave($__internal_ed9630e16e524c2f3892098fe2ce565946e6f3da58af826e8fa993276d789b20_prof);

        
        $__internal_fad3b7f1986e077972c71de3a9c2d1f4d2adaa42c112a4279147bbe1ccfde8dd->leave($__internal_fad3b7f1986e077972c71de3a9c2d1f4d2adaa42c112a4279147bbe1ccfde8dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
