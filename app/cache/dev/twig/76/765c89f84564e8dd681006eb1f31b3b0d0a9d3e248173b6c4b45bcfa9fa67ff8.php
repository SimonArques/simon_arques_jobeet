<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7c7f8df3aed5f6f1351e85d9f81589b6029412c7754342b466b7c79f12cdaed6 extends Twig_Template
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
        $__internal_d732ee4953ebf5ecf7132b365391d536296a5b097f704ca0b2fbef63dc49d183 = $this->env->getExtension("native_profiler");
        $__internal_d732ee4953ebf5ecf7132b365391d536296a5b097f704ca0b2fbef63dc49d183->enter($__internal_d732ee4953ebf5ecf7132b365391d536296a5b097f704ca0b2fbef63dc49d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d732ee4953ebf5ecf7132b365391d536296a5b097f704ca0b2fbef63dc49d183->leave($__internal_d732ee4953ebf5ecf7132b365391d536296a5b097f704ca0b2fbef63dc49d183_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
