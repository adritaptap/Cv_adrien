<?php

/* @CvCV/Home/hobby.html.twig */
class __TwigTemplate_c4448fa81b9740a2c34f1d722b9ef749dcf25151ed34acc046d535b6e22b50c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@CvCV/Home/hobby.html.twig", 1);
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
        $__internal_f28d76db423ba85aede330ce8776a582a01a3acf123bdd6b14ce92ac7202a2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28d76db423ba85aede330ce8776a582a01a3acf123bdd6b14ce92ac7202a2c5->enter($__internal_f28d76db423ba85aede330ce8776a582a01a3acf123bdd6b14ce92ac7202a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/hobby.html.twig"));

        $__internal_35fa52e1f7b9102a43f0f29e90fef43fe79a05ccfb6bc8393b59e8003ff766c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fa52e1f7b9102a43f0f29e90fef43fe79a05ccfb6bc8393b59e8003ff766c9->enter($__internal_35fa52e1f7b9102a43f0f29e90fef43fe79a05ccfb6bc8393b59e8003ff766c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/hobby.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28d76db423ba85aede330ce8776a582a01a3acf123bdd6b14ce92ac7202a2c5->leave($__internal_f28d76db423ba85aede330ce8776a582a01a3acf123bdd6b14ce92ac7202a2c5_prof);

        
        $__internal_35fa52e1f7b9102a43f0f29e90fef43fe79a05ccfb6bc8393b59e8003ff766c9->leave($__internal_35fa52e1f7b9102a43f0f29e90fef43fe79a05ccfb6bc8393b59e8003ff766c9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a734b019f657e55e1182118f979560d74b36943865e3224906038be14cc23b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a734b019f657e55e1182118f979560d74b36943865e3224906038be14cc23b58->enter($__internal_a734b019f657e55e1182118f979560d74b36943865e3224906038be14cc23b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d93b923024ae8644684922aff76dafcfc04e73e43e85edd4b6d8162992e3caf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93b923024ae8644684922aff76dafcfc04e73e43e85edd4b6d8162992e3caf8->enter($__internal_d93b923024ae8644684922aff76dafcfc04e73e43e85edd4b6d8162992e3caf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hobby Adrien";
        
        $__internal_d93b923024ae8644684922aff76dafcfc04e73e43e85edd4b6d8162992e3caf8->leave($__internal_d93b923024ae8644684922aff76dafcfc04e73e43e85edd4b6d8162992e3caf8_prof);

        
        $__internal_a734b019f657e55e1182118f979560d74b36943865e3224906038be14cc23b58->leave($__internal_a734b019f657e55e1182118f979560d74b36943865e3224906038be14cc23b58_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_708dc829e7ab894f7548558ad6e7b1c985b153d943beb3c32567d885950e5fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708dc829e7ab894f7548558ad6e7b1c985b153d943beb3c32567d885950e5fb6->enter($__internal_708dc829e7ab894f7548558ad6e7b1c985b153d943beb3c32567d885950e5fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fbc7a38e611e3a9cc00eb3dd2745cf79fe7d39fcbd38ec508052dcb9958e3715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc7a38e611e3a9cc00eb3dd2745cf79fe7d39fcbd38ec508052dcb9958e3715->enter($__internal_fbc7a38e611e3a9cc00eb3dd2745cf79fe7d39fcbd38ec508052dcb9958e3715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\" id=\"debut\">

\t<div class=\"jumbotron\">
\t\t<h1 class=\"media-heading\">Le Cinema, mon Hobby !</h1>
\t\t<p>Je suis un passionné de cinéma depuis que je suis tout petit. A mon adolescence je passais mon temps dans le vidéo-club de mon quartier à discuter de cinéma avec le propriétaire. J'allais très souvent au cinéma et je louais une dizaine de DVD par semaine. Pour illustrer ma passion je vous propose de decouvrir l'un de mes réalisateurs préférés : <a href=\"https://fr.wikipedia.org/wiki/David_Lynch\">David Lynch</a>.<br><br>De Elephant Man à Mulholland Drive, David Lynch a su imposer son style mélangeant surréalisme, graphisme, bizarrerie et ambiance sombre. Je suis toujours surpris et intrigué par les films de Lynch qui propose souvent des films non linéaires avec des intrigues en boucle et des scénarios peuplés de personnages des plus étranges. Pour vous communiquer ma passion pour les réalisations de ce grand artiste je vous propose de visionner ces trois vidéos. La première est la bande-annonce du film <a href=\"https://fr.wikipedia.org/wiki/Lost_Highway_(film)\">Lost Highway</a> de 1997. Les deux suivantes sont des vidéos liées à la série <a href=\"https://fr.wikipedia.org/wiki/Twin_Peaks_(s%C3%A9rie_t%C3%A9l%C3%A9vis%C3%A9e)\">Twin Peaks</a> crée par David Lynch et Mark Frost en 1990.</p>
\t</div>

\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/r757aSgW0tg\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Lost Highway</h2>
\t\t\t<p>Lost Highway raconte l'histoire de Fred Madison, un saxophoniste qui soupçonne sa femme de le tromper. Sa femme est tuée et la police pense que le coupable n'est autre que Fred. Commence alors une cavale qui mélange la réalité et rêves. Ce film qui alterne les réalités est à la limite d'un film expérimental où David Lynch explore les concepts d'indentité et de la conscience de soi.</p>

\t\t</div>
\t</div>
\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/Zwn9ou_nf-I\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Twin Peaks</h2>
\t\t\t<p>L'agent spécial du FBI Dale Cooper est envoyé dans la petite ville de Twin Peaks pour élucider le meurtre de la lycéenne Laura Palmer. Au cours de son enquête, Dale Cooper va croiser sur sa route des personnages aussi bizarres qu'attachants. Diffuser en 1990 c'est série sera renouvellé pour une deuxième saison clôturant l'histoire et résolvant le mystère autour de la mort de Laura palmer (enfin presque). Il existe également un film prequel racontant les derniers moments de la vie de la lycéenne avant son assasinnat. En 2016, David Lynch a annoncé le retour de la série pour une nouvelle saison 25 ans après. La vidéo suivante est un trailer annonçant le retour de la série.</p>
\t\t</div>
\t</div>
\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/gbRhhG_DubI\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Twin Peaks 2017</h2>
\t\t\t<p>À l'origine prévue pour 2016, la saison 3 de Twin peak a pris du retard dans l'écriture du scénario. David Lynch a failli partir du projet mais finalement, il sera bien aux commandes de cette nouvelle saison tant attendues par les fans tels que moi. La plupart des acteurs présents lors des saisons précédentes ont accepté de revenir 25 ans après la fin de la saison 2.</p>
\t\t</div>
\t</div>
\t<div class=\"container text-center\">
\t\t<a class=\"up-arrow\" href=\"adrien_juhem_hobby.html\" data-toggle=\"tooltip\" title=\"remonter en haut\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t</a>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\t    // Initialize Tooltip
\t\t\t\t\t    \$('[data-toggle=\"tooltip\"]').tooltip();
\t\t\t\t\t})
\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t\t";
        
        $__internal_fbc7a38e611e3a9cc00eb3dd2745cf79fe7d39fcbd38ec508052dcb9958e3715->leave($__internal_fbc7a38e611e3a9cc00eb3dd2745cf79fe7d39fcbd38ec508052dcb9958e3715_prof);

        
        $__internal_708dc829e7ab894f7548558ad6e7b1c985b153d943beb3c32567d885950e5fb6->leave($__internal_708dc829e7ab894f7548558ad6e7b1c985b153d943beb3c32567d885950e5fb6_prof);

    }

    public function getTemplateName()
    {
        return "@CvCV/Home/hobby.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %}Hobby Adrien{% endblock %}
{% block content %}
<div class=\"container\" id=\"debut\">

\t<div class=\"jumbotron\">
\t\t<h1 class=\"media-heading\">Le Cinema, mon Hobby !</h1>
\t\t<p>Je suis un passionné de cinéma depuis que je suis tout petit. A mon adolescence je passais mon temps dans le vidéo-club de mon quartier à discuter de cinéma avec le propriétaire. J'allais très souvent au cinéma et je louais une dizaine de DVD par semaine. Pour illustrer ma passion je vous propose de decouvrir l'un de mes réalisateurs préférés : <a href=\"https://fr.wikipedia.org/wiki/David_Lynch\">David Lynch</a>.<br><br>De Elephant Man à Mulholland Drive, David Lynch a su imposer son style mélangeant surréalisme, graphisme, bizarrerie et ambiance sombre. Je suis toujours surpris et intrigué par les films de Lynch qui propose souvent des films non linéaires avec des intrigues en boucle et des scénarios peuplés de personnages des plus étranges. Pour vous communiquer ma passion pour les réalisations de ce grand artiste je vous propose de visionner ces trois vidéos. La première est la bande-annonce du film <a href=\"https://fr.wikipedia.org/wiki/Lost_Highway_(film)\">Lost Highway</a> de 1997. Les deux suivantes sont des vidéos liées à la série <a href=\"https://fr.wikipedia.org/wiki/Twin_Peaks_(s%C3%A9rie_t%C3%A9l%C3%A9vis%C3%A9e)\">Twin Peaks</a> crée par David Lynch et Mark Frost en 1990.</p>
\t</div>

\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/r757aSgW0tg\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Lost Highway</h2>
\t\t\t<p>Lost Highway raconte l'histoire de Fred Madison, un saxophoniste qui soupçonne sa femme de le tromper. Sa femme est tuée et la police pense que le coupable n'est autre que Fred. Commence alors une cavale qui mélange la réalité et rêves. Ce film qui alterne les réalités est à la limite d'un film expérimental où David Lynch explore les concepts d'indentité et de la conscience de soi.</p>

\t\t</div>
\t</div>
\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/Zwn9ou_nf-I\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Twin Peaks</h2>
\t\t\t<p>L'agent spécial du FBI Dale Cooper est envoyé dans la petite ville de Twin Peaks pour élucider le meurtre de la lycéenne Laura Palmer. Au cours de son enquête, Dale Cooper va croiser sur sa route des personnages aussi bizarres qu'attachants. Diffuser en 1990 c'est série sera renouvellé pour une deuxième saison clôturant l'histoire et résolvant le mystère autour de la mort de Laura palmer (enfin presque). Il existe également un film prequel racontant les derniers moments de la vie de la lycéenne avant son assasinnat. En 2016, David Lynch a annoncé le retour de la série pour une nouvelle saison 25 ans après. La vidéo suivante est un trailer annonçant le retour de la série.</p>
\t\t</div>
\t</div>
\t<div class=\"media\">
\t\t<div class=\"media-left media-middle\">
\t\t\t<iframe class=\"videohobby\" src=\"https://www.youtube.com/embed/gbRhhG_DubI\" allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"media-body\">
\t\t\t<h2 class=\"media-heading\">Twin Peaks 2017</h2>
\t\t\t<p>À l'origine prévue pour 2016, la saison 3 de Twin peak a pris du retard dans l'écriture du scénario. David Lynch a failli partir du projet mais finalement, il sera bien aux commandes de cette nouvelle saison tant attendues par les fans tels que moi. La plupart des acteurs présents lors des saisons précédentes ont accepté de revenir 25 ans après la fin de la saison 2.</p>
\t\t</div>
\t</div>
\t<div class=\"container text-center\">
\t\t<a class=\"up-arrow\" href=\"adrien_juhem_hobby.html\" data-toggle=\"tooltip\" title=\"remonter en haut\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-up\"></span>
\t\t</a>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\t    // Initialize Tooltip
\t\t\t\t\t    \$('[data-toggle=\"tooltip\"]').tooltip();
\t\t\t\t\t})
\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t\t{% endblock %}", "@CvCV/Home/hobby.html.twig", "/var/www/Adrien/Cv_adrien/src/Cv/CVBundle/Resources/views/Home/hobby.html.twig");
    }
}
