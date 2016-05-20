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
        $__internal_12763fe673f3a21a6dfc0f3658c591286004077784a7d6ca559f2e1c99e19654 = $this->env->getExtension("native_profiler");
        $__internal_12763fe673f3a21a6dfc0f3658c591286004077784a7d6ca559f2e1c99e19654->enter($__internal_12763fe673f3a21a6dfc0f3658c591286004077784a7d6ca559f2e1c99e19654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_12763fe673f3a21a6dfc0f3658c591286004077784a7d6ca559f2e1c99e19654->leave($__internal_12763fe673f3a21a6dfc0f3658c591286004077784a7d6ca559f2e1c99e19654_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5bf760a984d45d4b01258322dc021625d37ed22bb627e6b4f2cfe5c7ce4fb60 = $this->env->getExtension("native_profiler");
        $__internal_b5bf760a984d45d4b01258322dc021625d37ed22bb627e6b4f2cfe5c7ce4fb60->enter($__internal_b5bf760a984d45d4b01258322dc021625d37ed22bb627e6b4f2cfe5c7ce4fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5bf760a984d45d4b01258322dc021625d37ed22bb627e6b4f2cfe5c7ce4fb60->leave($__internal_b5bf760a984d45d4b01258322dc021625d37ed22bb627e6b4f2cfe5c7ce4fb60_prof);

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
