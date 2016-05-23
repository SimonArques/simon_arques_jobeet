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
        $__internal_5eb41caab1a1a2d7fa27a9ac7544a62c7917f12a6101ec460eb49efbc19a2837 = $this->env->getExtension("native_profiler");
        $__internal_5eb41caab1a1a2d7fa27a9ac7544a62c7917f12a6101ec460eb49efbc19a2837->enter($__internal_5eb41caab1a1a2d7fa27a9ac7544a62c7917f12a6101ec460eb49efbc19a2837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb41caab1a1a2d7fa27a9ac7544a62c7917f12a6101ec460eb49efbc19a2837->leave($__internal_5eb41caab1a1a2d7fa27a9ac7544a62c7917f12a6101ec460eb49efbc19a2837_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb799bcb02a6b57b4327ac3bf80c228fa58881b7a97af6570b67d0cd140a3939 = $this->env->getExtension("native_profiler");
        $__internal_fb799bcb02a6b57b4327ac3bf80c228fa58881b7a97af6570b67d0cd140a3939->enter($__internal_fb799bcb02a6b57b4327ac3bf80c228fa58881b7a97af6570b67d0cd140a3939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb799bcb02a6b57b4327ac3bf80c228fa58881b7a97af6570b67d0cd140a3939->leave($__internal_fb799bcb02a6b57b4327ac3bf80c228fa58881b7a97af6570b67d0cd140a3939_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce227aad065a1ab3a49e86cc515b717b15a88a8c72264e0a7b48ccbe871b9208 = $this->env->getExtension("native_profiler");
        $__internal_ce227aad065a1ab3a49e86cc515b717b15a88a8c72264e0a7b48ccbe871b9208->enter($__internal_ce227aad065a1ab3a49e86cc515b717b15a88a8c72264e0a7b48ccbe871b9208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce227aad065a1ab3a49e86cc515b717b15a88a8c72264e0a7b48ccbe871b9208->leave($__internal_ce227aad065a1ab3a49e86cc515b717b15a88a8c72264e0a7b48ccbe871b9208_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac107fdea55f5c8c6cadafb1942f5f43db9eceaa13dd9e8183445cd688bf58c9 = $this->env->getExtension("native_profiler");
        $__internal_ac107fdea55f5c8c6cadafb1942f5f43db9eceaa13dd9e8183445cd688bf58c9->enter($__internal_ac107fdea55f5c8c6cadafb1942f5f43db9eceaa13dd9e8183445cd688bf58c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac107fdea55f5c8c6cadafb1942f5f43db9eceaa13dd9e8183445cd688bf58c9->leave($__internal_ac107fdea55f5c8c6cadafb1942f5f43db9eceaa13dd9e8183445cd688bf58c9_prof);

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
