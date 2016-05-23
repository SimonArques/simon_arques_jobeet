<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_17822bbd6ee616acd86de88ca2e4a1d25836570f1f4e515c09320729be57a8e3 extends Twig_Template
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
        $__internal_2f38f059f35f89dca934ea6832fc4690823f68640b9b4886e5c24f2aae911163 = $this->env->getExtension("native_profiler");
        $__internal_2f38f059f35f89dca934ea6832fc4690823f68640b9b4886e5c24f2aae911163->enter($__internal_2f38f059f35f89dca934ea6832fc4690823f68640b9b4886e5c24f2aae911163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_2f38f059f35f89dca934ea6832fc4690823f68640b9b4886e5c24f2aae911163->leave($__internal_2f38f059f35f89dca934ea6832fc4690823f68640b9b4886e5c24f2aae911163_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
