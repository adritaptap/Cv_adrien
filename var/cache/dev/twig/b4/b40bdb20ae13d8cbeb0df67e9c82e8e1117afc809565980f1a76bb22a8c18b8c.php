<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0c2978700e7519646391f263c1abc646f44b77912e345d37d872b111979180a1 extends Twig_Template
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
        $__internal_818eb4341043d4d95472d4c8ea267587d900003f3402c9682aad5f120b9554a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818eb4341043d4d95472d4c8ea267587d900003f3402c9682aad5f120b9554a3->enter($__internal_818eb4341043d4d95472d4c8ea267587d900003f3402c9682aad5f120b9554a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_16b0a2234d6975d05227babf66dcd475ede8b7c2082eaf3cdbe18df82be37953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b0a2234d6975d05227babf66dcd475ede8b7c2082eaf3cdbe18df82be37953->enter($__internal_16b0a2234d6975d05227babf66dcd475ede8b7c2082eaf3cdbe18df82be37953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_818eb4341043d4d95472d4c8ea267587d900003f3402c9682aad5f120b9554a3->leave($__internal_818eb4341043d4d95472d4c8ea267587d900003f3402c9682aad5f120b9554a3_prof);

        
        $__internal_16b0a2234d6975d05227babf66dcd475ede8b7c2082eaf3cdbe18df82be37953->leave($__internal_16b0a2234d6975d05227babf66dcd475ede8b7c2082eaf3cdbe18df82be37953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
