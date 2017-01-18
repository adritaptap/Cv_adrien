<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1e8a25f7f417ad635d266cc7c18a9bdc3acfd69342eebbfdec735cba63c7b09b extends Twig_Template
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
        $__internal_0a8f8030fcac93db3620c2198bb9d3cb22757f1c32bdd4877a6e7ae9d105dbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8f8030fcac93db3620c2198bb9d3cb22757f1c32bdd4877a6e7ae9d105dbef->enter($__internal_0a8f8030fcac93db3620c2198bb9d3cb22757f1c32bdd4877a6e7ae9d105dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_618bfd9854ef97fbdb0caf9d4cc1936f424d7740121073c451b78472dbf4ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618bfd9854ef97fbdb0caf9d4cc1936f424d7740121073c451b78472dbf4ec42->enter($__internal_618bfd9854ef97fbdb0caf9d4cc1936f424d7740121073c451b78472dbf4ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0a8f8030fcac93db3620c2198bb9d3cb22757f1c32bdd4877a6e7ae9d105dbef->leave($__internal_0a8f8030fcac93db3620c2198bb9d3cb22757f1c32bdd4877a6e7ae9d105dbef_prof);

        
        $__internal_618bfd9854ef97fbdb0caf9d4cc1936f424d7740121073c451b78472dbf4ec42->leave($__internal_618bfd9854ef97fbdb0caf9d4cc1936f424d7740121073c451b78472dbf4ec42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
