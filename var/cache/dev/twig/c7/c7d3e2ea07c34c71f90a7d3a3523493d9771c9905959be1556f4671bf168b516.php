<?php

/* @CvCV/Home/index.html.twig */
class __TwigTemplate_cb5a55eb38e01afea4a84e1c5657693b36aaa0ed070c1aba820b218549613dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@CvCV/Home/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd6923e41a020f9b91446451867116e8d46f03fd03ef8067c223912012cd8588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6923e41a020f9b91446451867116e8d46f03fd03ef8067c223912012cd8588->enter($__internal_fd6923e41a020f9b91446451867116e8d46f03fd03ef8067c223912012cd8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/index.html.twig"));

        $__internal_ecf02bd735a289eaf8a9e79a5b048a238a32cf8a99cfe27d6f34765b996178f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf02bd735a289eaf8a9e79a5b048a238a32cf8a99cfe27d6f34765b996178f5->enter($__internal_ecf02bd735a289eaf8a9e79a5b048a238a32cf8a99cfe27d6f34765b996178f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6923e41a020f9b91446451867116e8d46f03fd03ef8067c223912012cd8588->leave($__internal_fd6923e41a020f9b91446451867116e8d46f03fd03ef8067c223912012cd8588_prof);

        
        $__internal_ecf02bd735a289eaf8a9e79a5b048a238a32cf8a99cfe27d6f34765b996178f5->leave($__internal_ecf02bd735a289eaf8a9e79a5b048a238a32cf8a99cfe27d6f34765b996178f5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5fa8f693797b82bbab2e2e1cd41af3a0467321b693fe92ff3332fa49982c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5fa8f693797b82bbab2e2e1cd41af3a0467321b693fe92ff3332fa49982c20->enter($__internal_9c5fa8f693797b82bbab2e2e1cd41af3a0467321b693fe92ff3332fa49982c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5134a4a3deefd5cd4396523b133eeb3273ba771477eaee750b305ad17108dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5134a4a3deefd5cd4396523b133eeb3273ba771477eaee750b305ad17108dfb->enter($__internal_d5134a4a3deefd5cd4396523b133eeb3273ba771477eaee750b305ad17108dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CV Adrien";
        
        $__internal_d5134a4a3deefd5cd4396523b133eeb3273ba771477eaee750b305ad17108dfb->leave($__internal_d5134a4a3deefd5cd4396523b133eeb3273ba771477eaee750b305ad17108dfb_prof);

        
        $__internal_9c5fa8f693797b82bbab2e2e1cd41af3a0467321b693fe92ff3332fa49982c20->leave($__internal_9c5fa8f693797b82bbab2e2e1cd41af3a0467321b693fe92ff3332fa49982c20_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd7740587d4bc3240c0e30a41e3bbdf951c6af9d1c52d7c6419260f98c8dd6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7740587d4bc3240c0e30a41e3bbdf951c6af9d1c52d7c6419260f98c8dd6ea->enter($__internal_bd7740587d4bc3240c0e30a41e3bbdf951c6af9d1c52d7c6419260f98c8dd6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eaabdb9b57acf0da322566b66f593b3df1e2abf7a4709df06de624dddf919bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaabdb9b57acf0da322566b66f593b3df1e2abf7a4709df06de624dddf919bf6->enter($__internal_eaabdb9b57acf0da322566b66f593b3df1e2abf7a4709df06de624dddf919bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\" id=\"debut\">
\t<header>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t<div class=\"haut\"></div>
\t\t\t\t<h1 class=\"text-center\" id=\"adrien\">Adrien Juhem</h1>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\"></div>
\t\t\t<div class=\"col-xs-4 col-md-4\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images_adrien/adrien_juhem_photo_cv.png"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"Responsive image\">
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\"></div>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<ul class=\"list-inline\">\t
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images_adrien/mail.png"), "html", null, true);
        echo "\" alt=\"icon\"> <a href=\"mailto:you@yourdomain.com\">adrien.juhem@digital-numerique-in-the-alps.com</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images_adrien/tel.png"), "html", null, true);
        echo "\" alt=\"icon\"> 06 38 67 46 31
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images_adrien/adr.png"), "html", null, true);
        echo "\" alt=\"icon\"> 11 rue de Belgrade 38 000, Grenoble 
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"container theme-showcase\" role=\"main\">

\t\t<div class=\"jumbotron\">
\t\t\t<h1>Analyste Developpeur</h1>
\t\t\t<p>Grenoblois depuis 9 ans, je suis diplômé d'un master (Bac+5) en biotechnologie et Management de projet, je souhaite devenir développeur informatique et intégrer une entreprise où je pourrai m'épanouir dans mon nouveau métier. Je suis passionné de Sciences et de nouvelles technologies.<br><br>À 28 ans, j'ai intégré le campus numérique in the Alps pour un an et demi avec un an en alternance dans une entreprise. Je vais mettre tout en oeuvre pour réussir mon projet et devenir un très bon développeur.</p>
\t\t</div>

\t\t<div class=\"page-header\">
\t\t\t<h1>Formation</h1>
\t\t</div>
\t\t<ul class=\"liste\">
\t\t\t<li><b>2016/2017:</b> Campus numérique in the Alps.<br>Formation de 18 mois pour devenir Developpeur Informatique dont un an en alternance.</li>
\t\t\t<li><b>2011/2012:</b> Master 2 Médicaments Biotechnologies et Management.<br><span class=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t\t<li><b>2010/2011:</b> Master 1 Ingénierie Santé Medicament.<br><span class=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t\t<li><b>2007/2010:</b> Licence de Biologie.<br><span id=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t</ul>
\t</div>


\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Expériences</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2015/2016 : CDD de 6 mois</td>
\t\t\t\t\t\t\t<td>Minalogic</td>
\t\t\t\t\t\t\t<td>Chargé de projet</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2014/2014 : CDI 1 an</td>
\t\t\t\t\t\t\t<td>Mc Donald's</td>
\t\t\t\t\t\t\t<td>Equipier polyvalent</td>\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2012/2013 : CDD de 18 mois</td>
\t\t\t\t\t\t\t<td>Medic@lps</td>
\t\t\t\t\t\t\t<td>Chargé de projet</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2011 : Stage de 6 mois</td>
\t\t\t\t\t\t\t<td>Ecrins Therapeutics</td>
\t\t\t\t\t\t\t<td>Chargé de produit marketing</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Compétences</h1>
\t\t</div>
\t\t<ul class=\"none\">
\t\t\t<li>Anglais <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Logiciel PAO/DAO <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Microsoft Office <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Biotechnologie <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Gestion de projet <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Marketing <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t</ul>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Loisirs</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.franceculture.fr/litterature\">Lecture</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.allocine.fr/film/fichefilm_gen_cfilm=4327.html\">Cinéma</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.abc-tabs.com/\">Guitare</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.jeuxvideo.com/\">Jeux vidéo</a></td>\t
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.golfbresson.com/\">Golf</a></td>\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container text-center\">
\t\t<a class=\"up-arrow\" href=\"adrien_juhem_cv.html\" data-toggle=\"tooltip\" title=\"remonter en haut\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t</a>
\t\t<script>
\t\t\t\$(document).ready(function(){
    // Initialize Tooltip
    \$('[data-toggle=\"tooltip\"]').tooltip();
})
</script>
</div> 
</div> 
";
        
        $__internal_eaabdb9b57acf0da322566b66f593b3df1e2abf7a4709df06de624dddf919bf6->leave($__internal_eaabdb9b57acf0da322566b66f593b3df1e2abf7a4709df06de624dddf919bf6_prof);

        
        $__internal_bd7740587d4bc3240c0e30a41e3bbdf951c6af9d1c52d7c6419260f98c8dd6ea->leave($__internal_bd7740587d4bc3240c0e30a41e3bbdf951c6af9d1c52d7c6419260f98c8dd6ea_prof);

    }

    public function getTemplateName()
    {
        return "@CvCV/Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  97 => 27,  91 => 24,  79 => 15,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}


{% block title %}CV Adrien{% endblock %}
{% block content %}
<div class=\"container\" id=\"debut\">
\t<header>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t<div class=\"haut\"></div>
\t\t\t\t<h1 class=\"text-center\" id=\"adrien\">Adrien Juhem</h1>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\"></div>
\t\t\t<div class=\"col-xs-4 col-md-4\">
\t\t\t\t<img src=\"{{asset('images_adrien/adrien_juhem_photo_cv.png')}}\" class=\"img-thumbnail\" alt=\"Responsive image\">
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\"></div>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<ul class=\"list-inline\">\t
\t\t\t<li>
\t\t\t\t<img src=\"{{asset('images_adrien/mail.png')}}\" alt=\"icon\"> <a href=\"mailto:you@yourdomain.com\">adrien.juhem@digital-numerique-in-the-alps.com</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{asset('images_adrien/tel.png')}}\" alt=\"icon\"> 06 38 67 46 31
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{asset('images_adrien/adr.png')}}\" alt=\"icon\"> 11 rue de Belgrade 38 000, Grenoble 
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"container theme-showcase\" role=\"main\">

\t\t<div class=\"jumbotron\">
\t\t\t<h1>Analyste Developpeur</h1>
\t\t\t<p>Grenoblois depuis 9 ans, je suis diplômé d'un master (Bac+5) en biotechnologie et Management de projet, je souhaite devenir développeur informatique et intégrer une entreprise où je pourrai m'épanouir dans mon nouveau métier. Je suis passionné de Sciences et de nouvelles technologies.<br><br>À 28 ans, j'ai intégré le campus numérique in the Alps pour un an et demi avec un an en alternance dans une entreprise. Je vais mettre tout en oeuvre pour réussir mon projet et devenir un très bon développeur.</p>
\t\t</div>

\t\t<div class=\"page-header\">
\t\t\t<h1>Formation</h1>
\t\t</div>
\t\t<ul class=\"liste\">
\t\t\t<li><b>2016/2017:</b> Campus numérique in the Alps.<br>Formation de 18 mois pour devenir Developpeur Informatique dont un an en alternance.</li>
\t\t\t<li><b>2011/2012:</b> Master 2 Médicaments Biotechnologies et Management.<br><span class=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t\t<li><b>2010/2011:</b> Master 1 Ingénierie Santé Medicament.<br><span class=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t\t<li><b>2007/2010:</b> Licence de Biologie.<br><span id=\"ita\">Université Joseph Fourier Grenoble.</span></li>
\t\t</ul>
\t</div>


\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Expériences</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2015/2016 : CDD de 6 mois</td>
\t\t\t\t\t\t\t<td>Minalogic</td>
\t\t\t\t\t\t\t<td>Chargé de projet</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2014/2014 : CDI 1 an</td>
\t\t\t\t\t\t\t<td>Mc Donald's</td>
\t\t\t\t\t\t\t<td>Equipier polyvalent</td>\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2012/2013 : CDD de 18 mois</td>
\t\t\t\t\t\t\t<td>Medic@lps</td>
\t\t\t\t\t\t\t<td>Chargé de projet</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2011 : Stage de 6 mois</td>
\t\t\t\t\t\t\t<td>Ecrins Therapeutics</td>
\t\t\t\t\t\t\t<td>Chargé de produit marketing</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Compétences</h1>
\t\t</div>
\t\t<ul class=\"none\">
\t\t\t<li>Anglais <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Logiciel PAO/DAO <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Microsoft Office <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Biotechnologie <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Gestion de projet <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t\t<li>Marketing <div class=\"progress\">
\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">
\t\t\t\t\t<span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t</div>
\t\t\t</div></li>
\t\t</ul>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"page-header\">
\t\t\t<h1>Loisirs</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.franceculture.fr/litterature\">Lecture</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.allocine.fr/film/fichefilm_gen_cfilm=4327.html\">Cinéma</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.abc-tabs.com/\">Guitare</a></td>
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.jeuxvideo.com/\">Jeux vidéo</a></td>\t
\t\t\t\t\t\t\t<td class=\"tab\"><a href=\"http://www.golfbresson.com/\">Golf</a></td>\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container text-center\">
\t\t<a class=\"up-arrow\" href=\"adrien_juhem_cv.html\" data-toggle=\"tooltip\" title=\"remonter en haut\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t</a>
\t\t<script>
\t\t\t\$(document).ready(function(){
    // Initialize Tooltip
    \$('[data-toggle=\"tooltip\"]').tooltip();
})
</script>
</div> 
</div> 
{% endblock %}", "@CvCV/Home/index.html.twig", "/var/www/Adrien/Cv_adrien/src/Cv/CVBundle/Resources/views/Home/index.html.twig");
    }
}
