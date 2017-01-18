<?php

/* layout.html.twig */
class __TwigTemplate_9b6db6e2c70ca62ac4514150d861f28595cf9fb4eb7d1514f91b69e268b1f983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e4846cbd701f9cd0da8a9eb7c2bebb1ef66c1d71578d413576f77bd56d6c153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4846cbd701f9cd0da8a9eb7c2bebb1ef66c1d71578d413576f77bd56d6c153->enter($__internal_3e4846cbd701f9cd0da8a9eb7c2bebb1ef66c1d71578d413576f77bd56d6c153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_dfec8bc772aeab436df16a746bace33356bd387d0c86ced7416ae95be9fc7cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfec8bc772aeab436df16a746bace33356bd387d0c86ced7416ae95be9fc7cad->enter($__internal_dfec8bc772aeab436df16a746bace33356bd387d0c86ced7416ae95be9fc7cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"true\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">home</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"/\">CV</a></li>
\t\t\t\t\t\t\t<li><a href=\"/hobby\">Hobby</a></li>
\t\t\t\t\t\t\t<li><a href=\"/videopitch\">Video Pitch</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "\t\t\t<div class=\"container\" id=\"decouvrez\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"benjamin.bronsart.campus-grenoble.fr\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Benjamin</a>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"jerome.lombard.campus-grenoble.fr\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Jerôme</a>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"joel-ponson.tech\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Joël</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<p class=\"text-center\">- copyright Les Tontons Codeurs - Campus numérique in the Alps -</p>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>
\t</body>

\t</html>

";
        
        $__internal_3e4846cbd701f9cd0da8a9eb7c2bebb1ef66c1d71578d413576f77bd56d6c153->leave($__internal_3e4846cbd701f9cd0da8a9eb7c2bebb1ef66c1d71578d413576f77bd56d6c153_prof);

        
        $__internal_dfec8bc772aeab436df16a746bace33356bd387d0c86ced7416ae95be9fc7cad->leave($__internal_dfec8bc772aeab436df16a746bace33356bd387d0c86ced7416ae95be9fc7cad_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f0039d12c6333e0194743a7378a737b8aef878a191df4a924b10bc22c5ddc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0039d12c6333e0194743a7378a737b8aef878a191df4a924b10bc22c5ddc1f->enter($__internal_6f0039d12c6333e0194743a7378a737b8aef878a191df4a924b10bc22c5ddc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_120f339aeed8619ef89f216b350111ba4f45f74290a6d2f93c51f59ae9909c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120f339aeed8619ef89f216b350111ba4f45f74290a6d2f93c51f59ae9909c4d->enter($__internal_120f339aeed8619ef89f216b350111ba4f45f74290a6d2f93c51f59ae9909c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_120f339aeed8619ef89f216b350111ba4f45f74290a6d2f93c51f59ae9909c4d->leave($__internal_120f339aeed8619ef89f216b350111ba4f45f74290a6d2f93c51f59ae9909c4d_prof);

        
        $__internal_6f0039d12c6333e0194743a7378a737b8aef878a191df4a924b10bc22c5ddc1f->leave($__internal_6f0039d12c6333e0194743a7378a737b8aef878a191df4a924b10bc22c5ddc1f_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_151d53e9a80004cd00bf2358a15a5789f1b28cd8182db627342939403275266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151d53e9a80004cd00bf2358a15a5789f1b28cd8182db627342939403275266d->enter($__internal_151d53e9a80004cd00bf2358a15a5789f1b28cd8182db627342939403275266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_75669449a2c6dc875b6efb8bcff17d7adacb53b4f4a711f8190cabf7eba3e541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75669449a2c6dc875b6efb8bcff17d7adacb53b4f4a711f8190cabf7eba3e541->enter($__internal_75669449a2c6dc875b6efb8bcff17d7adacb53b4f4a711f8190cabf7eba3e541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "\t\t\t";
        
        $__internal_75669449a2c6dc875b6efb8bcff17d7adacb53b4f4a711f8190cabf7eba3e541->leave($__internal_75669449a2c6dc875b6efb8bcff17d7adacb53b4f4a711f8190cabf7eba3e541_prof);

        
        $__internal_151d53e9a80004cd00bf2358a15a5789f1b28cd8182db627342939403275266d->leave($__internal_151d53e9a80004cd00bf2358a15a5789f1b28cd8182db627342939403275266d_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  124 => 37,  107 => 8,  73 => 39,  71 => 37,  42 => 11,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t
\t\t<title>{% block title %}{% endblock %}</title>

\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\">
\t\t
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"true\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">home</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"/\">CV</a></li>
\t\t\t\t\t\t\t<li><a href=\"/hobby\">Hobby</a></li>
\t\t\t\t\t\t\t<li><a href=\"/videopitch\">Video Pitch</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t\t<div class=\"container\" id=\"decouvrez\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"benjamin.bronsart.campus-grenoble.fr\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Benjamin</a>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"jerome.lombard.campus-grenoble.fr\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Jerôme</a>
\t\t\t\t\t</div>    
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<a href=\"joel-ponson.tech\" class=\"btn btn-lg btn-default\" role=\"button\">Découvrez Joël</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<p class=\"text-center\">- copyright Les Tontons Codeurs - Campus numérique in the Alps -</p>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>
\t</body>

\t</html>

", "layout.html.twig", "/var/www/Adrien/Cv_adrien/app/Resources/views/layout.html.twig");
    }
}
