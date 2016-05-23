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
        $__internal_0c3e833b14df865ce638854667d2397a9c044778289b381296c6a21cc7f5ab25 = $this->env->getExtension("native_profiler");
        $__internal_0c3e833b14df865ce638854667d2397a9c044778289b381296c6a21cc7f5ab25->enter($__internal_0c3e833b14df865ce638854667d2397a9c044778289b381296c6a21cc7f5ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3e833b14df865ce638854667d2397a9c044778289b381296c6a21cc7f5ab25->leave($__internal_0c3e833b14df865ce638854667d2397a9c044778289b381296c6a21cc7f5ab25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebf316b6e69109249e1093b014171b50da2e6063df185e928c957759d1da1946 = $this->env->getExtension("native_profiler");
        $__internal_ebf316b6e69109249e1093b014171b50da2e6063df185e928c957759d1da1946->enter($__internal_ebf316b6e69109249e1093b014171b50da2e6063df185e928c957759d1da1946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebf316b6e69109249e1093b014171b50da2e6063df185e928c957759d1da1946->leave($__internal_ebf316b6e69109249e1093b014171b50da2e6063df185e928c957759d1da1946_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_178e4261650a55b38b38deaf931d2fc106fea186b456da597f63569560e8c08e = $this->env->getExtension("native_profiler");
        $__internal_178e4261650a55b38b38deaf931d2fc106fea186b456da597f63569560e8c08e->enter($__internal_178e4261650a55b38b38deaf931d2fc106fea186b456da597f63569560e8c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_178e4261650a55b38b38deaf931d2fc106fea186b456da597f63569560e8c08e->leave($__internal_178e4261650a55b38b38deaf931d2fc106fea186b456da597f63569560e8c08e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_550874abd0498889a9fa20ecd355b21f0c54d84ba245cf95ddbd22b676237de8 = $this->env->getExtension("native_profiler");
        $__internal_550874abd0498889a9fa20ecd355b21f0c54d84ba245cf95ddbd22b676237de8->enter($__internal_550874abd0498889a9fa20ecd355b21f0c54d84ba245cf95ddbd22b676237de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_550874abd0498889a9fa20ecd355b21f0c54d84ba245cf95ddbd22b676237de8->leave($__internal_550874abd0498889a9fa20ecd355b21f0c54d84ba245cf95ddbd22b676237de8_prof);

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
