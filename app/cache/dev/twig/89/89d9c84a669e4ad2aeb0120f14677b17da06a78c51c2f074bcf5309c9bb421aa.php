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
        $__internal_855149061f2877a35ffdc5a74de710b13f92b55ed59ab2e2145de173e780205e = $this->env->getExtension("native_profiler");
        $__internal_855149061f2877a35ffdc5a74de710b13f92b55ed59ab2e2145de173e780205e->enter($__internal_855149061f2877a35ffdc5a74de710b13f92b55ed59ab2e2145de173e780205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_855149061f2877a35ffdc5a74de710b13f92b55ed59ab2e2145de173e780205e->leave($__internal_855149061f2877a35ffdc5a74de710b13f92b55ed59ab2e2145de173e780205e_prof);

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
