<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7c7b5dec7c2c784580180c8dd5300d9fef3d3955a2fc204d27a1238689201ac1 extends Twig_Template
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
        $__internal_75d9b7fdad0f6b8129ee0df838ff61fd27fd46e8f54c55db4ab505b67ea4f864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d9b7fdad0f6b8129ee0df838ff61fd27fd46e8f54c55db4ab505b67ea4f864->enter($__internal_75d9b7fdad0f6b8129ee0df838ff61fd27fd46e8f54c55db4ab505b67ea4f864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_24e18dac24b3f5d11b824e6ad914217dd63d416a5c582a8a584887ce93b306ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e18dac24b3f5d11b824e6ad914217dd63d416a5c582a8a584887ce93b306ab->enter($__internal_24e18dac24b3f5d11b824e6ad914217dd63d416a5c582a8a584887ce93b306ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_75d9b7fdad0f6b8129ee0df838ff61fd27fd46e8f54c55db4ab505b67ea4f864->leave($__internal_75d9b7fdad0f6b8129ee0df838ff61fd27fd46e8f54c55db4ab505b67ea4f864_prof);

        
        $__internal_24e18dac24b3f5d11b824e6ad914217dd63d416a5c582a8a584887ce93b306ab->leave($__internal_24e18dac24b3f5d11b824e6ad914217dd63d416a5c582a8a584887ce93b306ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
