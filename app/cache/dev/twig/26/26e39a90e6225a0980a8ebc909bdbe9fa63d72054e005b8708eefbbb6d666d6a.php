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
        $__internal_806c2fcb5c55d11721cdfbdfff608b31ef747753a6339191210008967d7e14e5 = $this->env->getExtension("native_profiler");
        $__internal_806c2fcb5c55d11721cdfbdfff608b31ef747753a6339191210008967d7e14e5->enter($__internal_806c2fcb5c55d11721cdfbdfff608b31ef747753a6339191210008967d7e14e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806c2fcb5c55d11721cdfbdfff608b31ef747753a6339191210008967d7e14e5->leave($__internal_806c2fcb5c55d11721cdfbdfff608b31ef747753a6339191210008967d7e14e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12be726b6d16d5ddd3823cb1eb25edd02275f59dd38139e9abdb4f5c3ee7f302 = $this->env->getExtension("native_profiler");
        $__internal_12be726b6d16d5ddd3823cb1eb25edd02275f59dd38139e9abdb4f5c3ee7f302->enter($__internal_12be726b6d16d5ddd3823cb1eb25edd02275f59dd38139e9abdb4f5c3ee7f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12be726b6d16d5ddd3823cb1eb25edd02275f59dd38139e9abdb4f5c3ee7f302->leave($__internal_12be726b6d16d5ddd3823cb1eb25edd02275f59dd38139e9abdb4f5c3ee7f302_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6630d72ab2e0eafd885df7b83884d7f27a9984c236bcf84364439723bfea269b = $this->env->getExtension("native_profiler");
        $__internal_6630d72ab2e0eafd885df7b83884d7f27a9984c236bcf84364439723bfea269b->enter($__internal_6630d72ab2e0eafd885df7b83884d7f27a9984c236bcf84364439723bfea269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6630d72ab2e0eafd885df7b83884d7f27a9984c236bcf84364439723bfea269b->leave($__internal_6630d72ab2e0eafd885df7b83884d7f27a9984c236bcf84364439723bfea269b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ec1a0fc436e123cc7bf571468325c0dfa9bdecb8db917c6e8861a986f98458 = $this->env->getExtension("native_profiler");
        $__internal_24ec1a0fc436e123cc7bf571468325c0dfa9bdecb8db917c6e8861a986f98458->enter($__internal_24ec1a0fc436e123cc7bf571468325c0dfa9bdecb8db917c6e8861a986f98458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_24ec1a0fc436e123cc7bf571468325c0dfa9bdecb8db917c6e8861a986f98458->leave($__internal_24ec1a0fc436e123cc7bf571468325c0dfa9bdecb8db917c6e8861a986f98458_prof);

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
