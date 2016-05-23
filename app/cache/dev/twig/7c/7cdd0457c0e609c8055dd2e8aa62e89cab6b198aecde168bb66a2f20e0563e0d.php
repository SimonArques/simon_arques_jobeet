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
        $__internal_3e1096bebe1c159536c5b02c235f78569af0f48b9909b6aa1390b19c0eb9d7ec = $this->env->getExtension("native_profiler");
        $__internal_3e1096bebe1c159536c5b02c235f78569af0f48b9909b6aa1390b19c0eb9d7ec->enter($__internal_3e1096bebe1c159536c5b02c235f78569af0f48b9909b6aa1390b19c0eb9d7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1096bebe1c159536c5b02c235f78569af0f48b9909b6aa1390b19c0eb9d7ec->leave($__internal_3e1096bebe1c159536c5b02c235f78569af0f48b9909b6aa1390b19c0eb9d7ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29214a83501a63d7ac8a2f2f4b3bd7e4828e2f3dec416a9ec6601541d1173227 = $this->env->getExtension("native_profiler");
        $__internal_29214a83501a63d7ac8a2f2f4b3bd7e4828e2f3dec416a9ec6601541d1173227->enter($__internal_29214a83501a63d7ac8a2f2f4b3bd7e4828e2f3dec416a9ec6601541d1173227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29214a83501a63d7ac8a2f2f4b3bd7e4828e2f3dec416a9ec6601541d1173227->leave($__internal_29214a83501a63d7ac8a2f2f4b3bd7e4828e2f3dec416a9ec6601541d1173227_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7818f6aae2803a51e3a7233f436a2333b5f5659b5bc06135281e1a5fb3199e29 = $this->env->getExtension("native_profiler");
        $__internal_7818f6aae2803a51e3a7233f436a2333b5f5659b5bc06135281e1a5fb3199e29->enter($__internal_7818f6aae2803a51e3a7233f436a2333b5f5659b5bc06135281e1a5fb3199e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7818f6aae2803a51e3a7233f436a2333b5f5659b5bc06135281e1a5fb3199e29->leave($__internal_7818f6aae2803a51e3a7233f436a2333b5f5659b5bc06135281e1a5fb3199e29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf0f62dd781c18f2a12cdd116e02bdb9c13698a322fb743e3d8a6e1b25cc589d = $this->env->getExtension("native_profiler");
        $__internal_bf0f62dd781c18f2a12cdd116e02bdb9c13698a322fb743e3d8a6e1b25cc589d->enter($__internal_bf0f62dd781c18f2a12cdd116e02bdb9c13698a322fb743e3d8a6e1b25cc589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf0f62dd781c18f2a12cdd116e02bdb9c13698a322fb743e3d8a6e1b25cc589d->leave($__internal_bf0f62dd781c18f2a12cdd116e02bdb9c13698a322fb743e3d8a6e1b25cc589d_prof);

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
