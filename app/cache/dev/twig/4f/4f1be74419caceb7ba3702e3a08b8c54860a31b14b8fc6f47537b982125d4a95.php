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
        $__internal_671940591cd4cd01aea9deba67197c3fca7cc9adb0d10053bc5cc3884e3bec70 = $this->env->getExtension("native_profiler");
        $__internal_671940591cd4cd01aea9deba67197c3fca7cc9adb0d10053bc5cc3884e3bec70->enter($__internal_671940591cd4cd01aea9deba67197c3fca7cc9adb0d10053bc5cc3884e3bec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_671940591cd4cd01aea9deba67197c3fca7cc9adb0d10053bc5cc3884e3bec70->leave($__internal_671940591cd4cd01aea9deba67197c3fca7cc9adb0d10053bc5cc3884e3bec70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fceee3c3251e5634b393015aa56a7f5e50891c5fb4280d146f69efb5235ab4d = $this->env->getExtension("native_profiler");
        $__internal_1fceee3c3251e5634b393015aa56a7f5e50891c5fb4280d146f69efb5235ab4d->enter($__internal_1fceee3c3251e5634b393015aa56a7f5e50891c5fb4280d146f69efb5235ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fceee3c3251e5634b393015aa56a7f5e50891c5fb4280d146f69efb5235ab4d->leave($__internal_1fceee3c3251e5634b393015aa56a7f5e50891c5fb4280d146f69efb5235ab4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3834152031318f8f1ca2f702a1b8b06207a578ffb9e6a5ae84ed5953626579c8 = $this->env->getExtension("native_profiler");
        $__internal_3834152031318f8f1ca2f702a1b8b06207a578ffb9e6a5ae84ed5953626579c8->enter($__internal_3834152031318f8f1ca2f702a1b8b06207a578ffb9e6a5ae84ed5953626579c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3834152031318f8f1ca2f702a1b8b06207a578ffb9e6a5ae84ed5953626579c8->leave($__internal_3834152031318f8f1ca2f702a1b8b06207a578ffb9e6a5ae84ed5953626579c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe5899c55a0e44246e1218c94400a3689281215f01c4730dcc56c2f8012ad43 = $this->env->getExtension("native_profiler");
        $__internal_7fe5899c55a0e44246e1218c94400a3689281215f01c4730dcc56c2f8012ad43->enter($__internal_7fe5899c55a0e44246e1218c94400a3689281215f01c4730dcc56c2f8012ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7fe5899c55a0e44246e1218c94400a3689281215f01c4730dcc56c2f8012ad43->leave($__internal_7fe5899c55a0e44246e1218c94400a3689281215f01c4730dcc56c2f8012ad43_prof);

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
