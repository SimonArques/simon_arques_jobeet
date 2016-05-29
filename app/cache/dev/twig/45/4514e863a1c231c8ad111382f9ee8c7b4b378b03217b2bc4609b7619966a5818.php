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
        $__internal_e439acabc3d5c023e8c705b9f40d3b5d51d9b2a3ae6efa32d457a85016c37b64 = $this->env->getExtension("native_profiler");
        $__internal_e439acabc3d5c023e8c705b9f40d3b5d51d9b2a3ae6efa32d457a85016c37b64->enter($__internal_e439acabc3d5c023e8c705b9f40d3b5d51d9b2a3ae6efa32d457a85016c37b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e439acabc3d5c023e8c705b9f40d3b5d51d9b2a3ae6efa32d457a85016c37b64->leave($__internal_e439acabc3d5c023e8c705b9f40d3b5d51d9b2a3ae6efa32d457a85016c37b64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e765aceffb1cbbefa7336c906fca9fffe2fa460e69fb88ab9a9b8def0265930 = $this->env->getExtension("native_profiler");
        $__internal_7e765aceffb1cbbefa7336c906fca9fffe2fa460e69fb88ab9a9b8def0265930->enter($__internal_7e765aceffb1cbbefa7336c906fca9fffe2fa460e69fb88ab9a9b8def0265930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7e765aceffb1cbbefa7336c906fca9fffe2fa460e69fb88ab9a9b8def0265930->leave($__internal_7e765aceffb1cbbefa7336c906fca9fffe2fa460e69fb88ab9a9b8def0265930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ea2bd936a46ea593ce3b1c02b9b464f3fab1a7fb900657293d68caef7bc187 = $this->env->getExtension("native_profiler");
        $__internal_54ea2bd936a46ea593ce3b1c02b9b464f3fab1a7fb900657293d68caef7bc187->enter($__internal_54ea2bd936a46ea593ce3b1c02b9b464f3fab1a7fb900657293d68caef7bc187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54ea2bd936a46ea593ce3b1c02b9b464f3fab1a7fb900657293d68caef7bc187->leave($__internal_54ea2bd936a46ea593ce3b1c02b9b464f3fab1a7fb900657293d68caef7bc187_prof);

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
