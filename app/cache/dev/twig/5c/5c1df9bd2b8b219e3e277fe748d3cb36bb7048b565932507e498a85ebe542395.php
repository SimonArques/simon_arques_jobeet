<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_79838285c74afcef194024bdb554de48e38b6c39e6920521c753c94e1a3f583c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_607100d44ec43e31781ea0b620a36fddd3a302aa9e7c5c83c9c8ca40cbac66d8 = $this->env->getExtension("native_profiler");
        $__internal_607100d44ec43e31781ea0b620a36fddd3a302aa9e7c5c83c9c8ca40cbac66d8->enter($__internal_607100d44ec43e31781ea0b620a36fddd3a302aa9e7c5c83c9c8ca40cbac66d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_607100d44ec43e31781ea0b620a36fddd3a302aa9e7c5c83c9c8ca40cbac66d8->leave($__internal_607100d44ec43e31781ea0b620a36fddd3a302aa9e7c5c83c9c8ca40cbac66d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
