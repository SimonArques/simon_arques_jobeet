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
        $__internal_7eeb894877fe308e7d5988ae02bd9ca76983a562ebcaa29a3b8a91cb3234bed6 = $this->env->getExtension("native_profiler");
        $__internal_7eeb894877fe308e7d5988ae02bd9ca76983a562ebcaa29a3b8a91cb3234bed6->enter($__internal_7eeb894877fe308e7d5988ae02bd9ca76983a562ebcaa29a3b8a91cb3234bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7eeb894877fe308e7d5988ae02bd9ca76983a562ebcaa29a3b8a91cb3234bed6->leave($__internal_7eeb894877fe308e7d5988ae02bd9ca76983a562ebcaa29a3b8a91cb3234bed6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f16ed6caae3179af0820497bea0d346c5e7dd264c9114887a32c1c451e6c6f8f = $this->env->getExtension("native_profiler");
        $__internal_f16ed6caae3179af0820497bea0d346c5e7dd264c9114887a32c1c451e6c6f8f->enter($__internal_f16ed6caae3179af0820497bea0d346c5e7dd264c9114887a32c1c451e6c6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f16ed6caae3179af0820497bea0d346c5e7dd264c9114887a32c1c451e6c6f8f->leave($__internal_f16ed6caae3179af0820497bea0d346c5e7dd264c9114887a32c1c451e6c6f8f_prof);

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
