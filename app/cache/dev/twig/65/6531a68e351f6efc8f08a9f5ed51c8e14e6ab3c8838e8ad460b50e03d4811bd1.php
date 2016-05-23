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
        $__internal_3d58ae065143d51edeabdde36094d922ba4948d4393100791611a3aa77222a08 = $this->env->getExtension("native_profiler");
        $__internal_3d58ae065143d51edeabdde36094d922ba4948d4393100791611a3aa77222a08->enter($__internal_3d58ae065143d51edeabdde36094d922ba4948d4393100791611a3aa77222a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3d58ae065143d51edeabdde36094d922ba4948d4393100791611a3aa77222a08->leave($__internal_3d58ae065143d51edeabdde36094d922ba4948d4393100791611a3aa77222a08_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb7876a049472f4fe8851be053115573cbf4a1658e066724893e2aa718432989 = $this->env->getExtension("native_profiler");
        $__internal_fb7876a049472f4fe8851be053115573cbf4a1658e066724893e2aa718432989->enter($__internal_fb7876a049472f4fe8851be053115573cbf4a1658e066724893e2aa718432989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb7876a049472f4fe8851be053115573cbf4a1658e066724893e2aa718432989->leave($__internal_fb7876a049472f4fe8851be053115573cbf4a1658e066724893e2aa718432989_prof);

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
