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
        $__internal_13a4b4e70fe56120e30a731998cac9dacafed17d2cf333c24a50e2972749f773 = $this->env->getExtension("native_profiler");
        $__internal_13a4b4e70fe56120e30a731998cac9dacafed17d2cf333c24a50e2972749f773->enter($__internal_13a4b4e70fe56120e30a731998cac9dacafed17d2cf333c24a50e2972749f773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a4b4e70fe56120e30a731998cac9dacafed17d2cf333c24a50e2972749f773->leave($__internal_13a4b4e70fe56120e30a731998cac9dacafed17d2cf333c24a50e2972749f773_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2507864660ff3f602a8fcae47cd7906e7bfa3ead1304159a2d8ab1d1660cbf71 = $this->env->getExtension("native_profiler");
        $__internal_2507864660ff3f602a8fcae47cd7906e7bfa3ead1304159a2d8ab1d1660cbf71->enter($__internal_2507864660ff3f602a8fcae47cd7906e7bfa3ead1304159a2d8ab1d1660cbf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2507864660ff3f602a8fcae47cd7906e7bfa3ead1304159a2d8ab1d1660cbf71->leave($__internal_2507864660ff3f602a8fcae47cd7906e7bfa3ead1304159a2d8ab1d1660cbf71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d753bbb9990dfe9a37177546e0734be3c75518ac18be0e212e185c8503f6699 = $this->env->getExtension("native_profiler");
        $__internal_6d753bbb9990dfe9a37177546e0734be3c75518ac18be0e212e185c8503f6699->enter($__internal_6d753bbb9990dfe9a37177546e0734be3c75518ac18be0e212e185c8503f6699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d753bbb9990dfe9a37177546e0734be3c75518ac18be0e212e185c8503f6699->leave($__internal_6d753bbb9990dfe9a37177546e0734be3c75518ac18be0e212e185c8503f6699_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0c74944757d5885e91e6afa2683bfadbcb28199559249898681aa2f47993ca1 = $this->env->getExtension("native_profiler");
        $__internal_a0c74944757d5885e91e6afa2683bfadbcb28199559249898681aa2f47993ca1->enter($__internal_a0c74944757d5885e91e6afa2683bfadbcb28199559249898681aa2f47993ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0c74944757d5885e91e6afa2683bfadbcb28199559249898681aa2f47993ca1->leave($__internal_a0c74944757d5885e91e6afa2683bfadbcb28199559249898681aa2f47993ca1_prof);

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
