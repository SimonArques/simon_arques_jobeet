<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_54a5e8e3e739ffd12948fe8c7fae7790fd85af899b04fe7a7322f9f78dcb2c4c extends Twig_Template
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
        $__internal_9f6f30a7139240af092c4bc4156fbc610ff750eaf9b794dce0c20874032b2a9d = $this->env->getExtension("native_profiler");
        $__internal_9f6f30a7139240af092c4bc4156fbc610ff750eaf9b794dce0c20874032b2a9d->enter($__internal_9f6f30a7139240af092c4bc4156fbc610ff750eaf9b794dce0c20874032b2a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9f6f30a7139240af092c4bc4156fbc610ff750eaf9b794dce0c20874032b2a9d->leave($__internal_9f6f30a7139240af092c4bc4156fbc610ff750eaf9b794dce0c20874032b2a9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
