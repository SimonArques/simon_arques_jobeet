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
        $__internal_57dbad2ec8778958c17ecc4d9357f6f5487023b5576c8475faddf80194469412 = $this->env->getExtension("native_profiler");
        $__internal_57dbad2ec8778958c17ecc4d9357f6f5487023b5576c8475faddf80194469412->enter($__internal_57dbad2ec8778958c17ecc4d9357f6f5487023b5576c8475faddf80194469412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57dbad2ec8778958c17ecc4d9357f6f5487023b5576c8475faddf80194469412->leave($__internal_57dbad2ec8778958c17ecc4d9357f6f5487023b5576c8475faddf80194469412_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d1594b77d7a099530a321eb71c08b4a69e1d4e6e85cbd606b880bad882ece8b = $this->env->getExtension("native_profiler");
        $__internal_5d1594b77d7a099530a321eb71c08b4a69e1d4e6e85cbd606b880bad882ece8b->enter($__internal_5d1594b77d7a099530a321eb71c08b4a69e1d4e6e85cbd606b880bad882ece8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d1594b77d7a099530a321eb71c08b4a69e1d4e6e85cbd606b880bad882ece8b->leave($__internal_5d1594b77d7a099530a321eb71c08b4a69e1d4e6e85cbd606b880bad882ece8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2dcdbe858878f1bdd608d28ceed4b262f39f55b36f07e51e5c2be231dfedfa = $this->env->getExtension("native_profiler");
        $__internal_1b2dcdbe858878f1bdd608d28ceed4b262f39f55b36f07e51e5c2be231dfedfa->enter($__internal_1b2dcdbe858878f1bdd608d28ceed4b262f39f55b36f07e51e5c2be231dfedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b2dcdbe858878f1bdd608d28ceed4b262f39f55b36f07e51e5c2be231dfedfa->leave($__internal_1b2dcdbe858878f1bdd608d28ceed4b262f39f55b36f07e51e5c2be231dfedfa_prof);

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
