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
        $__internal_9a8970637b29fef18e01240bdbe939e27eb505322745fc6b6a7acc5eebb509b8 = $this->env->getExtension("native_profiler");
        $__internal_9a8970637b29fef18e01240bdbe939e27eb505322745fc6b6a7acc5eebb509b8->enter($__internal_9a8970637b29fef18e01240bdbe939e27eb505322745fc6b6a7acc5eebb509b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9a8970637b29fef18e01240bdbe939e27eb505322745fc6b6a7acc5eebb509b8->leave($__internal_9a8970637b29fef18e01240bdbe939e27eb505322745fc6b6a7acc5eebb509b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80bcebffe8076bf7b90c4456ce59781ade79437dc463c7b2c885903e2555a969 = $this->env->getExtension("native_profiler");
        $__internal_80bcebffe8076bf7b90c4456ce59781ade79437dc463c7b2c885903e2555a969->enter($__internal_80bcebffe8076bf7b90c4456ce59781ade79437dc463c7b2c885903e2555a969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80bcebffe8076bf7b90c4456ce59781ade79437dc463c7b2c885903e2555a969->leave($__internal_80bcebffe8076bf7b90c4456ce59781ade79437dc463c7b2c885903e2555a969_prof);

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
