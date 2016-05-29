<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24964af2d2c66e6c4fd839ed8c30ba69480386efaabbe7fb962b9a0212c9ef66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f467f5344317b221879ce2282e970913e4faea9204d6f9f4c63cb1cb9b401f = $this->env->getExtension("native_profiler");
        $__internal_a4f467f5344317b221879ce2282e970913e4faea9204d6f9f4c63cb1cb9b401f->enter($__internal_a4f467f5344317b221879ce2282e970913e4faea9204d6f9f4c63cb1cb9b401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f467f5344317b221879ce2282e970913e4faea9204d6f9f4c63cb1cb9b401f->leave($__internal_a4f467f5344317b221879ce2282e970913e4faea9204d6f9f4c63cb1cb9b401f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea9209eef3537f19bbdfc2e75e6ef52ffab30278d04bf483da44ac08ec436c9f = $this->env->getExtension("native_profiler");
        $__internal_ea9209eef3537f19bbdfc2e75e6ef52ffab30278d04bf483da44ac08ec436c9f->enter($__internal_ea9209eef3537f19bbdfc2e75e6ef52ffab30278d04bf483da44ac08ec436c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea9209eef3537f19bbdfc2e75e6ef52ffab30278d04bf483da44ac08ec436c9f->leave($__internal_ea9209eef3537f19bbdfc2e75e6ef52ffab30278d04bf483da44ac08ec436c9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_205e79e6f41a994f082525cf0e06efadf037cce62937658b46ae741c164772ab = $this->env->getExtension("native_profiler");
        $__internal_205e79e6f41a994f082525cf0e06efadf037cce62937658b46ae741c164772ab->enter($__internal_205e79e6f41a994f082525cf0e06efadf037cce62937658b46ae741c164772ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_205e79e6f41a994f082525cf0e06efadf037cce62937658b46ae741c164772ab->leave($__internal_205e79e6f41a994f082525cf0e06efadf037cce62937658b46ae741c164772ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
