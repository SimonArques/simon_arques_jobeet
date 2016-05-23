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
        $__internal_7336c7874cda2e89031637f2c6b4bfff21b1369d43dd8814e9bce9162f2ec1d3 = $this->env->getExtension("native_profiler");
        $__internal_7336c7874cda2e89031637f2c6b4bfff21b1369d43dd8814e9bce9162f2ec1d3->enter($__internal_7336c7874cda2e89031637f2c6b4bfff21b1369d43dd8814e9bce9162f2ec1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7336c7874cda2e89031637f2c6b4bfff21b1369d43dd8814e9bce9162f2ec1d3->leave($__internal_7336c7874cda2e89031637f2c6b4bfff21b1369d43dd8814e9bce9162f2ec1d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4da1d895c3f3bce9e483f295612d04e1293a6ed3e8d432925922902756036cb3 = $this->env->getExtension("native_profiler");
        $__internal_4da1d895c3f3bce9e483f295612d04e1293a6ed3e8d432925922902756036cb3->enter($__internal_4da1d895c3f3bce9e483f295612d04e1293a6ed3e8d432925922902756036cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4da1d895c3f3bce9e483f295612d04e1293a6ed3e8d432925922902756036cb3->leave($__internal_4da1d895c3f3bce9e483f295612d04e1293a6ed3e8d432925922902756036cb3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e7961f11a27da91189f8f20f3bf9ee85f97694a7fc97feb21537ee3b28b041c = $this->env->getExtension("native_profiler");
        $__internal_4e7961f11a27da91189f8f20f3bf9ee85f97694a7fc97feb21537ee3b28b041c->enter($__internal_4e7961f11a27da91189f8f20f3bf9ee85f97694a7fc97feb21537ee3b28b041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e7961f11a27da91189f8f20f3bf9ee85f97694a7fc97feb21537ee3b28b041c->leave($__internal_4e7961f11a27da91189f8f20f3bf9ee85f97694a7fc97feb21537ee3b28b041c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b2350a3ed715ff08cde2e0717e1f7063150be44040810b0eae9e57b485bf4f0 = $this->env->getExtension("native_profiler");
        $__internal_5b2350a3ed715ff08cde2e0717e1f7063150be44040810b0eae9e57b485bf4f0->enter($__internal_5b2350a3ed715ff08cde2e0717e1f7063150be44040810b0eae9e57b485bf4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b2350a3ed715ff08cde2e0717e1f7063150be44040810b0eae9e57b485bf4f0->leave($__internal_5b2350a3ed715ff08cde2e0717e1f7063150be44040810b0eae9e57b485bf4f0_prof);

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
