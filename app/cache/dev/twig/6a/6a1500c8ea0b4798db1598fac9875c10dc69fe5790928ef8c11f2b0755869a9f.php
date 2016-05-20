<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_84bca8e467ed414de8413a5883cf8b4409e2128558cd48abc676a05ff07cebdf extends Twig_Template
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
        $__internal_c38a4cad4bad956976953d6e958421e47a4458fc98275012c6d9ea21d9923dab = $this->env->getExtension("native_profiler");
        $__internal_c38a4cad4bad956976953d6e958421e47a4458fc98275012c6d9ea21d9923dab->enter($__internal_c38a4cad4bad956976953d6e958421e47a4458fc98275012c6d9ea21d9923dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c38a4cad4bad956976953d6e958421e47a4458fc98275012c6d9ea21d9923dab->leave($__internal_c38a4cad4bad956976953d6e958421e47a4458fc98275012c6d9ea21d9923dab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
