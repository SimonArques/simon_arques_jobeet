<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24964af2d2c66e6c4fd839ed8c30ba69480386efaabbe7fb962b9a0212c9ef66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f6345b2a1e3e0dada174ce06567d81b9b1b6b0f1e263437c7fac2c1cff1ee2c0 = $this->env->getExtension("native_profiler");
        $__internal_f6345b2a1e3e0dada174ce06567d81b9b1b6b0f1e263437c7fac2c1cff1ee2c0->enter($__internal_f6345b2a1e3e0dada174ce06567d81b9b1b6b0f1e263437c7fac2c1cff1ee2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6345b2a1e3e0dada174ce06567d81b9b1b6b0f1e263437c7fac2c1cff1ee2c0->leave($__internal_f6345b2a1e3e0dada174ce06567d81b9b1b6b0f1e263437c7fac2c1cff1ee2c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec65a9b2cd7ce7547c60101d02840c591f7d0e26af6478f26d452fa19c59aefa = $this->env->getExtension("native_profiler");
        $__internal_ec65a9b2cd7ce7547c60101d02840c591f7d0e26af6478f26d452fa19c59aefa->enter($__internal_ec65a9b2cd7ce7547c60101d02840c591f7d0e26af6478f26d452fa19c59aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec65a9b2cd7ce7547c60101d02840c591f7d0e26af6478f26d452fa19c59aefa->leave($__internal_ec65a9b2cd7ce7547c60101d02840c591f7d0e26af6478f26d452fa19c59aefa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00335562ef5be9f71d17cdf9044398cad171101cfb451b0efa82e30d9a92ce6 = $this->env->getExtension("native_profiler");
        $__internal_c00335562ef5be9f71d17cdf9044398cad171101cfb451b0efa82e30d9a92ce6->enter($__internal_c00335562ef5be9f71d17cdf9044398cad171101cfb451b0efa82e30d9a92ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c00335562ef5be9f71d17cdf9044398cad171101cfb451b0efa82e30d9a92ce6->leave($__internal_c00335562ef5be9f71d17cdf9044398cad171101cfb451b0efa82e30d9a92ce6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
