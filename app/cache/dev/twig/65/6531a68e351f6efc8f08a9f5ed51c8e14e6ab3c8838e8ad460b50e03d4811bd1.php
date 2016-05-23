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
        $__internal_8daa5b62049683a4bcce1804ef3628a13d74473da1249bc80222148e587342e3 = $this->env->getExtension("native_profiler");
        $__internal_8daa5b62049683a4bcce1804ef3628a13d74473da1249bc80222148e587342e3->enter($__internal_8daa5b62049683a4bcce1804ef3628a13d74473da1249bc80222148e587342e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8daa5b62049683a4bcce1804ef3628a13d74473da1249bc80222148e587342e3->leave($__internal_8daa5b62049683a4bcce1804ef3628a13d74473da1249bc80222148e587342e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a9e2310b64a2a565b224e85bb957de84f6ec283dfd84cde10aa8e548601bd81 = $this->env->getExtension("native_profiler");
        $__internal_3a9e2310b64a2a565b224e85bb957de84f6ec283dfd84cde10aa8e548601bd81->enter($__internal_3a9e2310b64a2a565b224e85bb957de84f6ec283dfd84cde10aa8e548601bd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a9e2310b64a2a565b224e85bb957de84f6ec283dfd84cde10aa8e548601bd81->leave($__internal_3a9e2310b64a2a565b224e85bb957de84f6ec283dfd84cde10aa8e548601bd81_prof);

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
