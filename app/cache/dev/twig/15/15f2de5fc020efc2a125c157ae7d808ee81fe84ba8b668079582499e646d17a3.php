<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d7b4ba85c07bd6f435fe1e5944de7b59bd8f82f52f3cd0a7750d839475da3400 extends Twig_Template
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
        $__internal_5323c3a0dc0a8aa6f738a19ad1be551e48a6e35904877b0e84966c23b0266bf7 = $this->env->getExtension("native_profiler");
        $__internal_5323c3a0dc0a8aa6f738a19ad1be551e48a6e35904877b0e84966c23b0266bf7->enter($__internal_5323c3a0dc0a8aa6f738a19ad1be551e48a6e35904877b0e84966c23b0266bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5323c3a0dc0a8aa6f738a19ad1be551e48a6e35904877b0e84966c23b0266bf7->leave($__internal_5323c3a0dc0a8aa6f738a19ad1be551e48a6e35904877b0e84966c23b0266bf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
