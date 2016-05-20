<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e5cb535572bbbfef1ebd28c8b1fd303b983f0f8b2b92e9e7ed3a5d13d165710b extends Twig_Template
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
        $__internal_7c7ff6f3ad2f29dec826384150b7d1c0abd884f12912884df05959ac576de03a = $this->env->getExtension("native_profiler");
        $__internal_7c7ff6f3ad2f29dec826384150b7d1c0abd884f12912884df05959ac576de03a->enter($__internal_7c7ff6f3ad2f29dec826384150b7d1c0abd884f12912884df05959ac576de03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c7ff6f3ad2f29dec826384150b7d1c0abd884f12912884df05959ac576de03a->leave($__internal_7c7ff6f3ad2f29dec826384150b7d1c0abd884f12912884df05959ac576de03a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
