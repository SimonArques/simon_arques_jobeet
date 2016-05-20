<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c552fd44faa6cc538626d52eda9dd2b6c5d61ba4ee98281126bd5fdc1fc356cd extends Twig_Template
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
        $__internal_281ff21366dee00c7f897b57227850193c619c0ead44947a96c96323104037bb = $this->env->getExtension("native_profiler");
        $__internal_281ff21366dee00c7f897b57227850193c619c0ead44947a96c96323104037bb->enter($__internal_281ff21366dee00c7f897b57227850193c619c0ead44947a96c96323104037bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_281ff21366dee00c7f897b57227850193c619c0ead44947a96c96323104037bb->leave($__internal_281ff21366dee00c7f897b57227850193c619c0ead44947a96c96323104037bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
