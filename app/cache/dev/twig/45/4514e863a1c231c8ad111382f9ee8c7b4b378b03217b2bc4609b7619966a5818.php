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
        $__internal_c636e96577ac3970f81b7d6ce4415d6c83620b23d59d7c35f6321cefbf72ca65 = $this->env->getExtension("native_profiler");
        $__internal_c636e96577ac3970f81b7d6ce4415d6c83620b23d59d7c35f6321cefbf72ca65->enter($__internal_c636e96577ac3970f81b7d6ce4415d6c83620b23d59d7c35f6321cefbf72ca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c636e96577ac3970f81b7d6ce4415d6c83620b23d59d7c35f6321cefbf72ca65->leave($__internal_c636e96577ac3970f81b7d6ce4415d6c83620b23d59d7c35f6321cefbf72ca65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04cf0b47cd3097e1e0d4de7ebf1cb8ea7138c0370431009fde5305cef37fb892 = $this->env->getExtension("native_profiler");
        $__internal_04cf0b47cd3097e1e0d4de7ebf1cb8ea7138c0370431009fde5305cef37fb892->enter($__internal_04cf0b47cd3097e1e0d4de7ebf1cb8ea7138c0370431009fde5305cef37fb892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_04cf0b47cd3097e1e0d4de7ebf1cb8ea7138c0370431009fde5305cef37fb892->leave($__internal_04cf0b47cd3097e1e0d4de7ebf1cb8ea7138c0370431009fde5305cef37fb892_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7c814a568f7cfcaf0f5602b0696737f905ba41c80ac0fa1ee080e0066b8e64 = $this->env->getExtension("native_profiler");
        $__internal_bd7c814a568f7cfcaf0f5602b0696737f905ba41c80ac0fa1ee080e0066b8e64->enter($__internal_bd7c814a568f7cfcaf0f5602b0696737f905ba41c80ac0fa1ee080e0066b8e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd7c814a568f7cfcaf0f5602b0696737f905ba41c80ac0fa1ee080e0066b8e64->leave($__internal_bd7c814a568f7cfcaf0f5602b0696737f905ba41c80ac0fa1ee080e0066b8e64_prof);

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
