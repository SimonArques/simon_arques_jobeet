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
        $__internal_7449ccf07dfe1bb59fa68f37303c56ab06b6513923124f5afb20ec84cddbd4ea = $this->env->getExtension("native_profiler");
        $__internal_7449ccf07dfe1bb59fa68f37303c56ab06b6513923124f5afb20ec84cddbd4ea->enter($__internal_7449ccf07dfe1bb59fa68f37303c56ab06b6513923124f5afb20ec84cddbd4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7449ccf07dfe1bb59fa68f37303c56ab06b6513923124f5afb20ec84cddbd4ea->leave($__internal_7449ccf07dfe1bb59fa68f37303c56ab06b6513923124f5afb20ec84cddbd4ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92d04692d24039ae1944ae136ae341fb67adf6f6fc19aadbaded6070d0346d43 = $this->env->getExtension("native_profiler");
        $__internal_92d04692d24039ae1944ae136ae341fb67adf6f6fc19aadbaded6070d0346d43->enter($__internal_92d04692d24039ae1944ae136ae341fb67adf6f6fc19aadbaded6070d0346d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92d04692d24039ae1944ae136ae341fb67adf6f6fc19aadbaded6070d0346d43->leave($__internal_92d04692d24039ae1944ae136ae341fb67adf6f6fc19aadbaded6070d0346d43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcad09b92e36efa088c64f40f48444f55b1f0feb9d11fad0a9820d42877a16f1 = $this->env->getExtension("native_profiler");
        $__internal_bcad09b92e36efa088c64f40f48444f55b1f0feb9d11fad0a9820d42877a16f1->enter($__internal_bcad09b92e36efa088c64f40f48444f55b1f0feb9d11fad0a9820d42877a16f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcad09b92e36efa088c64f40f48444f55b1f0feb9d11fad0a9820d42877a16f1->leave($__internal_bcad09b92e36efa088c64f40f48444f55b1f0feb9d11fad0a9820d42877a16f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1e87b1c2d343c141f2ab74bfc7a4ab37d3b5551a5f199e2cfa7b3af7867f456 = $this->env->getExtension("native_profiler");
        $__internal_f1e87b1c2d343c141f2ab74bfc7a4ab37d3b5551a5f199e2cfa7b3af7867f456->enter($__internal_f1e87b1c2d343c141f2ab74bfc7a4ab37d3b5551a5f199e2cfa7b3af7867f456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1e87b1c2d343c141f2ab74bfc7a4ab37d3b5551a5f199e2cfa7b3af7867f456->leave($__internal_f1e87b1c2d343c141f2ab74bfc7a4ab37d3b5551a5f199e2cfa7b3af7867f456_prof);

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
