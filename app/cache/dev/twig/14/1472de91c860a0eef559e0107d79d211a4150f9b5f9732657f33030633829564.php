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
        $__internal_ef3aa6fa3f0a3a4f0a80ac9bc55e05dcc46d1b6f33eae6ba08c9c104676f866b = $this->env->getExtension("native_profiler");
        $__internal_ef3aa6fa3f0a3a4f0a80ac9bc55e05dcc46d1b6f33eae6ba08c9c104676f866b->enter($__internal_ef3aa6fa3f0a3a4f0a80ac9bc55e05dcc46d1b6f33eae6ba08c9c104676f866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef3aa6fa3f0a3a4f0a80ac9bc55e05dcc46d1b6f33eae6ba08c9c104676f866b->leave($__internal_ef3aa6fa3f0a3a4f0a80ac9bc55e05dcc46d1b6f33eae6ba08c9c104676f866b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6abaec158f5acbe5dd4e7269894ae99208a804da70cc5ef7dc749e7d6b99f24e = $this->env->getExtension("native_profiler");
        $__internal_6abaec158f5acbe5dd4e7269894ae99208a804da70cc5ef7dc749e7d6b99f24e->enter($__internal_6abaec158f5acbe5dd4e7269894ae99208a804da70cc5ef7dc749e7d6b99f24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6abaec158f5acbe5dd4e7269894ae99208a804da70cc5ef7dc749e7d6b99f24e->leave($__internal_6abaec158f5acbe5dd4e7269894ae99208a804da70cc5ef7dc749e7d6b99f24e_prof);

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
