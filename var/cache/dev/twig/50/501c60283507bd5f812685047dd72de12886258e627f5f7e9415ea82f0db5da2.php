<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0215967b7ecfd443524cb29df5a3ac7dc505193a0ce04bf3dbd8c84a784fe690 extends Twig_Template
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
        $__internal_ca8640ed06e972c888b1945a252d40ee3aed832293f53cda8553a2e8ed613142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8640ed06e972c888b1945a252d40ee3aed832293f53cda8553a2e8ed613142->enter($__internal_ca8640ed06e972c888b1945a252d40ee3aed832293f53cda8553a2e8ed613142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f9f02a5425593837705cb6012caea765449041f06df85173244965b252ec095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f02a5425593837705cb6012caea765449041f06df85173244965b252ec095f->enter($__internal_f9f02a5425593837705cb6012caea765449041f06df85173244965b252ec095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ca8640ed06e972c888b1945a252d40ee3aed832293f53cda8553a2e8ed613142->leave($__internal_ca8640ed06e972c888b1945a252d40ee3aed832293f53cda8553a2e8ed613142_prof);

        
        $__internal_f9f02a5425593837705cb6012caea765449041f06df85173244965b252ec095f->leave($__internal_f9f02a5425593837705cb6012caea765449041f06df85173244965b252ec095f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
