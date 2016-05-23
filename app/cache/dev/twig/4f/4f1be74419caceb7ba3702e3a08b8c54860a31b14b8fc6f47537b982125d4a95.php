<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_abcd4b9247ab7ea670dd8805af98b798f3ee2bd6fd1e7050d8236e027d9ab6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6fd04177ccb5588d16ad3ef8081da6a155889a456ea2bff6a7d577db749015b0 = $this->env->getExtension("native_profiler");
        $__internal_6fd04177ccb5588d16ad3ef8081da6a155889a456ea2bff6a7d577db749015b0->enter($__internal_6fd04177ccb5588d16ad3ef8081da6a155889a456ea2bff6a7d577db749015b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd04177ccb5588d16ad3ef8081da6a155889a456ea2bff6a7d577db749015b0->leave($__internal_6fd04177ccb5588d16ad3ef8081da6a155889a456ea2bff6a7d577db749015b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f11bdf8fae32b504d1cbefd3a8c309055a587489056ae719f7ec8e0c28688ee7 = $this->env->getExtension("native_profiler");
        $__internal_f11bdf8fae32b504d1cbefd3a8c309055a587489056ae719f7ec8e0c28688ee7->enter($__internal_f11bdf8fae32b504d1cbefd3a8c309055a587489056ae719f7ec8e0c28688ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f11bdf8fae32b504d1cbefd3a8c309055a587489056ae719f7ec8e0c28688ee7->leave($__internal_f11bdf8fae32b504d1cbefd3a8c309055a587489056ae719f7ec8e0c28688ee7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b02aeb37ad3f95f57693df3c9b21cfeadca16c67a167b256f6bfb1576ad39f77 = $this->env->getExtension("native_profiler");
        $__internal_b02aeb37ad3f95f57693df3c9b21cfeadca16c67a167b256f6bfb1576ad39f77->enter($__internal_b02aeb37ad3f95f57693df3c9b21cfeadca16c67a167b256f6bfb1576ad39f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b02aeb37ad3f95f57693df3c9b21cfeadca16c67a167b256f6bfb1576ad39f77->leave($__internal_b02aeb37ad3f95f57693df3c9b21cfeadca16c67a167b256f6bfb1576ad39f77_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_796229a3ffd3110b0edfc91508ffe1e769116fad7f310561da06a666939b18fb = $this->env->getExtension("native_profiler");
        $__internal_796229a3ffd3110b0edfc91508ffe1e769116fad7f310561da06a666939b18fb->enter($__internal_796229a3ffd3110b0edfc91508ffe1e769116fad7f310561da06a666939b18fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_796229a3ffd3110b0edfc91508ffe1e769116fad7f310561da06a666939b18fb->leave($__internal_796229a3ffd3110b0edfc91508ffe1e769116fad7f310561da06a666939b18fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
