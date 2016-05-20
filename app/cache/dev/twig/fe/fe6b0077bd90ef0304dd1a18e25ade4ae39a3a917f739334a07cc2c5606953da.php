<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e7877814ea22566f27603b7e1fe60ba11f2c4960767c48117bf96ddc484e0328 extends Twig_Template
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
        $__internal_b3ead2b6cd3dbaa05efc3dca6c4263c859b37382bc87e9e4a25f3741c94224af = $this->env->getExtension("native_profiler");
        $__internal_b3ead2b6cd3dbaa05efc3dca6c4263c859b37382bc87e9e4a25f3741c94224af->enter($__internal_b3ead2b6cd3dbaa05efc3dca6c4263c859b37382bc87e9e4a25f3741c94224af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3ead2b6cd3dbaa05efc3dca6c4263c859b37382bc87e9e4a25f3741c94224af->leave($__internal_b3ead2b6cd3dbaa05efc3dca6c4263c859b37382bc87e9e4a25f3741c94224af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
