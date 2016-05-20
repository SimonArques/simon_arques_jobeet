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
        $__internal_2d09d50a50ad28adb713a3e9237eb808b9ddc6c8cbab32adcde804d81d2afdf5 = $this->env->getExtension("native_profiler");
        $__internal_2d09d50a50ad28adb713a3e9237eb808b9ddc6c8cbab32adcde804d81d2afdf5->enter($__internal_2d09d50a50ad28adb713a3e9237eb808b9ddc6c8cbab32adcde804d81d2afdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d09d50a50ad28adb713a3e9237eb808b9ddc6c8cbab32adcde804d81d2afdf5->leave($__internal_2d09d50a50ad28adb713a3e9237eb808b9ddc6c8cbab32adcde804d81d2afdf5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef50b7b4f8069565531a9f0e22bc9078d17f8093e9226b2b87ecc11ff192b125 = $this->env->getExtension("native_profiler");
        $__internal_ef50b7b4f8069565531a9f0e22bc9078d17f8093e9226b2b87ecc11ff192b125->enter($__internal_ef50b7b4f8069565531a9f0e22bc9078d17f8093e9226b2b87ecc11ff192b125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef50b7b4f8069565531a9f0e22bc9078d17f8093e9226b2b87ecc11ff192b125->leave($__internal_ef50b7b4f8069565531a9f0e22bc9078d17f8093e9226b2b87ecc11ff192b125_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ab057d6bda1f5a32d7d184ffbe12ee8d08d64c09266ec698d01e9b699db536 = $this->env->getExtension("native_profiler");
        $__internal_e7ab057d6bda1f5a32d7d184ffbe12ee8d08d64c09266ec698d01e9b699db536->enter($__internal_e7ab057d6bda1f5a32d7d184ffbe12ee8d08d64c09266ec698d01e9b699db536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7ab057d6bda1f5a32d7d184ffbe12ee8d08d64c09266ec698d01e9b699db536->leave($__internal_e7ab057d6bda1f5a32d7d184ffbe12ee8d08d64c09266ec698d01e9b699db536_prof);

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
