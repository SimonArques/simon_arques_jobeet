<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_82bff594469f9ef5597fe6575ecd6e3d62859801319bf0d9466ade5bc4558d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_0bff567bf0a46e17b7d57fbcc2cd769ebc52c92d1950d1be428f3278322e712c = $this->env->getExtension("native_profiler");
        $__internal_0bff567bf0a46e17b7d57fbcc2cd769ebc52c92d1950d1be428f3278322e712c->enter($__internal_0bff567bf0a46e17b7d57fbcc2cd769ebc52c92d1950d1be428f3278322e712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bff567bf0a46e17b7d57fbcc2cd769ebc52c92d1950d1be428f3278322e712c->leave($__internal_0bff567bf0a46e17b7d57fbcc2cd769ebc52c92d1950d1be428f3278322e712c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d09248e12cf7f592e8ce952e692764fd7d98b48f2acd68d5e1dbe2b0d850d535 = $this->env->getExtension("native_profiler");
        $__internal_d09248e12cf7f592e8ce952e692764fd7d98b48f2acd68d5e1dbe2b0d850d535->enter($__internal_d09248e12cf7f592e8ce952e692764fd7d98b48f2acd68d5e1dbe2b0d850d535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d09248e12cf7f592e8ce952e692764fd7d98b48f2acd68d5e1dbe2b0d850d535->leave($__internal_d09248e12cf7f592e8ce952e692764fd7d98b48f2acd68d5e1dbe2b0d850d535_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61af69cd958fb18432a1c07227e64c49328d925ac9aa6a071c3cfea397f76a5c = $this->env->getExtension("native_profiler");
        $__internal_61af69cd958fb18432a1c07227e64c49328d925ac9aa6a071c3cfea397f76a5c->enter($__internal_61af69cd958fb18432a1c07227e64c49328d925ac9aa6a071c3cfea397f76a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61af69cd958fb18432a1c07227e64c49328d925ac9aa6a071c3cfea397f76a5c->leave($__internal_61af69cd958fb18432a1c07227e64c49328d925ac9aa6a071c3cfea397f76a5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0897c4c4b6a136a107cd2b2049443c634ad4a864faa79e10707f1da80c01a2c2 = $this->env->getExtension("native_profiler");
        $__internal_0897c4c4b6a136a107cd2b2049443c634ad4a864faa79e10707f1da80c01a2c2->enter($__internal_0897c4c4b6a136a107cd2b2049443c634ad4a864faa79e10707f1da80c01a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0897c4c4b6a136a107cd2b2049443c634ad4a864faa79e10707f1da80c01a2c2->leave($__internal_0897c4c4b6a136a107cd2b2049443c634ad4a864faa79e10707f1da80c01a2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
