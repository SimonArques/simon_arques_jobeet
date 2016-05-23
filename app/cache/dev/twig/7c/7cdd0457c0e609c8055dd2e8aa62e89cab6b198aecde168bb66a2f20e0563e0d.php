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
        $__internal_10496c8f817695cfa1d538ce2b7b4b4708a60a8d62ce4c7925d4cacf82c31c96 = $this->env->getExtension("native_profiler");
        $__internal_10496c8f817695cfa1d538ce2b7b4b4708a60a8d62ce4c7925d4cacf82c31c96->enter($__internal_10496c8f817695cfa1d538ce2b7b4b4708a60a8d62ce4c7925d4cacf82c31c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10496c8f817695cfa1d538ce2b7b4b4708a60a8d62ce4c7925d4cacf82c31c96->leave($__internal_10496c8f817695cfa1d538ce2b7b4b4708a60a8d62ce4c7925d4cacf82c31c96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7afd22c87c3e22ceef966611628126e4b618caa735bc36cdeab4449c27130dfe = $this->env->getExtension("native_profiler");
        $__internal_7afd22c87c3e22ceef966611628126e4b618caa735bc36cdeab4449c27130dfe->enter($__internal_7afd22c87c3e22ceef966611628126e4b618caa735bc36cdeab4449c27130dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7afd22c87c3e22ceef966611628126e4b618caa735bc36cdeab4449c27130dfe->leave($__internal_7afd22c87c3e22ceef966611628126e4b618caa735bc36cdeab4449c27130dfe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be2778021c4885f4655644a13693df5f11c0f1f6d91360fde7237e66b3549028 = $this->env->getExtension("native_profiler");
        $__internal_be2778021c4885f4655644a13693df5f11c0f1f6d91360fde7237e66b3549028->enter($__internal_be2778021c4885f4655644a13693df5f11c0f1f6d91360fde7237e66b3549028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be2778021c4885f4655644a13693df5f11c0f1f6d91360fde7237e66b3549028->leave($__internal_be2778021c4885f4655644a13693df5f11c0f1f6d91360fde7237e66b3549028_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b39155bdcb20d43abb1fb3e7b75dd84f3c7c53c3067f50a750b079a9aeed7e5d = $this->env->getExtension("native_profiler");
        $__internal_b39155bdcb20d43abb1fb3e7b75dd84f3c7c53c3067f50a750b079a9aeed7e5d->enter($__internal_b39155bdcb20d43abb1fb3e7b75dd84f3c7c53c3067f50a750b079a9aeed7e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b39155bdcb20d43abb1fb3e7b75dd84f3c7c53c3067f50a750b079a9aeed7e5d->leave($__internal_b39155bdcb20d43abb1fb3e7b75dd84f3c7c53c3067f50a750b079a9aeed7e5d_prof);

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
