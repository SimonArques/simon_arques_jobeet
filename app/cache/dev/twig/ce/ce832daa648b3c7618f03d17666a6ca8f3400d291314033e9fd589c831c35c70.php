<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3c595eeee418c08f8e298637622cab170d68bf8fa4375fefec7a35a1acb45454 extends Twig_Template
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
        $__internal_75fc39bc26876e39917420231012cac843e5121746c91974824772615fb6cb16 = $this->env->getExtension("native_profiler");
        $__internal_75fc39bc26876e39917420231012cac843e5121746c91974824772615fb6cb16->enter($__internal_75fc39bc26876e39917420231012cac843e5121746c91974824772615fb6cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_75fc39bc26876e39917420231012cac843e5121746c91974824772615fb6cb16->leave($__internal_75fc39bc26876e39917420231012cac843e5121746c91974824772615fb6cb16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
