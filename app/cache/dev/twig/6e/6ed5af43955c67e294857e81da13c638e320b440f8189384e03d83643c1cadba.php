<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5bcc6d24af52b3d83b2679118688fc0e7ec1884e6541bf4d43a3652de35b10d extends Twig_Template
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
        $__internal_76a589ea6dc3f59e2a6ddc7b15e3f1d712a5f91067d6539a830a0a3511d7791f = $this->env->getExtension("native_profiler");
        $__internal_76a589ea6dc3f59e2a6ddc7b15e3f1d712a5f91067d6539a830a0a3511d7791f->enter($__internal_76a589ea6dc3f59e2a6ddc7b15e3f1d712a5f91067d6539a830a0a3511d7791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_76a589ea6dc3f59e2a6ddc7b15e3f1d712a5f91067d6539a830a0a3511d7791f->leave($__internal_76a589ea6dc3f59e2a6ddc7b15e3f1d712a5f91067d6539a830a0a3511d7791f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
