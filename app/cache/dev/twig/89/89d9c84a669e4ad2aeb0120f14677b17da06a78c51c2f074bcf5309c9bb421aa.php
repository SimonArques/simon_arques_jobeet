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
        $__internal_1e1e5522f9e3dc4240cc84a752d8f62950a9985f6519528025e7657c99d125ab = $this->env->getExtension("native_profiler");
        $__internal_1e1e5522f9e3dc4240cc84a752d8f62950a9985f6519528025e7657c99d125ab->enter($__internal_1e1e5522f9e3dc4240cc84a752d8f62950a9985f6519528025e7657c99d125ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e1e5522f9e3dc4240cc84a752d8f62950a9985f6519528025e7657c99d125ab->leave($__internal_1e1e5522f9e3dc4240cc84a752d8f62950a9985f6519528025e7657c99d125ab_prof);

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
