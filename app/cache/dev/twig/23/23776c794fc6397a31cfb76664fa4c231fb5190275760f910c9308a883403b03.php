<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cc6b834a4a6eadc7385d5ded4c2b630e6f3e5547827f22c10720a1b3f103d98e extends Twig_Template
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
        $__internal_b5ebd98f07c208fcc0376f13e76859a2745e353e2247e0d5434323b590c9e234 = $this->env->getExtension("native_profiler");
        $__internal_b5ebd98f07c208fcc0376f13e76859a2745e353e2247e0d5434323b590c9e234->enter($__internal_b5ebd98f07c208fcc0376f13e76859a2745e353e2247e0d5434323b590c9e234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b5ebd98f07c208fcc0376f13e76859a2745e353e2247e0d5434323b590c9e234->leave($__internal_b5ebd98f07c208fcc0376f13e76859a2745e353e2247e0d5434323b590c9e234_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
