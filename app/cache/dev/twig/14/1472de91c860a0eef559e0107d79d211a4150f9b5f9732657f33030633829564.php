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
        $__internal_0ef3205ea76b5367384f6b3d49068d4d8ed972408ca1eef5f810e087e098a50b = $this->env->getExtension("native_profiler");
        $__internal_0ef3205ea76b5367384f6b3d49068d4d8ed972408ca1eef5f810e087e098a50b->enter($__internal_0ef3205ea76b5367384f6b3d49068d4d8ed972408ca1eef5f810e087e098a50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ef3205ea76b5367384f6b3d49068d4d8ed972408ca1eef5f810e087e098a50b->leave($__internal_0ef3205ea76b5367384f6b3d49068d4d8ed972408ca1eef5f810e087e098a50b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_808034ad7da7ec08242a28a17bafcfb103e69ffef27b998dc8fe3039059b34c3 = $this->env->getExtension("native_profiler");
        $__internal_808034ad7da7ec08242a28a17bafcfb103e69ffef27b998dc8fe3039059b34c3->enter($__internal_808034ad7da7ec08242a28a17bafcfb103e69ffef27b998dc8fe3039059b34c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_808034ad7da7ec08242a28a17bafcfb103e69ffef27b998dc8fe3039059b34c3->leave($__internal_808034ad7da7ec08242a28a17bafcfb103e69ffef27b998dc8fe3039059b34c3_prof);

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
