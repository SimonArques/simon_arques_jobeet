<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e7ca676fb7a120fc9f3e6a90a3ab86358309d2544bcebc4674b128d96e180990 extends Twig_Template
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
        $__internal_b810b025263b508522b79c1623f8906b173b18389720e2c14bbd214a34ee9366 = $this->env->getExtension("native_profiler");
        $__internal_b810b025263b508522b79c1623f8906b173b18389720e2c14bbd214a34ee9366->enter($__internal_b810b025263b508522b79c1623f8906b173b18389720e2c14bbd214a34ee9366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b810b025263b508522b79c1623f8906b173b18389720e2c14bbd214a34ee9366->leave($__internal_b810b025263b508522b79c1623f8906b173b18389720e2c14bbd214a34ee9366_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
