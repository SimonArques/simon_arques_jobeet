<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6317ead908d483206d2eea502970c58e71d0afef34e17ee4da29a4f21eea985f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9804b7f539b6973b7b9e2331d066a618cb4e23b49cae8b7756375e3d4281f0a5 = $this->env->getExtension("native_profiler");
        $__internal_9804b7f539b6973b7b9e2331d066a618cb4e23b49cae8b7756375e3d4281f0a5->enter($__internal_9804b7f539b6973b7b9e2331d066a618cb4e23b49cae8b7756375e3d4281f0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9804b7f539b6973b7b9e2331d066a618cb4e23b49cae8b7756375e3d4281f0a5->leave($__internal_9804b7f539b6973b7b9e2331d066a618cb4e23b49cae8b7756375e3d4281f0a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7384cfeea4e7ca5a041825fec1d934cb13910a940e8c3dd708cab6a1d2b576ec = $this->env->getExtension("native_profiler");
        $__internal_7384cfeea4e7ca5a041825fec1d934cb13910a940e8c3dd708cab6a1d2b576ec->enter($__internal_7384cfeea4e7ca5a041825fec1d934cb13910a940e8c3dd708cab6a1d2b576ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7384cfeea4e7ca5a041825fec1d934cb13910a940e8c3dd708cab6a1d2b576ec->leave($__internal_7384cfeea4e7ca5a041825fec1d934cb13910a940e8c3dd708cab6a1d2b576ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b93ce5fb908107243c4dd8b0aad47241565fc2a0f150f89b2332ae95308e28cc = $this->env->getExtension("native_profiler");
        $__internal_b93ce5fb908107243c4dd8b0aad47241565fc2a0f150f89b2332ae95308e28cc->enter($__internal_b93ce5fb908107243c4dd8b0aad47241565fc2a0f150f89b2332ae95308e28cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b93ce5fb908107243c4dd8b0aad47241565fc2a0f150f89b2332ae95308e28cc->leave($__internal_b93ce5fb908107243c4dd8b0aad47241565fc2a0f150f89b2332ae95308e28cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50a3e6f84247a4fe737909882582fd40bed4c58f1970b81e9e6aaec0fe5a0de5 = $this->env->getExtension("native_profiler");
        $__internal_50a3e6f84247a4fe737909882582fd40bed4c58f1970b81e9e6aaec0fe5a0de5->enter($__internal_50a3e6f84247a4fe737909882582fd40bed4c58f1970b81e9e6aaec0fe5a0de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50a3e6f84247a4fe737909882582fd40bed4c58f1970b81e9e6aaec0fe5a0de5->leave($__internal_50a3e6f84247a4fe737909882582fd40bed4c58f1970b81e9e6aaec0fe5a0de5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
