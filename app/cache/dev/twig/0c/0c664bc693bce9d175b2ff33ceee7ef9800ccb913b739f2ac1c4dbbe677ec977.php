<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c3cdfd37f4470faeba582c64bc3075755e95f453f0797e7751b9ae7546e02b43 extends Twig_Template
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
        $__internal_ac8d3298977f204d0ceaf7735d357462218cd2c473fc76344e8e61d78c680ba2 = $this->env->getExtension("native_profiler");
        $__internal_ac8d3298977f204d0ceaf7735d357462218cd2c473fc76344e8e61d78c680ba2->enter($__internal_ac8d3298977f204d0ceaf7735d357462218cd2c473fc76344e8e61d78c680ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac8d3298977f204d0ceaf7735d357462218cd2c473fc76344e8e61d78c680ba2->leave($__internal_ac8d3298977f204d0ceaf7735d357462218cd2c473fc76344e8e61d78c680ba2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
