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
        $__internal_f692a69a88c8688cfb2802923f06c66662a3e10b50ffa90bd27f26b9788a1e89 = $this->env->getExtension("native_profiler");
        $__internal_f692a69a88c8688cfb2802923f06c66662a3e10b50ffa90bd27f26b9788a1e89->enter($__internal_f692a69a88c8688cfb2802923f06c66662a3e10b50ffa90bd27f26b9788a1e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f692a69a88c8688cfb2802923f06c66662a3e10b50ffa90bd27f26b9788a1e89->leave($__internal_f692a69a88c8688cfb2802923f06c66662a3e10b50ffa90bd27f26b9788a1e89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50a72e3e40cacb99784820edd13527202f6efee52a66407417aafebe3de3b83a = $this->env->getExtension("native_profiler");
        $__internal_50a72e3e40cacb99784820edd13527202f6efee52a66407417aafebe3de3b83a->enter($__internal_50a72e3e40cacb99784820edd13527202f6efee52a66407417aafebe3de3b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_50a72e3e40cacb99784820edd13527202f6efee52a66407417aafebe3de3b83a->leave($__internal_50a72e3e40cacb99784820edd13527202f6efee52a66407417aafebe3de3b83a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90ffb3010eadc5c47636edd4566ed6d067ed26b02098b0dd8c8c6f7573c6d00b = $this->env->getExtension("native_profiler");
        $__internal_90ffb3010eadc5c47636edd4566ed6d067ed26b02098b0dd8c8c6f7573c6d00b->enter($__internal_90ffb3010eadc5c47636edd4566ed6d067ed26b02098b0dd8c8c6f7573c6d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90ffb3010eadc5c47636edd4566ed6d067ed26b02098b0dd8c8c6f7573c6d00b->leave($__internal_90ffb3010eadc5c47636edd4566ed6d067ed26b02098b0dd8c8c6f7573c6d00b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50cb7a69edeb2d202463b1bb624fe22acc1cf7a82da9f53fa9925c39af781f5 = $this->env->getExtension("native_profiler");
        $__internal_c50cb7a69edeb2d202463b1bb624fe22acc1cf7a82da9f53fa9925c39af781f5->enter($__internal_c50cb7a69edeb2d202463b1bb624fe22acc1cf7a82da9f53fa9925c39af781f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c50cb7a69edeb2d202463b1bb624fe22acc1cf7a82da9f53fa9925c39af781f5->leave($__internal_c50cb7a69edeb2d202463b1bb624fe22acc1cf7a82da9f53fa9925c39af781f5_prof);

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
