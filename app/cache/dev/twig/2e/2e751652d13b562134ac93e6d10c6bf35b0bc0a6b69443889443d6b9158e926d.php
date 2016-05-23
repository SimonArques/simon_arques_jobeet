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
        $__internal_cc988b7a49768d655a9b6663ded8559d3e679c9b9edbb4d32f55d96ad5543f4b = $this->env->getExtension("native_profiler");
        $__internal_cc988b7a49768d655a9b6663ded8559d3e679c9b9edbb4d32f55d96ad5543f4b->enter($__internal_cc988b7a49768d655a9b6663ded8559d3e679c9b9edbb4d32f55d96ad5543f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc988b7a49768d655a9b6663ded8559d3e679c9b9edbb4d32f55d96ad5543f4b->leave($__internal_cc988b7a49768d655a9b6663ded8559d3e679c9b9edbb4d32f55d96ad5543f4b_prof);

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
