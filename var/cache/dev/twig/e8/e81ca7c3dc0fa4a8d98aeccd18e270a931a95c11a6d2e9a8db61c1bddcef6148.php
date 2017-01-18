<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4a1c9fa02fd7867aeae8c2ff36c660b4cfdc216c724a73ea582c27b43099067 extends Twig_Template
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
        $__internal_38f8780b50e33f051e30747dbd6f8e8a6b16a0bf126c6a4fe79a7d7ecf08226b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f8780b50e33f051e30747dbd6f8e8a6b16a0bf126c6a4fe79a7d7ecf08226b->enter($__internal_38f8780b50e33f051e30747dbd6f8e8a6b16a0bf126c6a4fe79a7d7ecf08226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9a24a18dbd0878ce06b35263f735b3d1c43e4dda4d4819e6b12753a29e2e0a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a24a18dbd0878ce06b35263f735b3d1c43e4dda4d4819e6b12753a29e2e0a8c->enter($__internal_9a24a18dbd0878ce06b35263f735b3d1c43e4dda4d4819e6b12753a29e2e0a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_38f8780b50e33f051e30747dbd6f8e8a6b16a0bf126c6a4fe79a7d7ecf08226b->leave($__internal_38f8780b50e33f051e30747dbd6f8e8a6b16a0bf126c6a4fe79a7d7ecf08226b_prof);

        
        $__internal_9a24a18dbd0878ce06b35263f735b3d1c43e4dda4d4819e6b12753a29e2e0a8c->leave($__internal_9a24a18dbd0878ce06b35263f735b3d1c43e4dda4d4819e6b12753a29e2e0a8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
