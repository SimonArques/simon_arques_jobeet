<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f63a8995a9def99d6e8163db65586c8f7d9f7844a9ff8bac5460a8a88b0c2f98 extends Twig_Template
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
        $__internal_d6871474e96b8f3e671492701ee39d5425023c291b4b0d7adb8e0d18c6ca0d6c = $this->env->getExtension("native_profiler");
        $__internal_d6871474e96b8f3e671492701ee39d5425023c291b4b0d7adb8e0d18c6ca0d6c->enter($__internal_d6871474e96b8f3e671492701ee39d5425023c291b4b0d7adb8e0d18c6ca0d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d6871474e96b8f3e671492701ee39d5425023c291b4b0d7adb8e0d18c6ca0d6c->leave($__internal_d6871474e96b8f3e671492701ee39d5425023c291b4b0d7adb8e0d18c6ca0d6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
