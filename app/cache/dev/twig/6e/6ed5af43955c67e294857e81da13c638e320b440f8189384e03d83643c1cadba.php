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
        $__internal_27374f00c5e61b0e59f038b6a25f1d20f36e8dbbd156e069e96b9a0c78269202 = $this->env->getExtension("native_profiler");
        $__internal_27374f00c5e61b0e59f038b6a25f1d20f36e8dbbd156e069e96b9a0c78269202->enter($__internal_27374f00c5e61b0e59f038b6a25f1d20f36e8dbbd156e069e96b9a0c78269202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_27374f00c5e61b0e59f038b6a25f1d20f36e8dbbd156e069e96b9a0c78269202->leave($__internal_27374f00c5e61b0e59f038b6a25f1d20f36e8dbbd156e069e96b9a0c78269202_prof);

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
