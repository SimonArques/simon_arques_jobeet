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
        $__internal_e4f0dc4e78250e1abd96991d603dc24d497b5410b0890dc007dd27a42b2a1f18 = $this->env->getExtension("native_profiler");
        $__internal_e4f0dc4e78250e1abd96991d603dc24d497b5410b0890dc007dd27a42b2a1f18->enter($__internal_e4f0dc4e78250e1abd96991d603dc24d497b5410b0890dc007dd27a42b2a1f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_e4f0dc4e78250e1abd96991d603dc24d497b5410b0890dc007dd27a42b2a1f18->leave($__internal_e4f0dc4e78250e1abd96991d603dc24d497b5410b0890dc007dd27a42b2a1f18_prof);

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
