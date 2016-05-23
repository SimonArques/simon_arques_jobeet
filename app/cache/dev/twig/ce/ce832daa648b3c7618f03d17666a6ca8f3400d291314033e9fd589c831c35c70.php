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
        $__internal_7cf2c1898e22643cb6e436a792766fb5cb8db7025a0dbedcded88bf24f8cd19c = $this->env->getExtension("native_profiler");
        $__internal_7cf2c1898e22643cb6e436a792766fb5cb8db7025a0dbedcded88bf24f8cd19c->enter($__internal_7cf2c1898e22643cb6e436a792766fb5cb8db7025a0dbedcded88bf24f8cd19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7cf2c1898e22643cb6e436a792766fb5cb8db7025a0dbedcded88bf24f8cd19c->leave($__internal_7cf2c1898e22643cb6e436a792766fb5cb8db7025a0dbedcded88bf24f8cd19c_prof);

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
