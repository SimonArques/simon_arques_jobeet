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
        $__internal_42203000c7ef21346f0f104030904b4f7f5979c8eea12d3eb70c17a11acd4d7e = $this->env->getExtension("native_profiler");
        $__internal_42203000c7ef21346f0f104030904b4f7f5979c8eea12d3eb70c17a11acd4d7e->enter($__internal_42203000c7ef21346f0f104030904b4f7f5979c8eea12d3eb70c17a11acd4d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42203000c7ef21346f0f104030904b4f7f5979c8eea12d3eb70c17a11acd4d7e->leave($__internal_42203000c7ef21346f0f104030904b4f7f5979c8eea12d3eb70c17a11acd4d7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7021bdb5961316da7bd6bfebc197f8dbbddfbab9c9bae9c31c76a1989ef2e10 = $this->env->getExtension("native_profiler");
        $__internal_d7021bdb5961316da7bd6bfebc197f8dbbddfbab9c9bae9c31c76a1989ef2e10->enter($__internal_d7021bdb5961316da7bd6bfebc197f8dbbddfbab9c9bae9c31c76a1989ef2e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7021bdb5961316da7bd6bfebc197f8dbbddfbab9c9bae9c31c76a1989ef2e10->leave($__internal_d7021bdb5961316da7bd6bfebc197f8dbbddfbab9c9bae9c31c76a1989ef2e10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d738966c05fc6a077ba83faa358b5e5d319019b60d5d5024de9fdccfb968ba0c = $this->env->getExtension("native_profiler");
        $__internal_d738966c05fc6a077ba83faa358b5e5d319019b60d5d5024de9fdccfb968ba0c->enter($__internal_d738966c05fc6a077ba83faa358b5e5d319019b60d5d5024de9fdccfb968ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d738966c05fc6a077ba83faa358b5e5d319019b60d5d5024de9fdccfb968ba0c->leave($__internal_d738966c05fc6a077ba83faa358b5e5d319019b60d5d5024de9fdccfb968ba0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a561d48f36f3cffc68566dc5d80861ca2cc59b448486cec053913eb45b8a5851 = $this->env->getExtension("native_profiler");
        $__internal_a561d48f36f3cffc68566dc5d80861ca2cc59b448486cec053913eb45b8a5851->enter($__internal_a561d48f36f3cffc68566dc5d80861ca2cc59b448486cec053913eb45b8a5851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a561d48f36f3cffc68566dc5d80861ca2cc59b448486cec053913eb45b8a5851->leave($__internal_a561d48f36f3cffc68566dc5d80861ca2cc59b448486cec053913eb45b8a5851_prof);

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
