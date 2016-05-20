<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c2497e6fcfbabcde800f8e873f2a8388862bbe7f1ab1db93e53a6aae769ac29e extends Twig_Template
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
        $__internal_a3b5948da924075172ee6020bf1124a464db9268f39dbc9703e0701f6e4cea97 = $this->env->getExtension("native_profiler");
        $__internal_a3b5948da924075172ee6020bf1124a464db9268f39dbc9703e0701f6e4cea97->enter($__internal_a3b5948da924075172ee6020bf1124a464db9268f39dbc9703e0701f6e4cea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a3b5948da924075172ee6020bf1124a464db9268f39dbc9703e0701f6e4cea97->leave($__internal_a3b5948da924075172ee6020bf1124a464db9268f39dbc9703e0701f6e4cea97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
