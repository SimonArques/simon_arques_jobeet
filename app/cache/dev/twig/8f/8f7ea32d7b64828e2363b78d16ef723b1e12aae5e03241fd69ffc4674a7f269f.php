<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_48ed79cf9c037f60bfe9b5aeb15685120869201b555d050485f0557ddf68d380 extends Twig_Template
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
        $__internal_656bf3468b19ed79f97efea9b01603f22c820eb47275769ec31a418eecc3040d = $this->env->getExtension("native_profiler");
        $__internal_656bf3468b19ed79f97efea9b01603f22c820eb47275769ec31a418eecc3040d->enter($__internal_656bf3468b19ed79f97efea9b01603f22c820eb47275769ec31a418eecc3040d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_656bf3468b19ed79f97efea9b01603f22c820eb47275769ec31a418eecc3040d->leave($__internal_656bf3468b19ed79f97efea9b01603f22c820eb47275769ec31a418eecc3040d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
