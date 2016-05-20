<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cbe1d563b3fe7f391d1d8b3c0ac6b7cef856f05ad31a18243070349662dda0c5 extends Twig_Template
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
        $__internal_c61c4192aecdf49dd36b6f90f77a232f4eb744943e9c01f8900a8c147c37ce72 = $this->env->getExtension("native_profiler");
        $__internal_c61c4192aecdf49dd36b6f90f77a232f4eb744943e9c01f8900a8c147c37ce72->enter($__internal_c61c4192aecdf49dd36b6f90f77a232f4eb744943e9c01f8900a8c147c37ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c61c4192aecdf49dd36b6f90f77a232f4eb744943e9c01f8900a8c147c37ce72->leave($__internal_c61c4192aecdf49dd36b6f90f77a232f4eb744943e9c01f8900a8c147c37ce72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
