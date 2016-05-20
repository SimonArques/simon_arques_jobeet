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
        $__internal_d038ed6c282604b93c0e52e2a51567497849cb957a941677caa5cf38c92a435f = $this->env->getExtension("native_profiler");
        $__internal_d038ed6c282604b93c0e52e2a51567497849cb957a941677caa5cf38c92a435f->enter($__internal_d038ed6c282604b93c0e52e2a51567497849cb957a941677caa5cf38c92a435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d038ed6c282604b93c0e52e2a51567497849cb957a941677caa5cf38c92a435f->leave($__internal_d038ed6c282604b93c0e52e2a51567497849cb957a941677caa5cf38c92a435f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fe122225baf2f1b312f76cb4d46a0f2de14c9378228f263465a105dc2b1911a = $this->env->getExtension("native_profiler");
        $__internal_7fe122225baf2f1b312f76cb4d46a0f2de14c9378228f263465a105dc2b1911a->enter($__internal_7fe122225baf2f1b312f76cb4d46a0f2de14c9378228f263465a105dc2b1911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7fe122225baf2f1b312f76cb4d46a0f2de14c9378228f263465a105dc2b1911a->leave($__internal_7fe122225baf2f1b312f76cb4d46a0f2de14c9378228f263465a105dc2b1911a_prof);

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
