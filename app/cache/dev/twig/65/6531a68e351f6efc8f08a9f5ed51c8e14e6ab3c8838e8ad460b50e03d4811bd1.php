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
        $__internal_152490dec3f2fb03752ba9f97dcb1bb45f7720992a903428bf4a100e049454f2 = $this->env->getExtension("native_profiler");
        $__internal_152490dec3f2fb03752ba9f97dcb1bb45f7720992a903428bf4a100e049454f2->enter($__internal_152490dec3f2fb03752ba9f97dcb1bb45f7720992a903428bf4a100e049454f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_152490dec3f2fb03752ba9f97dcb1bb45f7720992a903428bf4a100e049454f2->leave($__internal_152490dec3f2fb03752ba9f97dcb1bb45f7720992a903428bf4a100e049454f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5fef5c27167e5b6bd04a17f43bb44c4c45944ed6d801fa90a06a88712bdac70 = $this->env->getExtension("native_profiler");
        $__internal_f5fef5c27167e5b6bd04a17f43bb44c4c45944ed6d801fa90a06a88712bdac70->enter($__internal_f5fef5c27167e5b6bd04a17f43bb44c4c45944ed6d801fa90a06a88712bdac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f5fef5c27167e5b6bd04a17f43bb44c4c45944ed6d801fa90a06a88712bdac70->leave($__internal_f5fef5c27167e5b6bd04a17f43bb44c4c45944ed6d801fa90a06a88712bdac70_prof);

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
