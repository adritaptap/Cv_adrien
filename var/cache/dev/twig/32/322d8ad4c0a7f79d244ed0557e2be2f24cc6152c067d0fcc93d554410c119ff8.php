<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0cf6ba4002ad4224308cfe09dbf521595dfa72d1edac9fb7b3b91b1374bc1ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f1f85ccd07a75be980b0bbfb3e6db9576e44076df623f728468f4062f5d3b847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f85ccd07a75be980b0bbfb3e6db9576e44076df623f728468f4062f5d3b847->enter($__internal_f1f85ccd07a75be980b0bbfb3e6db9576e44076df623f728468f4062f5d3b847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a41fede19c18736552ea0753df88ae20955bd7ee1096fcc360348e7493e7f12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41fede19c18736552ea0753df88ae20955bd7ee1096fcc360348e7493e7f12d->enter($__internal_a41fede19c18736552ea0753df88ae20955bd7ee1096fcc360348e7493e7f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f85ccd07a75be980b0bbfb3e6db9576e44076df623f728468f4062f5d3b847->leave($__internal_f1f85ccd07a75be980b0bbfb3e6db9576e44076df623f728468f4062f5d3b847_prof);

        
        $__internal_a41fede19c18736552ea0753df88ae20955bd7ee1096fcc360348e7493e7f12d->leave($__internal_a41fede19c18736552ea0753df88ae20955bd7ee1096fcc360348e7493e7f12d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_069d8af4f37c6dafce0cc02ac19d444bc922e76d444ac2a9df2bfd10e2739782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069d8af4f37c6dafce0cc02ac19d444bc922e76d444ac2a9df2bfd10e2739782->enter($__internal_069d8af4f37c6dafce0cc02ac19d444bc922e76d444ac2a9df2bfd10e2739782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c9e796c8710c2e82829e1e6ee7b010218ef3fa3105f5c490974cefaa027401d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9e796c8710c2e82829e1e6ee7b010218ef3fa3105f5c490974cefaa027401d->enter($__internal_4c9e796c8710c2e82829e1e6ee7b010218ef3fa3105f5c490974cefaa027401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4c9e796c8710c2e82829e1e6ee7b010218ef3fa3105f5c490974cefaa027401d->leave($__internal_4c9e796c8710c2e82829e1e6ee7b010218ef3fa3105f5c490974cefaa027401d_prof);

        
        $__internal_069d8af4f37c6dafce0cc02ac19d444bc922e76d444ac2a9df2bfd10e2739782->leave($__internal_069d8af4f37c6dafce0cc02ac19d444bc922e76d444ac2a9df2bfd10e2739782_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_17b9203478b03eaaa808c2d8a9daa469b63170136e2d0e4cc8dba967cb29b9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b9203478b03eaaa808c2d8a9daa469b63170136e2d0e4cc8dba967cb29b9af->enter($__internal_17b9203478b03eaaa808c2d8a9daa469b63170136e2d0e4cc8dba967cb29b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93d84477a67f809eb5cf25f6b2cf7a841dbf8abda2e743f4e35e040c23ddc186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d84477a67f809eb5cf25f6b2cf7a841dbf8abda2e743f4e35e040c23ddc186->enter($__internal_93d84477a67f809eb5cf25f6b2cf7a841dbf8abda2e743f4e35e040c23ddc186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93d84477a67f809eb5cf25f6b2cf7a841dbf8abda2e743f4e35e040c23ddc186->leave($__internal_93d84477a67f809eb5cf25f6b2cf7a841dbf8abda2e743f4e35e040c23ddc186_prof);

        
        $__internal_17b9203478b03eaaa808c2d8a9daa469b63170136e2d0e4cc8dba967cb29b9af->leave($__internal_17b9203478b03eaaa808c2d8a9daa469b63170136e2d0e4cc8dba967cb29b9af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba2905bff62440bd2ee0f11988b1285b2a79d9937a6db83c4f87016f43ac871a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2905bff62440bd2ee0f11988b1285b2a79d9937a6db83c4f87016f43ac871a->enter($__internal_ba2905bff62440bd2ee0f11988b1285b2a79d9937a6db83c4f87016f43ac871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c16e43d9c30af4594819c4850ad99724b2fd9f99b1bd3129833fd55cac7c65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c16e43d9c30af4594819c4850ad99724b2fd9f99b1bd3129833fd55cac7c65c->enter($__internal_7c16e43d9c30af4594819c4850ad99724b2fd9f99b1bd3129833fd55cac7c65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c16e43d9c30af4594819c4850ad99724b2fd9f99b1bd3129833fd55cac7c65c->leave($__internal_7c16e43d9c30af4594819c4850ad99724b2fd9f99b1bd3129833fd55cac7c65c_prof);

        
        $__internal_ba2905bff62440bd2ee0f11988b1285b2a79d9937a6db83c4f87016f43ac871a->leave($__internal_ba2905bff62440bd2ee0f11988b1285b2a79d9937a6db83c4f87016f43ac871a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
