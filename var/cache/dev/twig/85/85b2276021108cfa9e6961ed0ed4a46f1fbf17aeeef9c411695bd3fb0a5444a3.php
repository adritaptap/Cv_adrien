<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_47d493341328ae5d5bb3dfe41bd0b8933417149d3b0ad5d3f80d32d45571ef73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a3218e51e6f10ab130dd0275e90dca2c595c5a99fe38d3bb28be34431b2486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a3218e51e6f10ab130dd0275e90dca2c595c5a99fe38d3bb28be34431b2486->enter($__internal_55a3218e51e6f10ab130dd0275e90dca2c595c5a99fe38d3bb28be34431b2486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f9a72bea3a2444733b86d80bb084edfa740a8b662e51929a1de8108ecd7ed1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a72bea3a2444733b86d80bb084edfa740a8b662e51929a1de8108ecd7ed1f1->enter($__internal_f9a72bea3a2444733b86d80bb084edfa740a8b662e51929a1de8108ecd7ed1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a3218e51e6f10ab130dd0275e90dca2c595c5a99fe38d3bb28be34431b2486->leave($__internal_55a3218e51e6f10ab130dd0275e90dca2c595c5a99fe38d3bb28be34431b2486_prof);

        
        $__internal_f9a72bea3a2444733b86d80bb084edfa740a8b662e51929a1de8108ecd7ed1f1->leave($__internal_f9a72bea3a2444733b86d80bb084edfa740a8b662e51929a1de8108ecd7ed1f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da8f086c60c3738edbe79c3fce82a092bd2c21e85a5d37dda313ddf7f0ab9278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8f086c60c3738edbe79c3fce82a092bd2c21e85a5d37dda313ddf7f0ab9278->enter($__internal_da8f086c60c3738edbe79c3fce82a092bd2c21e85a5d37dda313ddf7f0ab9278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17e38f65826e2c507f778ec44a3d940806954755ed152fbdec6413b7770b593f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e38f65826e2c507f778ec44a3d940806954755ed152fbdec6413b7770b593f->enter($__internal_17e38f65826e2c507f778ec44a3d940806954755ed152fbdec6413b7770b593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17e38f65826e2c507f778ec44a3d940806954755ed152fbdec6413b7770b593f->leave($__internal_17e38f65826e2c507f778ec44a3d940806954755ed152fbdec6413b7770b593f_prof);

        
        $__internal_da8f086c60c3738edbe79c3fce82a092bd2c21e85a5d37dda313ddf7f0ab9278->leave($__internal_da8f086c60c3738edbe79c3fce82a092bd2c21e85a5d37dda313ddf7f0ab9278_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a746aaa4acdb8d2a1a061dc62934a74115283afb6002a7976b1a71985267b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a746aaa4acdb8d2a1a061dc62934a74115283afb6002a7976b1a71985267b65->enter($__internal_9a746aaa4acdb8d2a1a061dc62934a74115283afb6002a7976b1a71985267b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f09742995489d03eb67523191245e3617c1d0c61cd4379ba3aabcb9695204c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f09742995489d03eb67523191245e3617c1d0c61cd4379ba3aabcb9695204c1->enter($__internal_4f09742995489d03eb67523191245e3617c1d0c61cd4379ba3aabcb9695204c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4f09742995489d03eb67523191245e3617c1d0c61cd4379ba3aabcb9695204c1->leave($__internal_4f09742995489d03eb67523191245e3617c1d0c61cd4379ba3aabcb9695204c1_prof);

        
        $__internal_9a746aaa4acdb8d2a1a061dc62934a74115283afb6002a7976b1a71985267b65->leave($__internal_9a746aaa4acdb8d2a1a061dc62934a74115283afb6002a7976b1a71985267b65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
