<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_016d3a46d382d882e81caf8d41628ffb97775ffbf5501094b746cc7084696ab8 extends Twig_Template
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
        $__internal_b84540a49fea93f4e9dc00462a52fb5c77c22aa0a4ba66ac755207c2e5c0e6a5 = $this->env->getExtension("native_profiler");
        $__internal_b84540a49fea93f4e9dc00462a52fb5c77c22aa0a4ba66ac755207c2e5c0e6a5->enter($__internal_b84540a49fea93f4e9dc00462a52fb5c77c22aa0a4ba66ac755207c2e5c0e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b84540a49fea93f4e9dc00462a52fb5c77c22aa0a4ba66ac755207c2e5c0e6a5->leave($__internal_b84540a49fea93f4e9dc00462a52fb5c77c22aa0a4ba66ac755207c2e5c0e6a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
