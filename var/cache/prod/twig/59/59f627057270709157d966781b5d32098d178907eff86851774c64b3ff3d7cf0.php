<?php

/* CvCVBundle:Home:videopitch.html.twig */
class __TwigTemplate_1e3e0cb3f6d792f191401db495bb56c17223248f7ef9cc904883e3d2faaa39f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CvCVBundle:Home:videopitch.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Video pitch Adrien";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "CvCVBundle:Home:videopitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CvCVBundle:Home:videopitch.html.twig", "/var/www/Adrien/Cv_adrien/src/Cv/CVBundle/Resources/views/Home/videopitch.html.twig");
    }
}
