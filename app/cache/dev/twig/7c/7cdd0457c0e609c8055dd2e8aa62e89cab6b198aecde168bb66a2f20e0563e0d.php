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
        $__internal_550508f075bdc7fa640af2ba36ffc2c5fb77515226b666e265ef806763afd6c1 = $this->env->getExtension("native_profiler");
        $__internal_550508f075bdc7fa640af2ba36ffc2c5fb77515226b666e265ef806763afd6c1->enter($__internal_550508f075bdc7fa640af2ba36ffc2c5fb77515226b666e265ef806763afd6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550508f075bdc7fa640af2ba36ffc2c5fb77515226b666e265ef806763afd6c1->leave($__internal_550508f075bdc7fa640af2ba36ffc2c5fb77515226b666e265ef806763afd6c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccaf61e23b0d371552f61fe5ea3c7e183705276c0218ba84639b3a9a777bf64e = $this->env->getExtension("native_profiler");
        $__internal_ccaf61e23b0d371552f61fe5ea3c7e183705276c0218ba84639b3a9a777bf64e->enter($__internal_ccaf61e23b0d371552f61fe5ea3c7e183705276c0218ba84639b3a9a777bf64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ccaf61e23b0d371552f61fe5ea3c7e183705276c0218ba84639b3a9a777bf64e->leave($__internal_ccaf61e23b0d371552f61fe5ea3c7e183705276c0218ba84639b3a9a777bf64e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a033721230cb0317348fd3d78e67a6da478a4deec6924cb2212affe383de709 = $this->env->getExtension("native_profiler");
        $__internal_2a033721230cb0317348fd3d78e67a6da478a4deec6924cb2212affe383de709->enter($__internal_2a033721230cb0317348fd3d78e67a6da478a4deec6924cb2212affe383de709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a033721230cb0317348fd3d78e67a6da478a4deec6924cb2212affe383de709->leave($__internal_2a033721230cb0317348fd3d78e67a6da478a4deec6924cb2212affe383de709_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0abe624575f90b527ce52a6977a424b903d4814732abf1f9601a0c7632307894 = $this->env->getExtension("native_profiler");
        $__internal_0abe624575f90b527ce52a6977a424b903d4814732abf1f9601a0c7632307894->enter($__internal_0abe624575f90b527ce52a6977a424b903d4814732abf1f9601a0c7632307894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0abe624575f90b527ce52a6977a424b903d4814732abf1f9601a0c7632307894->leave($__internal_0abe624575f90b527ce52a6977a424b903d4814732abf1f9601a0c7632307894_prof);

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
