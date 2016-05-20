<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cbe1d563b3fe7f391d1d8b3c0ac6b7cef856f05ad31a18243070349662dda0c5 extends Twig_Template
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
        $__internal_27c6abaff2f3f4982eb832d42ca8cff7e9fb0d7702f41eee9e2d9589176e0cff = $this->env->getExtension("native_profiler");
        $__internal_27c6abaff2f3f4982eb832d42ca8cff7e9fb0d7702f41eee9e2d9589176e0cff->enter($__internal_27c6abaff2f3f4982eb832d42ca8cff7e9fb0d7702f41eee9e2d9589176e0cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_27c6abaff2f3f4982eb832d42ca8cff7e9fb0d7702f41eee9e2d9589176e0cff->leave($__internal_27c6abaff2f3f4982eb832d42ca8cff7e9fb0d7702f41eee9e2d9589176e0cff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
