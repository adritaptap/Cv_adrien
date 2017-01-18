<?php

/* @CvCV/Home/videopitch.html.twig */
class __TwigTemplate_1c32422700d4c1c5050b11135a059177c8d1f2cd25583a8a2a4cb32410f70862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@CvCV/Home/videopitch.html.twig", 1);
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
        $__internal_afa5e99a5d9a7660943316da8831952f882578be8725063fb9331ead66ba4db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa5e99a5d9a7660943316da8831952f882578be8725063fb9331ead66ba4db3->enter($__internal_afa5e99a5d9a7660943316da8831952f882578be8725063fb9331ead66ba4db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/videopitch.html.twig"));

        $__internal_9c4c22bffd207914a4f79540150544bec096ff8fc6a0f86a619b7c008f92df68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4c22bffd207914a4f79540150544bec096ff8fc6a0f86a619b7c008f92df68->enter($__internal_9c4c22bffd207914a4f79540150544bec096ff8fc6a0f86a619b7c008f92df68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CvCV/Home/videopitch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa5e99a5d9a7660943316da8831952f882578be8725063fb9331ead66ba4db3->leave($__internal_afa5e99a5d9a7660943316da8831952f882578be8725063fb9331ead66ba4db3_prof);

        
        $__internal_9c4c22bffd207914a4f79540150544bec096ff8fc6a0f86a619b7c008f92df68->leave($__internal_9c4c22bffd207914a4f79540150544bec096ff8fc6a0f86a619b7c008f92df68_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ec23bf829750b0c0bd93dd07b3cdfa7da5b727d181d644198573182ad8f4408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec23bf829750b0c0bd93dd07b3cdfa7da5b727d181d644198573182ad8f4408->enter($__internal_8ec23bf829750b0c0bd93dd07b3cdfa7da5b727d181d644198573182ad8f4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6769f668d6b49ebd2a3c8d69f4bdd46c10a77df9264b5746357d3912815842e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6769f668d6b49ebd2a3c8d69f4bdd46c10a77df9264b5746357d3912815842e->enter($__internal_e6769f668d6b49ebd2a3c8d69f4bdd46c10a77df9264b5746357d3912815842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Video pitch Adrien";
        
        $__internal_e6769f668d6b49ebd2a3c8d69f4bdd46c10a77df9264b5746357d3912815842e->leave($__internal_e6769f668d6b49ebd2a3c8d69f4bdd46c10a77df9264b5746357d3912815842e_prof);

        
        $__internal_8ec23bf829750b0c0bd93dd07b3cdfa7da5b727d181d644198573182ad8f4408->leave($__internal_8ec23bf829750b0c0bd93dd07b3cdfa7da5b727d181d644198573182ad8f4408_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_38f7a907febad83fa0623b20b841c4c23f759ec95dc0218498ded927429694db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f7a907febad83fa0623b20b841c4c23f759ec95dc0218498ded927429694db->enter($__internal_38f7a907febad83fa0623b20b841c4c23f759ec95dc0218498ded927429694db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2dfd5cc2ff5939b233319c06158aad2d8f3fc9179e3d5b8a79c9613361248cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfd5cc2ff5939b233319c06158aad2d8f3fc9179e3d5b8a79c9613361248cf4->enter($__internal_2dfd5cc2ff5939b233319c06158aad2d8f3fc9179e3d5b8a79c9613361248cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\" id=\"debut\">
\t<div class=\"container\">
\t\t<div class=\"media\">
\t\t\t<div class=\"media-left media-middle\">
\t\t\t\t<video src=\"videos/adrien_juhem_video.mp4\" controls=\"controls\" poster=\"images_adrien/adrien_juhem_photo_video.jpg\" width=\"560\" height=\"315\"></video>
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h1 class=\"media-heading\">Ma video pitch</h1>
\t\t\t\t<p>Voici une vidéo de présentation d'une minute et trente secondes. En plus de me présenter, j'expose mon projet professionel ainsi que mes motivations pour entrer dans le programme du Campus numérique in the Alps. Je vous laisse visionner cette vidéo et s'il vous plaît : Soyez indulgent ! :=) </p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t
";
        
        $__internal_2dfd5cc2ff5939b233319c06158aad2d8f3fc9179e3d5b8a79c9613361248cf4->leave($__internal_2dfd5cc2ff5939b233319c06158aad2d8f3fc9179e3d5b8a79c9613361248cf4_prof);

        
        $__internal_38f7a907febad83fa0623b20b841c4c23f759ec95dc0218498ded927429694db->leave($__internal_38f7a907febad83fa0623b20b841c4c23f759ec95dc0218498ded927429694db_prof);

    }

    public function getTemplateName()
    {
        return "@CvCV/Home/videopitch.html.twig";
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


{% block title %}Video pitch Adrien{% endblock %}
{% block content %}
<div class=\"container\" id=\"debut\">
\t<div class=\"container\">
\t\t<div class=\"media\">
\t\t\t<div class=\"media-left media-middle\">
\t\t\t\t<video src=\"videos/adrien_juhem_video.mp4\" controls=\"controls\" poster=\"images_adrien/adrien_juhem_photo_video.jpg\" width=\"560\" height=\"315\"></video>
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h1 class=\"media-heading\">Ma video pitch</h1>
\t\t\t\t<p>Voici une vidéo de présentation d'une minute et trente secondes. En plus de me présenter, j'expose mon projet professionel ainsi que mes motivations pour entrer dans le programme du Campus numérique in the Alps. Je vous laisse visionner cette vidéo et s'il vous plaît : Soyez indulgent ! :=) </p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t
{% endblock %}", "@CvCV/Home/videopitch.html.twig", "/var/www/Adrien/Cv_adrien/src/Cv/CVBundle/Resources/views/Home/videopitch.html.twig");
    }
}
