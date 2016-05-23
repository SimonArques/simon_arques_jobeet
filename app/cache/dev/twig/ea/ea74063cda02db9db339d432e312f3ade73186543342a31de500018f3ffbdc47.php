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
        $__internal_67e4ac4bf030e8e5850bd7c391dea879aa58268e7df96c887b85423f770eb87b = $this->env->getExtension("native_profiler");
        $__internal_67e4ac4bf030e8e5850bd7c391dea879aa58268e7df96c887b85423f770eb87b->enter($__internal_67e4ac4bf030e8e5850bd7c391dea879aa58268e7df96c887b85423f770eb87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_67e4ac4bf030e8e5850bd7c391dea879aa58268e7df96c887b85423f770eb87b->leave($__internal_67e4ac4bf030e8e5850bd7c391dea879aa58268e7df96c887b85423f770eb87b_prof);

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
