<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fbcfb7ff225e4149ea278d7dd8a64ae861187e84fd9f324a8df515059243bda9 extends Twig_Template
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
        $__internal_12c85726d56cb0ecebbe9ae4796f88787292e4e596e74f30314442007822eaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c85726d56cb0ecebbe9ae4796f88787292e4e596e74f30314442007822eaed->enter($__internal_12c85726d56cb0ecebbe9ae4796f88787292e4e596e74f30314442007822eaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8f96b7581668759ae2e5f4a2c4e165c6509b1530bd54ace0284a92799bc80270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f96b7581668759ae2e5f4a2c4e165c6509b1530bd54ace0284a92799bc80270->enter($__internal_8f96b7581668759ae2e5f4a2c4e165c6509b1530bd54ace0284a92799bc80270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_12c85726d56cb0ecebbe9ae4796f88787292e4e596e74f30314442007822eaed->leave($__internal_12c85726d56cb0ecebbe9ae4796f88787292e4e596e74f30314442007822eaed_prof);

        
        $__internal_8f96b7581668759ae2e5f4a2c4e165c6509b1530bd54ace0284a92799bc80270->leave($__internal_8f96b7581668759ae2e5f4a2c4e165c6509b1530bd54ace0284a92799bc80270_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
