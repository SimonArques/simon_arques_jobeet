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
        $__internal_eea7e2d7641665f32bf743fd58d55405d89d6f7a85189afec191262e54ce8824 = $this->env->getExtension("native_profiler");
        $__internal_eea7e2d7641665f32bf743fd58d55405d89d6f7a85189afec191262e54ce8824->enter($__internal_eea7e2d7641665f32bf743fd58d55405d89d6f7a85189afec191262e54ce8824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea7e2d7641665f32bf743fd58d55405d89d6f7a85189afec191262e54ce8824->leave($__internal_eea7e2d7641665f32bf743fd58d55405d89d6f7a85189afec191262e54ce8824_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebaf9857cc71e2996236923cbb3985d18a6b68cc75492f6b36c923f2cfaeed03 = $this->env->getExtension("native_profiler");
        $__internal_ebaf9857cc71e2996236923cbb3985d18a6b68cc75492f6b36c923f2cfaeed03->enter($__internal_ebaf9857cc71e2996236923cbb3985d18a6b68cc75492f6b36c923f2cfaeed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebaf9857cc71e2996236923cbb3985d18a6b68cc75492f6b36c923f2cfaeed03->leave($__internal_ebaf9857cc71e2996236923cbb3985d18a6b68cc75492f6b36c923f2cfaeed03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ff59d1b6279e37a6ee38868ba4654f8e9a7f9dafcc5f8b561416db522bd3a1f = $this->env->getExtension("native_profiler");
        $__internal_5ff59d1b6279e37a6ee38868ba4654f8e9a7f9dafcc5f8b561416db522bd3a1f->enter($__internal_5ff59d1b6279e37a6ee38868ba4654f8e9a7f9dafcc5f8b561416db522bd3a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ff59d1b6279e37a6ee38868ba4654f8e9a7f9dafcc5f8b561416db522bd3a1f->leave($__internal_5ff59d1b6279e37a6ee38868ba4654f8e9a7f9dafcc5f8b561416db522bd3a1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceb0b96419de7b210ad791dbc532c3c1b5e2eca5765c13446cb8ff50c23f35e1 = $this->env->getExtension("native_profiler");
        $__internal_ceb0b96419de7b210ad791dbc532c3c1b5e2eca5765c13446cb8ff50c23f35e1->enter($__internal_ceb0b96419de7b210ad791dbc532c3c1b5e2eca5765c13446cb8ff50c23f35e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ceb0b96419de7b210ad791dbc532c3c1b5e2eca5765c13446cb8ff50c23f35e1->leave($__internal_ceb0b96419de7b210ad791dbc532c3c1b5e2eca5765c13446cb8ff50c23f35e1_prof);

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
