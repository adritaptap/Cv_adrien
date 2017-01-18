<?php

/* layout.html.twig */
class __TwigTemplate_4da0b05ee5e62278ea821302ea33709bcf030829cc35abf88df1218f32ab8641 extends Twig_Template
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t";
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
        return array (  103 => 38,  100 => 37,  95 => 8,  67 => 39,  65 => 37,  36 => 11,  30 => 8,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/var/www/Adrien/Cv_adrien/app/Resources/views/layout.html.twig");
    }
}
