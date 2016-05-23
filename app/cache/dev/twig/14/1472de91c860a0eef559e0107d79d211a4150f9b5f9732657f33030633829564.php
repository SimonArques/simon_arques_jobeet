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
        $__internal_52c20d4875693d26231d6afdb6c2bb23aa51deac7dfb360a8b89778278246d39 = $this->env->getExtension("native_profiler");
        $__internal_52c20d4875693d26231d6afdb6c2bb23aa51deac7dfb360a8b89778278246d39->enter($__internal_52c20d4875693d26231d6afdb6c2bb23aa51deac7dfb360a8b89778278246d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52c20d4875693d26231d6afdb6c2bb23aa51deac7dfb360a8b89778278246d39->leave($__internal_52c20d4875693d26231d6afdb6c2bb23aa51deac7dfb360a8b89778278246d39_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2637428c701acfc4295be33d986dc744d897ad53ae1e7cdfbd0813b55a5eca3 = $this->env->getExtension("native_profiler");
        $__internal_e2637428c701acfc4295be33d986dc744d897ad53ae1e7cdfbd0813b55a5eca3->enter($__internal_e2637428c701acfc4295be33d986dc744d897ad53ae1e7cdfbd0813b55a5eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2637428c701acfc4295be33d986dc744d897ad53ae1e7cdfbd0813b55a5eca3->leave($__internal_e2637428c701acfc4295be33d986dc744d897ad53ae1e7cdfbd0813b55a5eca3_prof);

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
