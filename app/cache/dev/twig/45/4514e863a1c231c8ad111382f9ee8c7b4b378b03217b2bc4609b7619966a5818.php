<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_09bac9918c735e2509c07938f48dad547996230e502e41093796a3eaec0723da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6a7df0738b3d9d7d1a28c345d52ab5f183b7d8cbada7f53a32da0a60610ea8af = $this->env->getExtension("native_profiler");
        $__internal_6a7df0738b3d9d7d1a28c345d52ab5f183b7d8cbada7f53a32da0a60610ea8af->enter($__internal_6a7df0738b3d9d7d1a28c345d52ab5f183b7d8cbada7f53a32da0a60610ea8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a7df0738b3d9d7d1a28c345d52ab5f183b7d8cbada7f53a32da0a60610ea8af->leave($__internal_6a7df0738b3d9d7d1a28c345d52ab5f183b7d8cbada7f53a32da0a60610ea8af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c667987ddd28d51c7d1a1f9f48558d58d0a3e543173aaf5294452f06a3d281c3 = $this->env->getExtension("native_profiler");
        $__internal_c667987ddd28d51c7d1a1f9f48558d58d0a3e543173aaf5294452f06a3d281c3->enter($__internal_c667987ddd28d51c7d1a1f9f48558d58d0a3e543173aaf5294452f06a3d281c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c667987ddd28d51c7d1a1f9f48558d58d0a3e543173aaf5294452f06a3d281c3->leave($__internal_c667987ddd28d51c7d1a1f9f48558d58d0a3e543173aaf5294452f06a3d281c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_820ae5776f8abcc3c2306b13992ee1822a303685aeb379323538f8c8c425b471 = $this->env->getExtension("native_profiler");
        $__internal_820ae5776f8abcc3c2306b13992ee1822a303685aeb379323538f8c8c425b471->enter($__internal_820ae5776f8abcc3c2306b13992ee1822a303685aeb379323538f8c8c425b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_820ae5776f8abcc3c2306b13992ee1822a303685aeb379323538f8c8c425b471->leave($__internal_820ae5776f8abcc3c2306b13992ee1822a303685aeb379323538f8c8c425b471_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
