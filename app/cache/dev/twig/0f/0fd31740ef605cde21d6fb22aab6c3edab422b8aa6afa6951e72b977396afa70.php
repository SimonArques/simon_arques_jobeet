<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c552fd44faa6cc538626d52eda9dd2b6c5d61ba4ee98281126bd5fdc1fc356cd extends Twig_Template
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
        $__internal_6352aeedf977198b7f0c08a1fabe3f7b609a3f6355083cde04f0779a97ca301d = $this->env->getExtension("native_profiler");
        $__internal_6352aeedf977198b7f0c08a1fabe3f7b609a3f6355083cde04f0779a97ca301d->enter($__internal_6352aeedf977198b7f0c08a1fabe3f7b609a3f6355083cde04f0779a97ca301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6352aeedf977198b7f0c08a1fabe3f7b609a3f6355083cde04f0779a97ca301d->leave($__internal_6352aeedf977198b7f0c08a1fabe3f7b609a3f6355083cde04f0779a97ca301d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
