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
        $__internal_ee39d34ab35e1b5410da4be63698a0f4a29acd0e5bbfd79fb7fc59afe80ef7f1 = $this->env->getExtension("native_profiler");
        $__internal_ee39d34ab35e1b5410da4be63698a0f4a29acd0e5bbfd79fb7fc59afe80ef7f1->enter($__internal_ee39d34ab35e1b5410da4be63698a0f4a29acd0e5bbfd79fb7fc59afe80ef7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ee39d34ab35e1b5410da4be63698a0f4a29acd0e5bbfd79fb7fc59afe80ef7f1->leave($__internal_ee39d34ab35e1b5410da4be63698a0f4a29acd0e5bbfd79fb7fc59afe80ef7f1_prof);

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
