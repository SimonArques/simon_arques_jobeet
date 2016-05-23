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
        $__internal_0e1497413a17df9a73f37c62cecf290b94a71dc4406cd92f36b6ab03c63d8fc1 = $this->env->getExtension("native_profiler");
        $__internal_0e1497413a17df9a73f37c62cecf290b94a71dc4406cd92f36b6ab03c63d8fc1->enter($__internal_0e1497413a17df9a73f37c62cecf290b94a71dc4406cd92f36b6ab03c63d8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1497413a17df9a73f37c62cecf290b94a71dc4406cd92f36b6ab03c63d8fc1->leave($__internal_0e1497413a17df9a73f37c62cecf290b94a71dc4406cd92f36b6ab03c63d8fc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1e8b0248e03fca1d4a2471f5c6fd7610b247e8216ac688d4064990cc363942 = $this->env->getExtension("native_profiler");
        $__internal_1f1e8b0248e03fca1d4a2471f5c6fd7610b247e8216ac688d4064990cc363942->enter($__internal_1f1e8b0248e03fca1d4a2471f5c6fd7610b247e8216ac688d4064990cc363942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f1e8b0248e03fca1d4a2471f5c6fd7610b247e8216ac688d4064990cc363942->leave($__internal_1f1e8b0248e03fca1d4a2471f5c6fd7610b247e8216ac688d4064990cc363942_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_020fed215319151184b0bbd0b59a2a9cae0fbce0079fd8b4373538e4a6247c21 = $this->env->getExtension("native_profiler");
        $__internal_020fed215319151184b0bbd0b59a2a9cae0fbce0079fd8b4373538e4a6247c21->enter($__internal_020fed215319151184b0bbd0b59a2a9cae0fbce0079fd8b4373538e4a6247c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_020fed215319151184b0bbd0b59a2a9cae0fbce0079fd8b4373538e4a6247c21->leave($__internal_020fed215319151184b0bbd0b59a2a9cae0fbce0079fd8b4373538e4a6247c21_prof);

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
