<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d9c2171600130f8a2313546de39aadaa398f2b57e8fe39132c0587d10b2b990e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e377908709a36a9f9c5e66d93494b847ba725b0418bcf7fd21dcddc12ab2a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e377908709a36a9f9c5e66d93494b847ba725b0418bcf7fd21dcddc12ab2a7b->enter($__internal_6e377908709a36a9f9c5e66d93494b847ba725b0418bcf7fd21dcddc12ab2a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7d5548205b0ccb4c52cc65ed055e3f5a6115820c6fc515338d2fb9d2e4d76d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5548205b0ccb4c52cc65ed055e3f5a6115820c6fc515338d2fb9d2e4d76d64->enter($__internal_7d5548205b0ccb4c52cc65ed055e3f5a6115820c6fc515338d2fb9d2e4d76d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e377908709a36a9f9c5e66d93494b847ba725b0418bcf7fd21dcddc12ab2a7b->leave($__internal_6e377908709a36a9f9c5e66d93494b847ba725b0418bcf7fd21dcddc12ab2a7b_prof);

        
        $__internal_7d5548205b0ccb4c52cc65ed055e3f5a6115820c6fc515338d2fb9d2e4d76d64->leave($__internal_7d5548205b0ccb4c52cc65ed055e3f5a6115820c6fc515338d2fb9d2e4d76d64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01fd35520802ca1984ece2ce7100f6f15ea6fe8a29d8bb95159b51ed05868a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fd35520802ca1984ece2ce7100f6f15ea6fe8a29d8bb95159b51ed05868a9c->enter($__internal_01fd35520802ca1984ece2ce7100f6f15ea6fe8a29d8bb95159b51ed05868a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73dad204a53e90467b9b3f44867ad4fe5d4e1e33667f1ec7b63ca797582d398e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dad204a53e90467b9b3f44867ad4fe5d4e1e33667f1ec7b63ca797582d398e->enter($__internal_73dad204a53e90467b9b3f44867ad4fe5d4e1e33667f1ec7b63ca797582d398e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73dad204a53e90467b9b3f44867ad4fe5d4e1e33667f1ec7b63ca797582d398e->leave($__internal_73dad204a53e90467b9b3f44867ad4fe5d4e1e33667f1ec7b63ca797582d398e_prof);

        
        $__internal_01fd35520802ca1984ece2ce7100f6f15ea6fe8a29d8bb95159b51ed05868a9c->leave($__internal_01fd35520802ca1984ece2ce7100f6f15ea6fe8a29d8bb95159b51ed05868a9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d7c4d7a6f9c24409bbd5e8cacd85e995542546f5f026155d20cad2d28ddc717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7c4d7a6f9c24409bbd5e8cacd85e995542546f5f026155d20cad2d28ddc717->enter($__internal_2d7c4d7a6f9c24409bbd5e8cacd85e995542546f5f026155d20cad2d28ddc717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ceb6a42cb6b9081e983ce603b261b7d0bbf0adb26a20ac30eeda4ee95ffb2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceb6a42cb6b9081e983ce603b261b7d0bbf0adb26a20ac30eeda4ee95ffb2f1->enter($__internal_1ceb6a42cb6b9081e983ce603b261b7d0bbf0adb26a20ac30eeda4ee95ffb2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ceb6a42cb6b9081e983ce603b261b7d0bbf0adb26a20ac30eeda4ee95ffb2f1->leave($__internal_1ceb6a42cb6b9081e983ce603b261b7d0bbf0adb26a20ac30eeda4ee95ffb2f1_prof);

        
        $__internal_2d7c4d7a6f9c24409bbd5e8cacd85e995542546f5f026155d20cad2d28ddc717->leave($__internal_2d7c4d7a6f9c24409bbd5e8cacd85e995542546f5f026155d20cad2d28ddc717_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddd7e21416fa58545937f895a823da1e70c128ffa9811d685eac5737308bf695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd7e21416fa58545937f895a823da1e70c128ffa9811d685eac5737308bf695->enter($__internal_ddd7e21416fa58545937f895a823da1e70c128ffa9811d685eac5737308bf695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7eda38031ce010465858efc1f6b8c3b31fa9eb22c5697b04f0c7f335b936a71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eda38031ce010465858efc1f6b8c3b31fa9eb22c5697b04f0c7f335b936a71e->enter($__internal_7eda38031ce010465858efc1f6b8c3b31fa9eb22c5697b04f0c7f335b936a71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7eda38031ce010465858efc1f6b8c3b31fa9eb22c5697b04f0c7f335b936a71e->leave($__internal_7eda38031ce010465858efc1f6b8c3b31fa9eb22c5697b04f0c7f335b936a71e_prof);

        
        $__internal_ddd7e21416fa58545937f895a823da1e70c128ffa9811d685eac5737308bf695->leave($__internal_ddd7e21416fa58545937f895a823da1e70c128ffa9811d685eac5737308bf695_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
