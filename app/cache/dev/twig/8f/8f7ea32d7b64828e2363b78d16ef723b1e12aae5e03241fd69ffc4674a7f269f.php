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
        $__internal_4e521f2257e33d6874177ae1c5dbe3a75ef90a13b8f85aecd327a0cb31395c68 = $this->env->getExtension("native_profiler");
        $__internal_4e521f2257e33d6874177ae1c5dbe3a75ef90a13b8f85aecd327a0cb31395c68->enter($__internal_4e521f2257e33d6874177ae1c5dbe3a75ef90a13b8f85aecd327a0cb31395c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4e521f2257e33d6874177ae1c5dbe3a75ef90a13b8f85aecd327a0cb31395c68->leave($__internal_4e521f2257e33d6874177ae1c5dbe3a75ef90a13b8f85aecd327a0cb31395c68_prof);

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
