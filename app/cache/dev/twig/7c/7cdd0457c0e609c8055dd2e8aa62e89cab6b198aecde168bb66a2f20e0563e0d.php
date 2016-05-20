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
        $__internal_2a318fc037ee1b8a802185897b6f4d3cdf407ab816e7776e58322ca237dedb54 = $this->env->getExtension("native_profiler");
        $__internal_2a318fc037ee1b8a802185897b6f4d3cdf407ab816e7776e58322ca237dedb54->enter($__internal_2a318fc037ee1b8a802185897b6f4d3cdf407ab816e7776e58322ca237dedb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a318fc037ee1b8a802185897b6f4d3cdf407ab816e7776e58322ca237dedb54->leave($__internal_2a318fc037ee1b8a802185897b6f4d3cdf407ab816e7776e58322ca237dedb54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad498737e30bfc01fc6960a81d23c97b9619c4ecc0a101aabaaf3f7bf8005cdc = $this->env->getExtension("native_profiler");
        $__internal_ad498737e30bfc01fc6960a81d23c97b9619c4ecc0a101aabaaf3f7bf8005cdc->enter($__internal_ad498737e30bfc01fc6960a81d23c97b9619c4ecc0a101aabaaf3f7bf8005cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad498737e30bfc01fc6960a81d23c97b9619c4ecc0a101aabaaf3f7bf8005cdc->leave($__internal_ad498737e30bfc01fc6960a81d23c97b9619c4ecc0a101aabaaf3f7bf8005cdc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdb7b6b899e8d7ee1ff65480cb6db069892e9c71b75c527878c8ee1609911f92 = $this->env->getExtension("native_profiler");
        $__internal_fdb7b6b899e8d7ee1ff65480cb6db069892e9c71b75c527878c8ee1609911f92->enter($__internal_fdb7b6b899e8d7ee1ff65480cb6db069892e9c71b75c527878c8ee1609911f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdb7b6b899e8d7ee1ff65480cb6db069892e9c71b75c527878c8ee1609911f92->leave($__internal_fdb7b6b899e8d7ee1ff65480cb6db069892e9c71b75c527878c8ee1609911f92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0fe43d59ce32e749f6b04c306af8ce747e5968d84a0c9101cceba1c0daee8df = $this->env->getExtension("native_profiler");
        $__internal_b0fe43d59ce32e749f6b04c306af8ce747e5968d84a0c9101cceba1c0daee8df->enter($__internal_b0fe43d59ce32e749f6b04c306af8ce747e5968d84a0c9101cceba1c0daee8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0fe43d59ce32e749f6b04c306af8ce747e5968d84a0c9101cceba1c0daee8df->leave($__internal_b0fe43d59ce32e749f6b04c306af8ce747e5968d84a0c9101cceba1c0daee8df_prof);

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
