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
        $__internal_00f6cfa55a40f035e3a7e2a035a098b83a824a81639242c06811b39acdda3085 = $this->env->getExtension("native_profiler");
        $__internal_00f6cfa55a40f035e3a7e2a035a098b83a824a81639242c06811b39acdda3085->enter($__internal_00f6cfa55a40f035e3a7e2a035a098b83a824a81639242c06811b39acdda3085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f6cfa55a40f035e3a7e2a035a098b83a824a81639242c06811b39acdda3085->leave($__internal_00f6cfa55a40f035e3a7e2a035a098b83a824a81639242c06811b39acdda3085_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_828da8f6f71dcf883e8131cb4a101c947f7946838e4ab94ad0886ec5f5de1807 = $this->env->getExtension("native_profiler");
        $__internal_828da8f6f71dcf883e8131cb4a101c947f7946838e4ab94ad0886ec5f5de1807->enter($__internal_828da8f6f71dcf883e8131cb4a101c947f7946838e4ab94ad0886ec5f5de1807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_828da8f6f71dcf883e8131cb4a101c947f7946838e4ab94ad0886ec5f5de1807->leave($__internal_828da8f6f71dcf883e8131cb4a101c947f7946838e4ab94ad0886ec5f5de1807_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a36bf09585605c5588e08df8385a555ea20484e4e6e2eb7f7418a9845964d20 = $this->env->getExtension("native_profiler");
        $__internal_1a36bf09585605c5588e08df8385a555ea20484e4e6e2eb7f7418a9845964d20->enter($__internal_1a36bf09585605c5588e08df8385a555ea20484e4e6e2eb7f7418a9845964d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1a36bf09585605c5588e08df8385a555ea20484e4e6e2eb7f7418a9845964d20->leave($__internal_1a36bf09585605c5588e08df8385a555ea20484e4e6e2eb7f7418a9845964d20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f7db167ba516be707cae482c8f6674230a0029333a2797cdf1a4a60728edffd = $this->env->getExtension("native_profiler");
        $__internal_4f7db167ba516be707cae482c8f6674230a0029333a2797cdf1a4a60728edffd->enter($__internal_4f7db167ba516be707cae482c8f6674230a0029333a2797cdf1a4a60728edffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4f7db167ba516be707cae482c8f6674230a0029333a2797cdf1a4a60728edffd->leave($__internal_4f7db167ba516be707cae482c8f6674230a0029333a2797cdf1a4a60728edffd_prof);

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
