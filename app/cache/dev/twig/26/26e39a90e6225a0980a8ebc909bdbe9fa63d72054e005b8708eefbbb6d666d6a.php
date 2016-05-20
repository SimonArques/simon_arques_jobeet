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
        $__internal_2bf0c01f83ebc5fa7916ea193378e38ef9f8dccfc8b55e7095fc50d63e0ec05e = $this->env->getExtension("native_profiler");
        $__internal_2bf0c01f83ebc5fa7916ea193378e38ef9f8dccfc8b55e7095fc50d63e0ec05e->enter($__internal_2bf0c01f83ebc5fa7916ea193378e38ef9f8dccfc8b55e7095fc50d63e0ec05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf0c01f83ebc5fa7916ea193378e38ef9f8dccfc8b55e7095fc50d63e0ec05e->leave($__internal_2bf0c01f83ebc5fa7916ea193378e38ef9f8dccfc8b55e7095fc50d63e0ec05e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6727f20927c23eb09d52871d5b6d94a975d34656a2e2981d9aed3cb353c7abb = $this->env->getExtension("native_profiler");
        $__internal_b6727f20927c23eb09d52871d5b6d94a975d34656a2e2981d9aed3cb353c7abb->enter($__internal_b6727f20927c23eb09d52871d5b6d94a975d34656a2e2981d9aed3cb353c7abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6727f20927c23eb09d52871d5b6d94a975d34656a2e2981d9aed3cb353c7abb->leave($__internal_b6727f20927c23eb09d52871d5b6d94a975d34656a2e2981d9aed3cb353c7abb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75bfcd98dba65fe353d0764a836c51750d8e3b35f35c72fb52748d04143245c5 = $this->env->getExtension("native_profiler");
        $__internal_75bfcd98dba65fe353d0764a836c51750d8e3b35f35c72fb52748d04143245c5->enter($__internal_75bfcd98dba65fe353d0764a836c51750d8e3b35f35c72fb52748d04143245c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75bfcd98dba65fe353d0764a836c51750d8e3b35f35c72fb52748d04143245c5->leave($__internal_75bfcd98dba65fe353d0764a836c51750d8e3b35f35c72fb52748d04143245c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_508d7be5a5e7b804c47dc668167908681792c138ab4e38292befe280564a3fc3 = $this->env->getExtension("native_profiler");
        $__internal_508d7be5a5e7b804c47dc668167908681792c138ab4e38292befe280564a3fc3->enter($__internal_508d7be5a5e7b804c47dc668167908681792c138ab4e38292befe280564a3fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_508d7be5a5e7b804c47dc668167908681792c138ab4e38292befe280564a3fc3->leave($__internal_508d7be5a5e7b804c47dc668167908681792c138ab4e38292befe280564a3fc3_prof);

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
