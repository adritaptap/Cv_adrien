<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4f824fa430d0d1ba7c84df6e4e89ce706b764e734dfdf371dead2573c779ac12 extends Twig_Template
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
        $__internal_c63d48725f7b5d104548c6734b02c8c166c05ff8be845656e3e97598104a4ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63d48725f7b5d104548c6734b02c8c166c05ff8be845656e3e97598104a4ff9->enter($__internal_c63d48725f7b5d104548c6734b02c8c166c05ff8be845656e3e97598104a4ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0c51ee139c6a856fc521a66ab57b0402b5c9d2cb6892ab7e86de5d0a061d7df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c51ee139c6a856fc521a66ab57b0402b5c9d2cb6892ab7e86de5d0a061d7df6->enter($__internal_0c51ee139c6a856fc521a66ab57b0402b5c9d2cb6892ab7e86de5d0a061d7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c63d48725f7b5d104548c6734b02c8c166c05ff8be845656e3e97598104a4ff9->leave($__internal_c63d48725f7b5d104548c6734b02c8c166c05ff8be845656e3e97598104a4ff9_prof);

        
        $__internal_0c51ee139c6a856fc521a66ab57b0402b5c9d2cb6892ab7e86de5d0a061d7df6->leave($__internal_0c51ee139c6a856fc521a66ab57b0402b5c9d2cb6892ab7e86de5d0a061d7df6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
