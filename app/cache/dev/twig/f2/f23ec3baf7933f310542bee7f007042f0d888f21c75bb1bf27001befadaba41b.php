<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_faa9f9d573a19d97d37146e3603856e6af3dba51c7849d2c1f86f24efbb358b5 extends Twig_Template
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
        $__internal_91dc7fb5400d56317ce8ac23f721e8e6cc38906f281a35afa3720e35014a5578 = $this->env->getExtension("native_profiler");
        $__internal_91dc7fb5400d56317ce8ac23f721e8e6cc38906f281a35afa3720e35014a5578->enter($__internal_91dc7fb5400d56317ce8ac23f721e8e6cc38906f281a35afa3720e35014a5578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_91dc7fb5400d56317ce8ac23f721e8e6cc38906f281a35afa3720e35014a5578->leave($__internal_91dc7fb5400d56317ce8ac23f721e8e6cc38906f281a35afa3720e35014a5578_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
