<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9044bfb2dc22f93bf3fd806493b7194c9339db18a1a0151504c5c77a85c74c65 extends Twig_Template
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
        $__internal_ac769b242af91a7328c7b6accfee63b8ca28c9c72195307d090477902d31e6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac769b242af91a7328c7b6accfee63b8ca28c9c72195307d090477902d31e6b9->enter($__internal_ac769b242af91a7328c7b6accfee63b8ca28c9c72195307d090477902d31e6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cf83d4d3d08646de93c58fb468ecc4b5e61fbc01dfff17ef4c156da6ed8cfbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf83d4d3d08646de93c58fb468ecc4b5e61fbc01dfff17ef4c156da6ed8cfbab->enter($__internal_cf83d4d3d08646de93c58fb468ecc4b5e61fbc01dfff17ef4c156da6ed8cfbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ac769b242af91a7328c7b6accfee63b8ca28c9c72195307d090477902d31e6b9->leave($__internal_ac769b242af91a7328c7b6accfee63b8ca28c9c72195307d090477902d31e6b9_prof);

        
        $__internal_cf83d4d3d08646de93c58fb468ecc4b5e61fbc01dfff17ef4c156da6ed8cfbab->leave($__internal_cf83d4d3d08646de93c58fb468ecc4b5e61fbc01dfff17ef4c156da6ed8cfbab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
