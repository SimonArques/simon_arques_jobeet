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
        $__internal_348500be4030b009a138046ea4ec04d4706dd76b3bf05c89b37ebf2048a14bb8 = $this->env->getExtension("native_profiler");
        $__internal_348500be4030b009a138046ea4ec04d4706dd76b3bf05c89b37ebf2048a14bb8->enter($__internal_348500be4030b009a138046ea4ec04d4706dd76b3bf05c89b37ebf2048a14bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_348500be4030b009a138046ea4ec04d4706dd76b3bf05c89b37ebf2048a14bb8->leave($__internal_348500be4030b009a138046ea4ec04d4706dd76b3bf05c89b37ebf2048a14bb8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46ca49c9932c1b1bc0e2790b298bfc3b66e1d95c85d0bda3b5c82498352070c5 = $this->env->getExtension("native_profiler");
        $__internal_46ca49c9932c1b1bc0e2790b298bfc3b66e1d95c85d0bda3b5c82498352070c5->enter($__internal_46ca49c9932c1b1bc0e2790b298bfc3b66e1d95c85d0bda3b5c82498352070c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_46ca49c9932c1b1bc0e2790b298bfc3b66e1d95c85d0bda3b5c82498352070c5->leave($__internal_46ca49c9932c1b1bc0e2790b298bfc3b66e1d95c85d0bda3b5c82498352070c5_prof);

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
