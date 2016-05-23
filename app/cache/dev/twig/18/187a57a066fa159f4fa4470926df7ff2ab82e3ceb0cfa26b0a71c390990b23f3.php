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
        $__internal_9c0ca27f01f0a3f12afbd8750359ea682237bcb3a82c4baab49fe0bf804133c6 = $this->env->getExtension("native_profiler");
        $__internal_9c0ca27f01f0a3f12afbd8750359ea682237bcb3a82c4baab49fe0bf804133c6->enter($__internal_9c0ca27f01f0a3f12afbd8750359ea682237bcb3a82c4baab49fe0bf804133c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9c0ca27f01f0a3f12afbd8750359ea682237bcb3a82c4baab49fe0bf804133c6->leave($__internal_9c0ca27f01f0a3f12afbd8750359ea682237bcb3a82c4baab49fe0bf804133c6_prof);

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
