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
        $__internal_797cc525f2adb680eb986af35bb5b77e9f593419f4944b27b4d84e46332602bf = $this->env->getExtension("native_profiler");
        $__internal_797cc525f2adb680eb986af35bb5b77e9f593419f4944b27b4d84e46332602bf->enter($__internal_797cc525f2adb680eb986af35bb5b77e9f593419f4944b27b4d84e46332602bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797cc525f2adb680eb986af35bb5b77e9f593419f4944b27b4d84e46332602bf->leave($__internal_797cc525f2adb680eb986af35bb5b77e9f593419f4944b27b4d84e46332602bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_546dcf1981abfd3cdad04c3f4e979ad7f6784769ab8b4620a3a9711891175282 = $this->env->getExtension("native_profiler");
        $__internal_546dcf1981abfd3cdad04c3f4e979ad7f6784769ab8b4620a3a9711891175282->enter($__internal_546dcf1981abfd3cdad04c3f4e979ad7f6784769ab8b4620a3a9711891175282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_546dcf1981abfd3cdad04c3f4e979ad7f6784769ab8b4620a3a9711891175282->leave($__internal_546dcf1981abfd3cdad04c3f4e979ad7f6784769ab8b4620a3a9711891175282_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7e91af2e74039176bacf72a047d2bcaa1a60885667ff0bc1314197a1d2a536 = $this->env->getExtension("native_profiler");
        $__internal_eb7e91af2e74039176bacf72a047d2bcaa1a60885667ff0bc1314197a1d2a536->enter($__internal_eb7e91af2e74039176bacf72a047d2bcaa1a60885667ff0bc1314197a1d2a536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb7e91af2e74039176bacf72a047d2bcaa1a60885667ff0bc1314197a1d2a536->leave($__internal_eb7e91af2e74039176bacf72a047d2bcaa1a60885667ff0bc1314197a1d2a536_prof);

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
