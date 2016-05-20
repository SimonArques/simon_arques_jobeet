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
        $__internal_3e1776592f70f1db5cdf2942baff173279c19bcb7d91683fffbdf4221f3d428d = $this->env->getExtension("native_profiler");
        $__internal_3e1776592f70f1db5cdf2942baff173279c19bcb7d91683fffbdf4221f3d428d->enter($__internal_3e1776592f70f1db5cdf2942baff173279c19bcb7d91683fffbdf4221f3d428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1776592f70f1db5cdf2942baff173279c19bcb7d91683fffbdf4221f3d428d->leave($__internal_3e1776592f70f1db5cdf2942baff173279c19bcb7d91683fffbdf4221f3d428d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0b93ac83b4ca4553cf244b36d874c16c949bd8efb3f284288997dbb9dc9d5d3 = $this->env->getExtension("native_profiler");
        $__internal_b0b93ac83b4ca4553cf244b36d874c16c949bd8efb3f284288997dbb9dc9d5d3->enter($__internal_b0b93ac83b4ca4553cf244b36d874c16c949bd8efb3f284288997dbb9dc9d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0b93ac83b4ca4553cf244b36d874c16c949bd8efb3f284288997dbb9dc9d5d3->leave($__internal_b0b93ac83b4ca4553cf244b36d874c16c949bd8efb3f284288997dbb9dc9d5d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a92a39287642356154dbdb6665129a7c6b354cb3e12abeaf206c3d087a81c37 = $this->env->getExtension("native_profiler");
        $__internal_0a92a39287642356154dbdb6665129a7c6b354cb3e12abeaf206c3d087a81c37->enter($__internal_0a92a39287642356154dbdb6665129a7c6b354cb3e12abeaf206c3d087a81c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a92a39287642356154dbdb6665129a7c6b354cb3e12abeaf206c3d087a81c37->leave($__internal_0a92a39287642356154dbdb6665129a7c6b354cb3e12abeaf206c3d087a81c37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c3f0c60b65de8d831b3df2c7df49423583cc42adbd946a6969160d60900e90d = $this->env->getExtension("native_profiler");
        $__internal_1c3f0c60b65de8d831b3df2c7df49423583cc42adbd946a6969160d60900e90d->enter($__internal_1c3f0c60b65de8d831b3df2c7df49423583cc42adbd946a6969160d60900e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c3f0c60b65de8d831b3df2c7df49423583cc42adbd946a6969160d60900e90d->leave($__internal_1c3f0c60b65de8d831b3df2c7df49423583cc42adbd946a6969160d60900e90d_prof);

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
