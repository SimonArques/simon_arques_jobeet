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
        $__internal_5915dda11a5b5ad9aa776ac12988028e660a3eab42c64d654e3a076afe685a02 = $this->env->getExtension("native_profiler");
        $__internal_5915dda11a5b5ad9aa776ac12988028e660a3eab42c64d654e3a076afe685a02->enter($__internal_5915dda11a5b5ad9aa776ac12988028e660a3eab42c64d654e3a076afe685a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5915dda11a5b5ad9aa776ac12988028e660a3eab42c64d654e3a076afe685a02->leave($__internal_5915dda11a5b5ad9aa776ac12988028e660a3eab42c64d654e3a076afe685a02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67948d922fb8f00322760d8bf1b7b6edf3180a6139bf839c28c1db77ebbedfd0 = $this->env->getExtension("native_profiler");
        $__internal_67948d922fb8f00322760d8bf1b7b6edf3180a6139bf839c28c1db77ebbedfd0->enter($__internal_67948d922fb8f00322760d8bf1b7b6edf3180a6139bf839c28c1db77ebbedfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_67948d922fb8f00322760d8bf1b7b6edf3180a6139bf839c28c1db77ebbedfd0->leave($__internal_67948d922fb8f00322760d8bf1b7b6edf3180a6139bf839c28c1db77ebbedfd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4ad3226fb1225d978abdf867638c4128bf38e5cc3ad6db15266d515324ed591 = $this->env->getExtension("native_profiler");
        $__internal_a4ad3226fb1225d978abdf867638c4128bf38e5cc3ad6db15266d515324ed591->enter($__internal_a4ad3226fb1225d978abdf867638c4128bf38e5cc3ad6db15266d515324ed591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4ad3226fb1225d978abdf867638c4128bf38e5cc3ad6db15266d515324ed591->leave($__internal_a4ad3226fb1225d978abdf867638c4128bf38e5cc3ad6db15266d515324ed591_prof);

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
