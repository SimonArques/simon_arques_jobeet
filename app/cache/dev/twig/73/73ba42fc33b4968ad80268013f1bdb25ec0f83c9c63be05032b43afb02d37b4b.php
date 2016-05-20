<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_01225e184057c45aef8d8600818be9bf0fe1beac0e1a5fd88fd4b3112b2cbd3b extends Twig_Template
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
        $__internal_5d2f660c7788be3dd86c73763554225dd80dd34c6a6ce6ccf07f72383bca50c4 = $this->env->getExtension("native_profiler");
        $__internal_5d2f660c7788be3dd86c73763554225dd80dd34c6a6ce6ccf07f72383bca50c4->enter($__internal_5d2f660c7788be3dd86c73763554225dd80dd34c6a6ce6ccf07f72383bca50c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5d2f660c7788be3dd86c73763554225dd80dd34c6a6ce6ccf07f72383bca50c4->leave($__internal_5d2f660c7788be3dd86c73763554225dd80dd34c6a6ce6ccf07f72383bca50c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
