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
        $__internal_c93f062af0e294bed70cbb319264ae4a1412e5cc048d2f9ec5a44d0e048bec2c = $this->env->getExtension("native_profiler");
        $__internal_c93f062af0e294bed70cbb319264ae4a1412e5cc048d2f9ec5a44d0e048bec2c->enter($__internal_c93f062af0e294bed70cbb319264ae4a1412e5cc048d2f9ec5a44d0e048bec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c93f062af0e294bed70cbb319264ae4a1412e5cc048d2f9ec5a44d0e048bec2c->leave($__internal_c93f062af0e294bed70cbb319264ae4a1412e5cc048d2f9ec5a44d0e048bec2c_prof);

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
