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
        $__internal_1addc10203073a5606d82c8735f7e0fae6990690593a5b270912b95c1eae3002 = $this->env->getExtension("native_profiler");
        $__internal_1addc10203073a5606d82c8735f7e0fae6990690593a5b270912b95c1eae3002->enter($__internal_1addc10203073a5606d82c8735f7e0fae6990690593a5b270912b95c1eae3002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1addc10203073a5606d82c8735f7e0fae6990690593a5b270912b95c1eae3002->leave($__internal_1addc10203073a5606d82c8735f7e0fae6990690593a5b270912b95c1eae3002_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2128a86a5919c7b3f7358bd55184382999a4f3522355d6dbbd686acfcef0bacc = $this->env->getExtension("native_profiler");
        $__internal_2128a86a5919c7b3f7358bd55184382999a4f3522355d6dbbd686acfcef0bacc->enter($__internal_2128a86a5919c7b3f7358bd55184382999a4f3522355d6dbbd686acfcef0bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2128a86a5919c7b3f7358bd55184382999a4f3522355d6dbbd686acfcef0bacc->leave($__internal_2128a86a5919c7b3f7358bd55184382999a4f3522355d6dbbd686acfcef0bacc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad1fb3d1f80ecb35f90bc911f0083a5a10ed126dcb469ddae726ad0c839e5d31 = $this->env->getExtension("native_profiler");
        $__internal_ad1fb3d1f80ecb35f90bc911f0083a5a10ed126dcb469ddae726ad0c839e5d31->enter($__internal_ad1fb3d1f80ecb35f90bc911f0083a5a10ed126dcb469ddae726ad0c839e5d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad1fb3d1f80ecb35f90bc911f0083a5a10ed126dcb469ddae726ad0c839e5d31->leave($__internal_ad1fb3d1f80ecb35f90bc911f0083a5a10ed126dcb469ddae726ad0c839e5d31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cccaf6adc9211d45d1a4a7ee9c3940ebabf4773dcdd76711e4e295d3b42ce8e4 = $this->env->getExtension("native_profiler");
        $__internal_cccaf6adc9211d45d1a4a7ee9c3940ebabf4773dcdd76711e4e295d3b42ce8e4->enter($__internal_cccaf6adc9211d45d1a4a7ee9c3940ebabf4773dcdd76711e4e295d3b42ce8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cccaf6adc9211d45d1a4a7ee9c3940ebabf4773dcdd76711e4e295d3b42ce8e4->leave($__internal_cccaf6adc9211d45d1a4a7ee9c3940ebabf4773dcdd76711e4e295d3b42ce8e4_prof);

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
