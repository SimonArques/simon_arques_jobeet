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
        $__internal_8ec4686dfc7df3b741cd3dcb29b6e52094bff4b93d7396a47b97139925ada73b = $this->env->getExtension("native_profiler");
        $__internal_8ec4686dfc7df3b741cd3dcb29b6e52094bff4b93d7396a47b97139925ada73b->enter($__internal_8ec4686dfc7df3b741cd3dcb29b6e52094bff4b93d7396a47b97139925ada73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ec4686dfc7df3b741cd3dcb29b6e52094bff4b93d7396a47b97139925ada73b->leave($__internal_8ec4686dfc7df3b741cd3dcb29b6e52094bff4b93d7396a47b97139925ada73b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d6c0756e18889a587306f309b5de3b8808cf99716e485e0854d0035725deba9 = $this->env->getExtension("native_profiler");
        $__internal_9d6c0756e18889a587306f309b5de3b8808cf99716e485e0854d0035725deba9->enter($__internal_9d6c0756e18889a587306f309b5de3b8808cf99716e485e0854d0035725deba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d6c0756e18889a587306f309b5de3b8808cf99716e485e0854d0035725deba9->leave($__internal_9d6c0756e18889a587306f309b5de3b8808cf99716e485e0854d0035725deba9_prof);

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
