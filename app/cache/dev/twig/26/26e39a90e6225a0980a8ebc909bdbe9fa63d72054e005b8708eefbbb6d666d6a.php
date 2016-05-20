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
        $__internal_1ca7fd480b1a011eff6b36a784a6f8465cdf398c4057561893a888272582eb7d = $this->env->getExtension("native_profiler");
        $__internal_1ca7fd480b1a011eff6b36a784a6f8465cdf398c4057561893a888272582eb7d->enter($__internal_1ca7fd480b1a011eff6b36a784a6f8465cdf398c4057561893a888272582eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca7fd480b1a011eff6b36a784a6f8465cdf398c4057561893a888272582eb7d->leave($__internal_1ca7fd480b1a011eff6b36a784a6f8465cdf398c4057561893a888272582eb7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d58fc4a5d79b8325e746bee00bd1dd3ca021a1ed6c30d7785f9173027a64501c = $this->env->getExtension("native_profiler");
        $__internal_d58fc4a5d79b8325e746bee00bd1dd3ca021a1ed6c30d7785f9173027a64501c->enter($__internal_d58fc4a5d79b8325e746bee00bd1dd3ca021a1ed6c30d7785f9173027a64501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d58fc4a5d79b8325e746bee00bd1dd3ca021a1ed6c30d7785f9173027a64501c->leave($__internal_d58fc4a5d79b8325e746bee00bd1dd3ca021a1ed6c30d7785f9173027a64501c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fa8a22f61d77bf41373ce24b7aa4c00f4132e071255fffabc2be6762c8f25ef = $this->env->getExtension("native_profiler");
        $__internal_7fa8a22f61d77bf41373ce24b7aa4c00f4132e071255fffabc2be6762c8f25ef->enter($__internal_7fa8a22f61d77bf41373ce24b7aa4c00f4132e071255fffabc2be6762c8f25ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7fa8a22f61d77bf41373ce24b7aa4c00f4132e071255fffabc2be6762c8f25ef->leave($__internal_7fa8a22f61d77bf41373ce24b7aa4c00f4132e071255fffabc2be6762c8f25ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85b439cca0bb5e7eb9ff1e37b9cfc9312d7ec428de42d8d5a65660aa1d5e4f21 = $this->env->getExtension("native_profiler");
        $__internal_85b439cca0bb5e7eb9ff1e37b9cfc9312d7ec428de42d8d5a65660aa1d5e4f21->enter($__internal_85b439cca0bb5e7eb9ff1e37b9cfc9312d7ec428de42d8d5a65660aa1d5e4f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_85b439cca0bb5e7eb9ff1e37b9cfc9312d7ec428de42d8d5a65660aa1d5e4f21->leave($__internal_85b439cca0bb5e7eb9ff1e37b9cfc9312d7ec428de42d8d5a65660aa1d5e4f21_prof);

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
