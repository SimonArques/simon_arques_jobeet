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
        $__internal_44d9a91b2f9f658fe9f9268d28b0d689a3ce5f9b7b557a0ab7db9594b1f359f2 = $this->env->getExtension("native_profiler");
        $__internal_44d9a91b2f9f658fe9f9268d28b0d689a3ce5f9b7b557a0ab7db9594b1f359f2->enter($__internal_44d9a91b2f9f658fe9f9268d28b0d689a3ce5f9b7b557a0ab7db9594b1f359f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d9a91b2f9f658fe9f9268d28b0d689a3ce5f9b7b557a0ab7db9594b1f359f2->leave($__internal_44d9a91b2f9f658fe9f9268d28b0d689a3ce5f9b7b557a0ab7db9594b1f359f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e13702823ca9e1f27ca726fd00d36938cf92d63752ab07465c0683e5aab54027 = $this->env->getExtension("native_profiler");
        $__internal_e13702823ca9e1f27ca726fd00d36938cf92d63752ab07465c0683e5aab54027->enter($__internal_e13702823ca9e1f27ca726fd00d36938cf92d63752ab07465c0683e5aab54027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e13702823ca9e1f27ca726fd00d36938cf92d63752ab07465c0683e5aab54027->leave($__internal_e13702823ca9e1f27ca726fd00d36938cf92d63752ab07465c0683e5aab54027_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5346fc9ddfb27864559f71598a144b4ced8efda15389de30709eb2de571c30b = $this->env->getExtension("native_profiler");
        $__internal_f5346fc9ddfb27864559f71598a144b4ced8efda15389de30709eb2de571c30b->enter($__internal_f5346fc9ddfb27864559f71598a144b4ced8efda15389de30709eb2de571c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5346fc9ddfb27864559f71598a144b4ced8efda15389de30709eb2de571c30b->leave($__internal_f5346fc9ddfb27864559f71598a144b4ced8efda15389de30709eb2de571c30b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e524f421e287f539d7d766bd2ca3109d8ae32e2abeffe4ba8cfd7d7cacd3e29 = $this->env->getExtension("native_profiler");
        $__internal_3e524f421e287f539d7d766bd2ca3109d8ae32e2abeffe4ba8cfd7d7cacd3e29->enter($__internal_3e524f421e287f539d7d766bd2ca3109d8ae32e2abeffe4ba8cfd7d7cacd3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e524f421e287f539d7d766bd2ca3109d8ae32e2abeffe4ba8cfd7d7cacd3e29->leave($__internal_3e524f421e287f539d7d766bd2ca3109d8ae32e2abeffe4ba8cfd7d7cacd3e29_prof);

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
