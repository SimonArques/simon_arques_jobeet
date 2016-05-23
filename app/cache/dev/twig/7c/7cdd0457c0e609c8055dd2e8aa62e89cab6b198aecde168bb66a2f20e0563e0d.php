<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dcbb2d15414cd3e0fe16c7d84bb18e285dedbe28f21029cf5ad252d7bc57bc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_da418af40ab827b0fc7df9b16efa3fb9c512bc7c802fca738bea4353b5c56ae1 = $this->env->getExtension("native_profiler");
        $__internal_da418af40ab827b0fc7df9b16efa3fb9c512bc7c802fca738bea4353b5c56ae1->enter($__internal_da418af40ab827b0fc7df9b16efa3fb9c512bc7c802fca738bea4353b5c56ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da418af40ab827b0fc7df9b16efa3fb9c512bc7c802fca738bea4353b5c56ae1->leave($__internal_da418af40ab827b0fc7df9b16efa3fb9c512bc7c802fca738bea4353b5c56ae1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0613af16c1b2b9fb42b8bef1254442fb93fead0578f186f7e40d156aa739f812 = $this->env->getExtension("native_profiler");
        $__internal_0613af16c1b2b9fb42b8bef1254442fb93fead0578f186f7e40d156aa739f812->enter($__internal_0613af16c1b2b9fb42b8bef1254442fb93fead0578f186f7e40d156aa739f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0613af16c1b2b9fb42b8bef1254442fb93fead0578f186f7e40d156aa739f812->leave($__internal_0613af16c1b2b9fb42b8bef1254442fb93fead0578f186f7e40d156aa739f812_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_785932d653bac1d96607988578bbf9264027011342027843c43f6498ec7cd803 = $this->env->getExtension("native_profiler");
        $__internal_785932d653bac1d96607988578bbf9264027011342027843c43f6498ec7cd803->enter($__internal_785932d653bac1d96607988578bbf9264027011342027843c43f6498ec7cd803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_785932d653bac1d96607988578bbf9264027011342027843c43f6498ec7cd803->leave($__internal_785932d653bac1d96607988578bbf9264027011342027843c43f6498ec7cd803_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca7973ea3980f653a1b2a9e7b7163026c38d2e4dd136259d6904997a90dab1c0 = $this->env->getExtension("native_profiler");
        $__internal_ca7973ea3980f653a1b2a9e7b7163026c38d2e4dd136259d6904997a90dab1c0->enter($__internal_ca7973ea3980f653a1b2a9e7b7163026c38d2e4dd136259d6904997a90dab1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca7973ea3980f653a1b2a9e7b7163026c38d2e4dd136259d6904997a90dab1c0->leave($__internal_ca7973ea3980f653a1b2a9e7b7163026c38d2e4dd136259d6904997a90dab1c0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
