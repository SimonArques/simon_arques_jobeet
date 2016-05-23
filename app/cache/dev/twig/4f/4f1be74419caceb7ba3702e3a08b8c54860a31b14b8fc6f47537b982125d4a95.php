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
        $__internal_ef50e900946397b22009f8402886000bd9f699adc3ee4ef187652d3c24eacca0 = $this->env->getExtension("native_profiler");
        $__internal_ef50e900946397b22009f8402886000bd9f699adc3ee4ef187652d3c24eacca0->enter($__internal_ef50e900946397b22009f8402886000bd9f699adc3ee4ef187652d3c24eacca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef50e900946397b22009f8402886000bd9f699adc3ee4ef187652d3c24eacca0->leave($__internal_ef50e900946397b22009f8402886000bd9f699adc3ee4ef187652d3c24eacca0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0181564000e9a41b587ce4734766b177693ee290b24e3d1520ebeefca2313a55 = $this->env->getExtension("native_profiler");
        $__internal_0181564000e9a41b587ce4734766b177693ee290b24e3d1520ebeefca2313a55->enter($__internal_0181564000e9a41b587ce4734766b177693ee290b24e3d1520ebeefca2313a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0181564000e9a41b587ce4734766b177693ee290b24e3d1520ebeefca2313a55->leave($__internal_0181564000e9a41b587ce4734766b177693ee290b24e3d1520ebeefca2313a55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0db13dfa5928a4442e8fb13dd37879374a6b976c0833fd2c6db3d641349299d5 = $this->env->getExtension("native_profiler");
        $__internal_0db13dfa5928a4442e8fb13dd37879374a6b976c0833fd2c6db3d641349299d5->enter($__internal_0db13dfa5928a4442e8fb13dd37879374a6b976c0833fd2c6db3d641349299d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0db13dfa5928a4442e8fb13dd37879374a6b976c0833fd2c6db3d641349299d5->leave($__internal_0db13dfa5928a4442e8fb13dd37879374a6b976c0833fd2c6db3d641349299d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7536d54e7f861947f4e33ddfd3a9453f70446edd88dc71f44420d6f6294a1eb0 = $this->env->getExtension("native_profiler");
        $__internal_7536d54e7f861947f4e33ddfd3a9453f70446edd88dc71f44420d6f6294a1eb0->enter($__internal_7536d54e7f861947f4e33ddfd3a9453f70446edd88dc71f44420d6f6294a1eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7536d54e7f861947f4e33ddfd3a9453f70446edd88dc71f44420d6f6294a1eb0->leave($__internal_7536d54e7f861947f4e33ddfd3a9453f70446edd88dc71f44420d6f6294a1eb0_prof);

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
