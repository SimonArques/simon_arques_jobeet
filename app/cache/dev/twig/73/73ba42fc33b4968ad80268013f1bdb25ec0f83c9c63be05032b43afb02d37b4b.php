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
        $__internal_6c4529d30973f334887097f10cb7f5da6d38c9360ab6dc619a80f28d97c1ff98 = $this->env->getExtension("native_profiler");
        $__internal_6c4529d30973f334887097f10cb7f5da6d38c9360ab6dc619a80f28d97c1ff98->enter($__internal_6c4529d30973f334887097f10cb7f5da6d38c9360ab6dc619a80f28d97c1ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6c4529d30973f334887097f10cb7f5da6d38c9360ab6dc619a80f28d97c1ff98->leave($__internal_6c4529d30973f334887097f10cb7f5da6d38c9360ab6dc619a80f28d97c1ff98_prof);

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
