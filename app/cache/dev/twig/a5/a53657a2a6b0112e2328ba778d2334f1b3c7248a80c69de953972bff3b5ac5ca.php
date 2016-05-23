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
        $__internal_6a41ee873cfac63852bf47cf616e800decc34eea689ffd01412ec76fbe9c6db3 = $this->env->getExtension("native_profiler");
        $__internal_6a41ee873cfac63852bf47cf616e800decc34eea689ffd01412ec76fbe9c6db3->enter($__internal_6a41ee873cfac63852bf47cf616e800decc34eea689ffd01412ec76fbe9c6db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_6a41ee873cfac63852bf47cf616e800decc34eea689ffd01412ec76fbe9c6db3->leave($__internal_6a41ee873cfac63852bf47cf616e800decc34eea689ffd01412ec76fbe9c6db3_prof);

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
