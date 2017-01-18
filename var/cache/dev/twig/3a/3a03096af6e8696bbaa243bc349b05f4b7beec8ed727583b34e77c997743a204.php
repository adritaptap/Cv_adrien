<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_de3496dc67a4b65d6dba623f58c3be3865c9f4c5469b28720ee13dcb564c1e4b extends Twig_Template
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
        $__internal_32053e1ff55523fbb1de42366463c88103b1400ea9baa702547b03dd2bff9461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32053e1ff55523fbb1de42366463c88103b1400ea9baa702547b03dd2bff9461->enter($__internal_32053e1ff55523fbb1de42366463c88103b1400ea9baa702547b03dd2bff9461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_12be3e80acbeabe858414b583026492773b9a518b801251da80537cf8e230991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12be3e80acbeabe858414b583026492773b9a518b801251da80537cf8e230991->enter($__internal_12be3e80acbeabe858414b583026492773b9a518b801251da80537cf8e230991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_32053e1ff55523fbb1de42366463c88103b1400ea9baa702547b03dd2bff9461->leave($__internal_32053e1ff55523fbb1de42366463c88103b1400ea9baa702547b03dd2bff9461_prof);

        
        $__internal_12be3e80acbeabe858414b583026492773b9a518b801251da80537cf8e230991->leave($__internal_12be3e80acbeabe858414b583026492773b9a518b801251da80537cf8e230991_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/Adrien/Cv_adrien/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
