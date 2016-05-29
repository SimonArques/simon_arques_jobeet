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
        $__internal_5afda7defd2bf42eff481e470ea86e38409970eacf5cc9ecc647bd7e206e79cb = $this->env->getExtension("native_profiler");
        $__internal_5afda7defd2bf42eff481e470ea86e38409970eacf5cc9ecc647bd7e206e79cb->enter($__internal_5afda7defd2bf42eff481e470ea86e38409970eacf5cc9ecc647bd7e206e79cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5afda7defd2bf42eff481e470ea86e38409970eacf5cc9ecc647bd7e206e79cb->leave($__internal_5afda7defd2bf42eff481e470ea86e38409970eacf5cc9ecc647bd7e206e79cb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebcb7d43d3ea2f56857aa9026645c94a39403bd9c00aed0a880f1e3b57ece2b0 = $this->env->getExtension("native_profiler");
        $__internal_ebcb7d43d3ea2f56857aa9026645c94a39403bd9c00aed0a880f1e3b57ece2b0->enter($__internal_ebcb7d43d3ea2f56857aa9026645c94a39403bd9c00aed0a880f1e3b57ece2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebcb7d43d3ea2f56857aa9026645c94a39403bd9c00aed0a880f1e3b57ece2b0->leave($__internal_ebcb7d43d3ea2f56857aa9026645c94a39403bd9c00aed0a880f1e3b57ece2b0_prof);

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
