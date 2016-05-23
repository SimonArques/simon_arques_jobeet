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
        $__internal_0e67de9b92dde2bf81f03a663ac9579f19d04a72066e5cc3d0f17b7622c7f08f = $this->env->getExtension("native_profiler");
        $__internal_0e67de9b92dde2bf81f03a663ac9579f19d04a72066e5cc3d0f17b7622c7f08f->enter($__internal_0e67de9b92dde2bf81f03a663ac9579f19d04a72066e5cc3d0f17b7622c7f08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e67de9b92dde2bf81f03a663ac9579f19d04a72066e5cc3d0f17b7622c7f08f->leave($__internal_0e67de9b92dde2bf81f03a663ac9579f19d04a72066e5cc3d0f17b7622c7f08f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d729e398cca6e34579de25b4e4e89f343d2b63f7cd785ef43d9f19a8fc0468bd = $this->env->getExtension("native_profiler");
        $__internal_d729e398cca6e34579de25b4e4e89f343d2b63f7cd785ef43d9f19a8fc0468bd->enter($__internal_d729e398cca6e34579de25b4e4e89f343d2b63f7cd785ef43d9f19a8fc0468bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d729e398cca6e34579de25b4e4e89f343d2b63f7cd785ef43d9f19a8fc0468bd->leave($__internal_d729e398cca6e34579de25b4e4e89f343d2b63f7cd785ef43d9f19a8fc0468bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb124c3c62e5799eaf4e1d725b7905fa76f51c79d10f3b140eacad4d0c6ea0c = $this->env->getExtension("native_profiler");
        $__internal_4bb124c3c62e5799eaf4e1d725b7905fa76f51c79d10f3b140eacad4d0c6ea0c->enter($__internal_4bb124c3c62e5799eaf4e1d725b7905fa76f51c79d10f3b140eacad4d0c6ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bb124c3c62e5799eaf4e1d725b7905fa76f51c79d10f3b140eacad4d0c6ea0c->leave($__internal_4bb124c3c62e5799eaf4e1d725b7905fa76f51c79d10f3b140eacad4d0c6ea0c_prof);

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
