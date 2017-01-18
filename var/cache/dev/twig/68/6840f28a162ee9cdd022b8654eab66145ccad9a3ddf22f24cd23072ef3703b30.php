<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8c66fc2cf2ab183fb447a6a3559531aee595f80a43501fdf04a6456bc77fc12d extends Twig_Template
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
        $__internal_a7d897943f6b3a2187583c6f3f3d05cc6357b12fa30dfed9059be1fc0f83b1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d897943f6b3a2187583c6f3f3d05cc6357b12fa30dfed9059be1fc0f83b1cc->enter($__internal_a7d897943f6b3a2187583c6f3f3d05cc6357b12fa30dfed9059be1fc0f83b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_5c82ddfbb03fe4c03bbad23e8f6ec6f274b06a257ad68c6ed2598a49b53caf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c82ddfbb03fe4c03bbad23e8f6ec6f274b06a257ad68c6ed2598a49b53caf4e->enter($__internal_5c82ddfbb03fe4c03bbad23e8f6ec6f274b06a257ad68c6ed2598a49b53caf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a7d897943f6b3a2187583c6f3f3d05cc6357b12fa30dfed9059be1fc0f83b1cc->leave($__internal_a7d897943f6b3a2187583c6f3f3d05cc6357b12fa30dfed9059be1fc0f83b1cc_prof);

        
        $__internal_5c82ddfbb03fe4c03bbad23e8f6ec6f274b06a257ad68c6ed2598a49b53caf4e->leave($__internal_5c82ddfbb03fe4c03bbad23e8f6ec6f274b06a257ad68c6ed2598a49b53caf4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
