<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e2a7fa3d13edbbc28b6e2810b11de68b7dd75a00b905b6a4001352ae1d1d9646 extends Twig_Template
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
        $__internal_a89ebcc3200a3926bf169b9f008394dfb1dbc1bfc2cc292c9f60d2c91a7e0a0f = $this->env->getExtension("native_profiler");
        $__internal_a89ebcc3200a3926bf169b9f008394dfb1dbc1bfc2cc292c9f60d2c91a7e0a0f->enter($__internal_a89ebcc3200a3926bf169b9f008394dfb1dbc1bfc2cc292c9f60d2c91a7e0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_a89ebcc3200a3926bf169b9f008394dfb1dbc1bfc2cc292c9f60d2c91a7e0a0f->leave($__internal_a89ebcc3200a3926bf169b9f008394dfb1dbc1bfc2cc292c9f60d2c91a7e0a0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
