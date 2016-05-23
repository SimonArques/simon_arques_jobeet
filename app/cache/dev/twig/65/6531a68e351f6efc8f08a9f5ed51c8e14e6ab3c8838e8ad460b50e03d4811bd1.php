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
        $__internal_61281512b713199a3ef79b8f60686fbf17f7de74dfceb38e3a1790ee12cba6e3 = $this->env->getExtension("native_profiler");
        $__internal_61281512b713199a3ef79b8f60686fbf17f7de74dfceb38e3a1790ee12cba6e3->enter($__internal_61281512b713199a3ef79b8f60686fbf17f7de74dfceb38e3a1790ee12cba6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_61281512b713199a3ef79b8f60686fbf17f7de74dfceb38e3a1790ee12cba6e3->leave($__internal_61281512b713199a3ef79b8f60686fbf17f7de74dfceb38e3a1790ee12cba6e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_69aed44be3c16b0f6bdb0e8d3735b8788be5cdfdcfd962a1dadf988789fb19b0 = $this->env->getExtension("native_profiler");
        $__internal_69aed44be3c16b0f6bdb0e8d3735b8788be5cdfdcfd962a1dadf988789fb19b0->enter($__internal_69aed44be3c16b0f6bdb0e8d3735b8788be5cdfdcfd962a1dadf988789fb19b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_69aed44be3c16b0f6bdb0e8d3735b8788be5cdfdcfd962a1dadf988789fb19b0->leave($__internal_69aed44be3c16b0f6bdb0e8d3735b8788be5cdfdcfd962a1dadf988789fb19b0_prof);

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
