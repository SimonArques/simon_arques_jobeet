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
        $__internal_918d1cfd5a5cd124584d0fc37ae56352e63f60797884194ec51c8c461de6fbc8 = $this->env->getExtension("native_profiler");
        $__internal_918d1cfd5a5cd124584d0fc37ae56352e63f60797884194ec51c8c461de6fbc8->enter($__internal_918d1cfd5a5cd124584d0fc37ae56352e63f60797884194ec51c8c461de6fbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_918d1cfd5a5cd124584d0fc37ae56352e63f60797884194ec51c8c461de6fbc8->leave($__internal_918d1cfd5a5cd124584d0fc37ae56352e63f60797884194ec51c8c461de6fbc8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_326859418cb03964ace925e474ce43aba2db08aec136c174d012fc6f86c1d0e5 = $this->env->getExtension("native_profiler");
        $__internal_326859418cb03964ace925e474ce43aba2db08aec136c174d012fc6f86c1d0e5->enter($__internal_326859418cb03964ace925e474ce43aba2db08aec136c174d012fc6f86c1d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_326859418cb03964ace925e474ce43aba2db08aec136c174d012fc6f86c1d0e5->leave($__internal_326859418cb03964ace925e474ce43aba2db08aec136c174d012fc6f86c1d0e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34bfe720ae1c7d2ad2b5377cfa77c707d15d2fe3ac64cc0b443261aa28f7002e = $this->env->getExtension("native_profiler");
        $__internal_34bfe720ae1c7d2ad2b5377cfa77c707d15d2fe3ac64cc0b443261aa28f7002e->enter($__internal_34bfe720ae1c7d2ad2b5377cfa77c707d15d2fe3ac64cc0b443261aa28f7002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34bfe720ae1c7d2ad2b5377cfa77c707d15d2fe3ac64cc0b443261aa28f7002e->leave($__internal_34bfe720ae1c7d2ad2b5377cfa77c707d15d2fe3ac64cc0b443261aa28f7002e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f46eed42fc12406850e177f0b18d0b47628d8f045b8769bafb94708ac771bb0 = $this->env->getExtension("native_profiler");
        $__internal_1f46eed42fc12406850e177f0b18d0b47628d8f045b8769bafb94708ac771bb0->enter($__internal_1f46eed42fc12406850e177f0b18d0b47628d8f045b8769bafb94708ac771bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f46eed42fc12406850e177f0b18d0b47628d8f045b8769bafb94708ac771bb0->leave($__internal_1f46eed42fc12406850e177f0b18d0b47628d8f045b8769bafb94708ac771bb0_prof);

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
