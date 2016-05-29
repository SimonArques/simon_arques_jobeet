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
        $__internal_fbde3f88747e54094a78ed588dad014165445e0a329302e8dc6b39a9a01610fe = $this->env->getExtension("native_profiler");
        $__internal_fbde3f88747e54094a78ed588dad014165445e0a329302e8dc6b39a9a01610fe->enter($__internal_fbde3f88747e54094a78ed588dad014165445e0a329302e8dc6b39a9a01610fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbde3f88747e54094a78ed588dad014165445e0a329302e8dc6b39a9a01610fe->leave($__internal_fbde3f88747e54094a78ed588dad014165445e0a329302e8dc6b39a9a01610fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79aeaeb14bca50550c6e004b97af35e7b94bc50d3ff44548f2f53ecd05968be5 = $this->env->getExtension("native_profiler");
        $__internal_79aeaeb14bca50550c6e004b97af35e7b94bc50d3ff44548f2f53ecd05968be5->enter($__internal_79aeaeb14bca50550c6e004b97af35e7b94bc50d3ff44548f2f53ecd05968be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79aeaeb14bca50550c6e004b97af35e7b94bc50d3ff44548f2f53ecd05968be5->leave($__internal_79aeaeb14bca50550c6e004b97af35e7b94bc50d3ff44548f2f53ecd05968be5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e422e8ffc67558d55c8473258b315f4f9cd76ff971c253dc48bce8be8eef69f3 = $this->env->getExtension("native_profiler");
        $__internal_e422e8ffc67558d55c8473258b315f4f9cd76ff971c253dc48bce8be8eef69f3->enter($__internal_e422e8ffc67558d55c8473258b315f4f9cd76ff971c253dc48bce8be8eef69f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e422e8ffc67558d55c8473258b315f4f9cd76ff971c253dc48bce8be8eef69f3->leave($__internal_e422e8ffc67558d55c8473258b315f4f9cd76ff971c253dc48bce8be8eef69f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76bd4e864edf22362c078000ea38ef32cd3386d580084f5c3e13548de276b0d7 = $this->env->getExtension("native_profiler");
        $__internal_76bd4e864edf22362c078000ea38ef32cd3386d580084f5c3e13548de276b0d7->enter($__internal_76bd4e864edf22362c078000ea38ef32cd3386d580084f5c3e13548de276b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76bd4e864edf22362c078000ea38ef32cd3386d580084f5c3e13548de276b0d7->leave($__internal_76bd4e864edf22362c078000ea38ef32cd3386d580084f5c3e13548de276b0d7_prof);

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
