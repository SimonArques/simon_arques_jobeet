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
        $__internal_667c3f07e1f674198149cbc134869195baf5a1dc171b3c3a9234eaea42e168e4 = $this->env->getExtension("native_profiler");
        $__internal_667c3f07e1f674198149cbc134869195baf5a1dc171b3c3a9234eaea42e168e4->enter($__internal_667c3f07e1f674198149cbc134869195baf5a1dc171b3c3a9234eaea42e168e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_667c3f07e1f674198149cbc134869195baf5a1dc171b3c3a9234eaea42e168e4->leave($__internal_667c3f07e1f674198149cbc134869195baf5a1dc171b3c3a9234eaea42e168e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bbc2b353ca6fbe2fdc62105554ec5e36fce3e98d8de9b7332ce269504f36037 = $this->env->getExtension("native_profiler");
        $__internal_3bbc2b353ca6fbe2fdc62105554ec5e36fce3e98d8de9b7332ce269504f36037->enter($__internal_3bbc2b353ca6fbe2fdc62105554ec5e36fce3e98d8de9b7332ce269504f36037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3bbc2b353ca6fbe2fdc62105554ec5e36fce3e98d8de9b7332ce269504f36037->leave($__internal_3bbc2b353ca6fbe2fdc62105554ec5e36fce3e98d8de9b7332ce269504f36037_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d45555ed5fe1f9c989047e75d7d547b0aff3c422b8a0c8dfd24ca93fbd39d954 = $this->env->getExtension("native_profiler");
        $__internal_d45555ed5fe1f9c989047e75d7d547b0aff3c422b8a0c8dfd24ca93fbd39d954->enter($__internal_d45555ed5fe1f9c989047e75d7d547b0aff3c422b8a0c8dfd24ca93fbd39d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d45555ed5fe1f9c989047e75d7d547b0aff3c422b8a0c8dfd24ca93fbd39d954->leave($__internal_d45555ed5fe1f9c989047e75d7d547b0aff3c422b8a0c8dfd24ca93fbd39d954_prof);

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
