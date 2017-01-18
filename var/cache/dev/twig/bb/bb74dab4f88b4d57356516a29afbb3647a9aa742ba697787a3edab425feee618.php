<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ccd5114b6f85ac9015e2672e6bf67cb7747e71b6ea649b07dd0e2858145c3373 extends Twig_Template
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
        $__internal_4a22e8aedb409e2530ec2cf2a004fff4e62355497df4541e1b6c79ec04ca9ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a22e8aedb409e2530ec2cf2a004fff4e62355497df4541e1b6c79ec04ca9ad6->enter($__internal_4a22e8aedb409e2530ec2cf2a004fff4e62355497df4541e1b6c79ec04ca9ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5da99a21cefd40c8db94b8900ade025aee651b0ec19ef5313146f5ee06a3bb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da99a21cefd40c8db94b8900ade025aee651b0ec19ef5313146f5ee06a3bb83->enter($__internal_5da99a21cefd40c8db94b8900ade025aee651b0ec19ef5313146f5ee06a3bb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4a22e8aedb409e2530ec2cf2a004fff4e62355497df4541e1b6c79ec04ca9ad6->leave($__internal_4a22e8aedb409e2530ec2cf2a004fff4e62355497df4541e1b6c79ec04ca9ad6_prof);

        
        $__internal_5da99a21cefd40c8db94b8900ade025aee651b0ec19ef5313146f5ee06a3bb83->leave($__internal_5da99a21cefd40c8db94b8900ade025aee651b0ec19ef5313146f5ee06a3bb83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
