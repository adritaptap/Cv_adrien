<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d933453b70e5911f6e29ed547974c5c858cc4763b87ca7e32c2fd5342a1333e7 extends Twig_Template
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
        $__internal_f52b8dfd61488315af8cb22ef17c31e0cebfab768d2ff629f26d9098f508d6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52b8dfd61488315af8cb22ef17c31e0cebfab768d2ff629f26d9098f508d6dd->enter($__internal_f52b8dfd61488315af8cb22ef17c31e0cebfab768d2ff629f26d9098f508d6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b2cf2277c329bcef0062dfa64aaa034ffdb86a8cb8b09e9563646e5e77ee2d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cf2277c329bcef0062dfa64aaa034ffdb86a8cb8b09e9563646e5e77ee2d34->enter($__internal_b2cf2277c329bcef0062dfa64aaa034ffdb86a8cb8b09e9563646e5e77ee2d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f52b8dfd61488315af8cb22ef17c31e0cebfab768d2ff629f26d9098f508d6dd->leave($__internal_f52b8dfd61488315af8cb22ef17c31e0cebfab768d2ff629f26d9098f508d6dd_prof);

        
        $__internal_b2cf2277c329bcef0062dfa64aaa034ffdb86a8cb8b09e9563646e5e77ee2d34->leave($__internal_b2cf2277c329bcef0062dfa64aaa034ffdb86a8cb8b09e9563646e5e77ee2d34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
