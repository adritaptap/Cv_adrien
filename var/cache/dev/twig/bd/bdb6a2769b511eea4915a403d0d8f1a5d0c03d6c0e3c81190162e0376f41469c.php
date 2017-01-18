<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b62c2984b97ac1a6f87200940f53eaec4627afcc81aa7b105f9e9c61383f22ee extends Twig_Template
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
        $__internal_857ba2d6d9e611d6b2ed99e3ee433f836a6fd4d30b1f893c6ed564845563bbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857ba2d6d9e611d6b2ed99e3ee433f836a6fd4d30b1f893c6ed564845563bbe3->enter($__internal_857ba2d6d9e611d6b2ed99e3ee433f836a6fd4d30b1f893c6ed564845563bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_e5fe5148386f45a0054ce14045d202e816637d14a0cb1517e05e1f37bb8b9a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fe5148386f45a0054ce14045d202e816637d14a0cb1517e05e1f37bb8b9a6b->enter($__internal_e5fe5148386f45a0054ce14045d202e816637d14a0cb1517e05e1f37bb8b9a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_857ba2d6d9e611d6b2ed99e3ee433f836a6fd4d30b1f893c6ed564845563bbe3->leave($__internal_857ba2d6d9e611d6b2ed99e3ee433f836a6fd4d30b1f893c6ed564845563bbe3_prof);

        
        $__internal_e5fe5148386f45a0054ce14045d202e816637d14a0cb1517e05e1f37bb8b9a6b->leave($__internal_e5fe5148386f45a0054ce14045d202e816637d14a0cb1517e05e1f37bb8b9a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
