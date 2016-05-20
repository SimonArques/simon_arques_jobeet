<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_604c449c73ab79eb392a61d10cb32bb79bab84880647562b994e239b5dae1158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44ef6f4d93280d194560403878e5f336c5129270f0754ec4f0cc34dcd84b0648 = $this->env->getExtension("native_profiler");
        $__internal_44ef6f4d93280d194560403878e5f336c5129270f0754ec4f0cc34dcd84b0648->enter($__internal_44ef6f4d93280d194560403878e5f336c5129270f0754ec4f0cc34dcd84b0648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44ef6f4d93280d194560403878e5f336c5129270f0754ec4f0cc34dcd84b0648->leave($__internal_44ef6f4d93280d194560403878e5f336c5129270f0754ec4f0cc34dcd84b0648_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2342e467f9edf3336ad31d87f99fd6499be0af62269a20e0fe6b02dff1c61e34 = $this->env->getExtension("native_profiler");
        $__internal_2342e467f9edf3336ad31d87f99fd6499be0af62269a20e0fe6b02dff1c61e34->enter($__internal_2342e467f9edf3336ad31d87f99fd6499be0af62269a20e0fe6b02dff1c61e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2342e467f9edf3336ad31d87f99fd6499be0af62269a20e0fe6b02dff1c61e34->leave($__internal_2342e467f9edf3336ad31d87f99fd6499be0af62269a20e0fe6b02dff1c61e34_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
