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
        $__internal_d513c064d75f81197a527a2008a4f111817960066b42aa111342dd6f83a1f9b1 = $this->env->getExtension("native_profiler");
        $__internal_d513c064d75f81197a527a2008a4f111817960066b42aa111342dd6f83a1f9b1->enter($__internal_d513c064d75f81197a527a2008a4f111817960066b42aa111342dd6f83a1f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d513c064d75f81197a527a2008a4f111817960066b42aa111342dd6f83a1f9b1->leave($__internal_d513c064d75f81197a527a2008a4f111817960066b42aa111342dd6f83a1f9b1_prof);

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
