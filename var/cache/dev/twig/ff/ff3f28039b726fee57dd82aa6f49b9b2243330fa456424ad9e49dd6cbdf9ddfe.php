<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a95e1f7ac483e11d9a38ce0e7904071a159b998e15446a05bd07f932714b13e6 extends Twig_Template
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
        $__internal_2befdeeb7f6562e9c1a1592b61083082019641580025400f2f4e7eaa1317e39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2befdeeb7f6562e9c1a1592b61083082019641580025400f2f4e7eaa1317e39e->enter($__internal_2befdeeb7f6562e9c1a1592b61083082019641580025400f2f4e7eaa1317e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_14b88795b259da798f1a3dcb9810341f5b44382db67baf46e482516c062c04f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b88795b259da798f1a3dcb9810341f5b44382db67baf46e482516c062c04f3->enter($__internal_14b88795b259da798f1a3dcb9810341f5b44382db67baf46e482516c062c04f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2befdeeb7f6562e9c1a1592b61083082019641580025400f2f4e7eaa1317e39e->leave($__internal_2befdeeb7f6562e9c1a1592b61083082019641580025400f2f4e7eaa1317e39e_prof);

        
        $__internal_14b88795b259da798f1a3dcb9810341f5b44382db67baf46e482516c062c04f3->leave($__internal_14b88795b259da798f1a3dcb9810341f5b44382db67baf46e482516c062c04f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
