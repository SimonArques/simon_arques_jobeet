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
        $__internal_5a6e67a9774d002fa15a53d16a5669f055203875b3f4f0dfd0f676813a479c58 = $this->env->getExtension("native_profiler");
        $__internal_5a6e67a9774d002fa15a53d16a5669f055203875b3f4f0dfd0f676813a479c58->enter($__internal_5a6e67a9774d002fa15a53d16a5669f055203875b3f4f0dfd0f676813a479c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_5a6e67a9774d002fa15a53d16a5669f055203875b3f4f0dfd0f676813a479c58->leave($__internal_5a6e67a9774d002fa15a53d16a5669f055203875b3f4f0dfd0f676813a479c58_prof);

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
