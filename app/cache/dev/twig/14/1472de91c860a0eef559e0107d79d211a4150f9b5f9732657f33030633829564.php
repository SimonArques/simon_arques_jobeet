<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0d8ed252f34a6a3648f347bbe8893e72f490a78320d16852ec785a0a3923938d extends Twig_Template
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
        $__internal_9f7c8e8ae062c6647a2f02541cff34d67897c863ce4039f4e2d65f42722f7b43 = $this->env->getExtension("native_profiler");
        $__internal_9f7c8e8ae062c6647a2f02541cff34d67897c863ce4039f4e2d65f42722f7b43->enter($__internal_9f7c8e8ae062c6647a2f02541cff34d67897c863ce4039f4e2d65f42722f7b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9f7c8e8ae062c6647a2f02541cff34d67897c863ce4039f4e2d65f42722f7b43->leave($__internal_9f7c8e8ae062c6647a2f02541cff34d67897c863ce4039f4e2d65f42722f7b43_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_921e0454503761edfa99f4ba4a44922e6da2ebbedd3dc7101e15c4e5e98d9feb = $this->env->getExtension("native_profiler");
        $__internal_921e0454503761edfa99f4ba4a44922e6da2ebbedd3dc7101e15c4e5e98d9feb->enter($__internal_921e0454503761edfa99f4ba4a44922e6da2ebbedd3dc7101e15c4e5e98d9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_921e0454503761edfa99f4ba4a44922e6da2ebbedd3dc7101e15c4e5e98d9feb->leave($__internal_921e0454503761edfa99f4ba4a44922e6da2ebbedd3dc7101e15c4e5e98d9feb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
