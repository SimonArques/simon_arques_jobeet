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
        $__internal_de753519385061f519f7cfad2dbfb89d5684330c2977b99683ae6d8a9dec1a31 = $this->env->getExtension("native_profiler");
        $__internal_de753519385061f519f7cfad2dbfb89d5684330c2977b99683ae6d8a9dec1a31->enter($__internal_de753519385061f519f7cfad2dbfb89d5684330c2977b99683ae6d8a9dec1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de753519385061f519f7cfad2dbfb89d5684330c2977b99683ae6d8a9dec1a31->leave($__internal_de753519385061f519f7cfad2dbfb89d5684330c2977b99683ae6d8a9dec1a31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d334093b03619cd5a08769de70688041cef6fd375aea86a4cb673511bf8bbd37 = $this->env->getExtension("native_profiler");
        $__internal_d334093b03619cd5a08769de70688041cef6fd375aea86a4cb673511bf8bbd37->enter($__internal_d334093b03619cd5a08769de70688041cef6fd375aea86a4cb673511bf8bbd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d334093b03619cd5a08769de70688041cef6fd375aea86a4cb673511bf8bbd37->leave($__internal_d334093b03619cd5a08769de70688041cef6fd375aea86a4cb673511bf8bbd37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8744337820dc92067df751cf2c53dc1b8bdfd5f6306ab53895199d3791870969 = $this->env->getExtension("native_profiler");
        $__internal_8744337820dc92067df751cf2c53dc1b8bdfd5f6306ab53895199d3791870969->enter($__internal_8744337820dc92067df751cf2c53dc1b8bdfd5f6306ab53895199d3791870969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8744337820dc92067df751cf2c53dc1b8bdfd5f6306ab53895199d3791870969->leave($__internal_8744337820dc92067df751cf2c53dc1b8bdfd5f6306ab53895199d3791870969_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64ead52a05e83f9bc4379480e3912ae1c611124ffe86c064d90afb9c0c899f11 = $this->env->getExtension("native_profiler");
        $__internal_64ead52a05e83f9bc4379480e3912ae1c611124ffe86c064d90afb9c0c899f11->enter($__internal_64ead52a05e83f9bc4379480e3912ae1c611124ffe86c064d90afb9c0c899f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64ead52a05e83f9bc4379480e3912ae1c611124ffe86c064d90afb9c0c899f11->leave($__internal_64ead52a05e83f9bc4379480e3912ae1c611124ffe86c064d90afb9c0c899f11_prof);

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
