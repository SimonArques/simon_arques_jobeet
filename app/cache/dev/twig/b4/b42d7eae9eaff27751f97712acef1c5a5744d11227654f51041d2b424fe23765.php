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
        $__internal_f4f944b5ebb9eda98bcece3ac0518d804282ccf40ff803f6fd434acf05f9bc41 = $this->env->getExtension("native_profiler");
        $__internal_f4f944b5ebb9eda98bcece3ac0518d804282ccf40ff803f6fd434acf05f9bc41->enter($__internal_f4f944b5ebb9eda98bcece3ac0518d804282ccf40ff803f6fd434acf05f9bc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f944b5ebb9eda98bcece3ac0518d804282ccf40ff803f6fd434acf05f9bc41->leave($__internal_f4f944b5ebb9eda98bcece3ac0518d804282ccf40ff803f6fd434acf05f9bc41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5574d80974f81e6a63baebc2107a607427b5506d53b1fc91e2df6ffab3912735 = $this->env->getExtension("native_profiler");
        $__internal_5574d80974f81e6a63baebc2107a607427b5506d53b1fc91e2df6ffab3912735->enter($__internal_5574d80974f81e6a63baebc2107a607427b5506d53b1fc91e2df6ffab3912735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5574d80974f81e6a63baebc2107a607427b5506d53b1fc91e2df6ffab3912735->leave($__internal_5574d80974f81e6a63baebc2107a607427b5506d53b1fc91e2df6ffab3912735_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_435546d866347f03940d279bae1d536580f9aa551655b0330e4e332ba1c9d1e6 = $this->env->getExtension("native_profiler");
        $__internal_435546d866347f03940d279bae1d536580f9aa551655b0330e4e332ba1c9d1e6->enter($__internal_435546d866347f03940d279bae1d536580f9aa551655b0330e4e332ba1c9d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_435546d866347f03940d279bae1d536580f9aa551655b0330e4e332ba1c9d1e6->leave($__internal_435546d866347f03940d279bae1d536580f9aa551655b0330e4e332ba1c9d1e6_prof);

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
