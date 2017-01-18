<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ec478f016e47465ce227b6349b45d5a4bf1901477023b2b59dd59c456bc5855e extends Twig_Template
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
        $__internal_511e6c2785f08436ad865db0ae19b7a79feed7f4c77dbdde0505bddec645e6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511e6c2785f08436ad865db0ae19b7a79feed7f4c77dbdde0505bddec645e6a2->enter($__internal_511e6c2785f08436ad865db0ae19b7a79feed7f4c77dbdde0505bddec645e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ff63494e1cfff08a001a4cf9299c5eee642654fa1ec7dad6e848ec01582b3634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff63494e1cfff08a001a4cf9299c5eee642654fa1ec7dad6e848ec01582b3634->enter($__internal_ff63494e1cfff08a001a4cf9299c5eee642654fa1ec7dad6e848ec01582b3634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_511e6c2785f08436ad865db0ae19b7a79feed7f4c77dbdde0505bddec645e6a2->leave($__internal_511e6c2785f08436ad865db0ae19b7a79feed7f4c77dbdde0505bddec645e6a2_prof);

        
        $__internal_ff63494e1cfff08a001a4cf9299c5eee642654fa1ec7dad6e848ec01582b3634->leave($__internal_ff63494e1cfff08a001a4cf9299c5eee642654fa1ec7dad6e848ec01582b3634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
