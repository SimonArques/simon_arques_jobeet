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
        $__internal_28681ae5ddc600ec51cc28f2371c7734281b29f3d628dea74d00635b69935ffa = $this->env->getExtension("native_profiler");
        $__internal_28681ae5ddc600ec51cc28f2371c7734281b29f3d628dea74d00635b69935ffa->enter($__internal_28681ae5ddc600ec51cc28f2371c7734281b29f3d628dea74d00635b69935ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_28681ae5ddc600ec51cc28f2371c7734281b29f3d628dea74d00635b69935ffa->leave($__internal_28681ae5ddc600ec51cc28f2371c7734281b29f3d628dea74d00635b69935ffa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c293ff2deac924404f214911bcedc8817d54c99056969fc199d6be2a3e8f0e2 = $this->env->getExtension("native_profiler");
        $__internal_2c293ff2deac924404f214911bcedc8817d54c99056969fc199d6be2a3e8f0e2->enter($__internal_2c293ff2deac924404f214911bcedc8817d54c99056969fc199d6be2a3e8f0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c293ff2deac924404f214911bcedc8817d54c99056969fc199d6be2a3e8f0e2->leave($__internal_2c293ff2deac924404f214911bcedc8817d54c99056969fc199d6be2a3e8f0e2_prof);

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
