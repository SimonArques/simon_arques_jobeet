<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_01225e184057c45aef8d8600818be9bf0fe1beac0e1a5fd88fd4b3112b2cbd3b extends Twig_Template
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
        $__internal_a93a4acc3a3a1fd0e64df5ae4ca140c93e253a7bf95922d172f59e9a5247ec70 = $this->env->getExtension("native_profiler");
        $__internal_a93a4acc3a3a1fd0e64df5ae4ca140c93e253a7bf95922d172f59e9a5247ec70->enter($__internal_a93a4acc3a3a1fd0e64df5ae4ca140c93e253a7bf95922d172f59e9a5247ec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a93a4acc3a3a1fd0e64df5ae4ca140c93e253a7bf95922d172f59e9a5247ec70->leave($__internal_a93a4acc3a3a1fd0e64df5ae4ca140c93e253a7bf95922d172f59e9a5247ec70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
