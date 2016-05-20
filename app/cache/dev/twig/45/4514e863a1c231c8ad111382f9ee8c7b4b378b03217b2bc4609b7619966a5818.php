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
        $__internal_498d6e15f64d9cbd1d472c00e07bd943dc3db8f4f4081685da8aaab2ef2b5e0d = $this->env->getExtension("native_profiler");
        $__internal_498d6e15f64d9cbd1d472c00e07bd943dc3db8f4f4081685da8aaab2ef2b5e0d->enter($__internal_498d6e15f64d9cbd1d472c00e07bd943dc3db8f4f4081685da8aaab2ef2b5e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498d6e15f64d9cbd1d472c00e07bd943dc3db8f4f4081685da8aaab2ef2b5e0d->leave($__internal_498d6e15f64d9cbd1d472c00e07bd943dc3db8f4f4081685da8aaab2ef2b5e0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04519532e98368203c5d3f4c054c421523be1363071e79cd20993017e931bf09 = $this->env->getExtension("native_profiler");
        $__internal_04519532e98368203c5d3f4c054c421523be1363071e79cd20993017e931bf09->enter($__internal_04519532e98368203c5d3f4c054c421523be1363071e79cd20993017e931bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_04519532e98368203c5d3f4c054c421523be1363071e79cd20993017e931bf09->leave($__internal_04519532e98368203c5d3f4c054c421523be1363071e79cd20993017e931bf09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ffbc9b7f9739e9d730b78962134f87e6b02d2447bee2a96b1cde7a4dbae663 = $this->env->getExtension("native_profiler");
        $__internal_d3ffbc9b7f9739e9d730b78962134f87e6b02d2447bee2a96b1cde7a4dbae663->enter($__internal_d3ffbc9b7f9739e9d730b78962134f87e6b02d2447bee2a96b1cde7a4dbae663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3ffbc9b7f9739e9d730b78962134f87e6b02d2447bee2a96b1cde7a4dbae663->leave($__internal_d3ffbc9b7f9739e9d730b78962134f87e6b02d2447bee2a96b1cde7a4dbae663_prof);

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
