<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_dab439e69a8570c1740b63e2d3c263507ecc1ff5d8bb8ffb2ed418a35f5f3540 extends Twig_Template
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
        $__internal_5e000c8b5f867ddb9a6b59ae53dc93af5ddd4793b58f5969a52f7a6b71386433 = $this->env->getExtension("native_profiler");
        $__internal_5e000c8b5f867ddb9a6b59ae53dc93af5ddd4793b58f5969a52f7a6b71386433->enter($__internal_5e000c8b5f867ddb9a6b59ae53dc93af5ddd4793b58f5969a52f7a6b71386433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5e000c8b5f867ddb9a6b59ae53dc93af5ddd4793b58f5969a52f7a6b71386433->leave($__internal_5e000c8b5f867ddb9a6b59ae53dc93af5ddd4793b58f5969a52f7a6b71386433_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
