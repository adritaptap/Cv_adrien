<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_13146f4c64e2485822a66662c6384ce243d96923fab1898c824a33ae78c89c47 extends Twig_Template
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
        $__internal_3ed4a7ec71effb584caa264f47aea827c7e2b27dd9cfd254d21edd10fef51567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed4a7ec71effb584caa264f47aea827c7e2b27dd9cfd254d21edd10fef51567->enter($__internal_3ed4a7ec71effb584caa264f47aea827c7e2b27dd9cfd254d21edd10fef51567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a8340a46b450f74d786439b321a4a27a2dc5ad2793132bfa752b7f2b029327c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8340a46b450f74d786439b321a4a27a2dc5ad2793132bfa752b7f2b029327c6->enter($__internal_a8340a46b450f74d786439b321a4a27a2dc5ad2793132bfa752b7f2b029327c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3ed4a7ec71effb584caa264f47aea827c7e2b27dd9cfd254d21edd10fef51567->leave($__internal_3ed4a7ec71effb584caa264f47aea827c7e2b27dd9cfd254d21edd10fef51567_prof);

        
        $__internal_a8340a46b450f74d786439b321a4a27a2dc5ad2793132bfa752b7f2b029327c6->leave($__internal_a8340a46b450f74d786439b321a4a27a2dc5ad2793132bfa752b7f2b029327c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
