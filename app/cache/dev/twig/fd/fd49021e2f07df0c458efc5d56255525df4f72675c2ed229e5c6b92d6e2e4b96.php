<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6fbafb607ee867a83fa0070a2ddc262484a6df7b2e176adcff45e997a877260c extends Twig_Template
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
        $__internal_1584787a1d60e290b8b73546baeaf73cc62725349f586b6c1d914852a0c1f065 = $this->env->getExtension("native_profiler");
        $__internal_1584787a1d60e290b8b73546baeaf73cc62725349f586b6c1d914852a0c1f065->enter($__internal_1584787a1d60e290b8b73546baeaf73cc62725349f586b6c1d914852a0c1f065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1584787a1d60e290b8b73546baeaf73cc62725349f586b6c1d914852a0c1f065->leave($__internal_1584787a1d60e290b8b73546baeaf73cc62725349f586b6c1d914852a0c1f065_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
