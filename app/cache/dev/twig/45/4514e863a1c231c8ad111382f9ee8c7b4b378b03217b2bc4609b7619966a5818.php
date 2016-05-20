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
        $__internal_c51c1d7dc085eba60738ad168dfd38d8a737db352c37804d0f5a64e0850525a1 = $this->env->getExtension("native_profiler");
        $__internal_c51c1d7dc085eba60738ad168dfd38d8a737db352c37804d0f5a64e0850525a1->enter($__internal_c51c1d7dc085eba60738ad168dfd38d8a737db352c37804d0f5a64e0850525a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51c1d7dc085eba60738ad168dfd38d8a737db352c37804d0f5a64e0850525a1->leave($__internal_c51c1d7dc085eba60738ad168dfd38d8a737db352c37804d0f5a64e0850525a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3522ff64b64c1d9b506f6a043b88b6a1eb2e7aff3a40dc186b5b11f94afa3bf6 = $this->env->getExtension("native_profiler");
        $__internal_3522ff64b64c1d9b506f6a043b88b6a1eb2e7aff3a40dc186b5b11f94afa3bf6->enter($__internal_3522ff64b64c1d9b506f6a043b88b6a1eb2e7aff3a40dc186b5b11f94afa3bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3522ff64b64c1d9b506f6a043b88b6a1eb2e7aff3a40dc186b5b11f94afa3bf6->leave($__internal_3522ff64b64c1d9b506f6a043b88b6a1eb2e7aff3a40dc186b5b11f94afa3bf6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_304befc8749f51e58779d56e63f7a672cfbf9877d450e8800685a9be587620e1 = $this->env->getExtension("native_profiler");
        $__internal_304befc8749f51e58779d56e63f7a672cfbf9877d450e8800685a9be587620e1->enter($__internal_304befc8749f51e58779d56e63f7a672cfbf9877d450e8800685a9be587620e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_304befc8749f51e58779d56e63f7a672cfbf9877d450e8800685a9be587620e1->leave($__internal_304befc8749f51e58779d56e63f7a672cfbf9877d450e8800685a9be587620e1_prof);

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
