<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bb5895fa1e57644660a1c30d9cdb8cbd05443d4ef0feb53a841b26182c8467f9 extends Twig_Template
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
        $__internal_3e11f47236bec0d8c24293ea071e5a024b1bd097c325082f2946224145eaf3ef = $this->env->getExtension("native_profiler");
        $__internal_3e11f47236bec0d8c24293ea071e5a024b1bd097c325082f2946224145eaf3ef->enter($__internal_3e11f47236bec0d8c24293ea071e5a024b1bd097c325082f2946224145eaf3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3e11f47236bec0d8c24293ea071e5a024b1bd097c325082f2946224145eaf3ef->leave($__internal_3e11f47236bec0d8c24293ea071e5a024b1bd097c325082f2946224145eaf3ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
