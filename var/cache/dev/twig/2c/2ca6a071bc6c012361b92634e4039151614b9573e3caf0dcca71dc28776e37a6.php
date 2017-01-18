<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ba15209a1b0b3b30f93f8b857f99308641c2349b1b2e081b2c9578c9b364dc53 extends Twig_Template
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
        $__internal_b35b12a9547dd457609b11234136bf346ae4e592a6e45735f696d29d72e39f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35b12a9547dd457609b11234136bf346ae4e592a6e45735f696d29d72e39f4d->enter($__internal_b35b12a9547dd457609b11234136bf346ae4e592a6e45735f696d29d72e39f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_383cfdae23ae3c0d5376ce3d9b7cdab0a9972c42d1aa0dbf64bd77f55fd808a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383cfdae23ae3c0d5376ce3d9b7cdab0a9972c42d1aa0dbf64bd77f55fd808a8->enter($__internal_383cfdae23ae3c0d5376ce3d9b7cdab0a9972c42d1aa0dbf64bd77f55fd808a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b35b12a9547dd457609b11234136bf346ae4e592a6e45735f696d29d72e39f4d->leave($__internal_b35b12a9547dd457609b11234136bf346ae4e592a6e45735f696d29d72e39f4d_prof);

        
        $__internal_383cfdae23ae3c0d5376ce3d9b7cdab0a9972c42d1aa0dbf64bd77f55fd808a8->leave($__internal_383cfdae23ae3c0d5376ce3d9b7cdab0a9972c42d1aa0dbf64bd77f55fd808a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
