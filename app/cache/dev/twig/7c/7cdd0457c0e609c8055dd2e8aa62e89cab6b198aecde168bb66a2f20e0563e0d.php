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
        $__internal_b608f657fa12887cc01dd917e66cdbcef40735deb9504fb4457472ad0c43f1eb = $this->env->getExtension("native_profiler");
        $__internal_b608f657fa12887cc01dd917e66cdbcef40735deb9504fb4457472ad0c43f1eb->enter($__internal_b608f657fa12887cc01dd917e66cdbcef40735deb9504fb4457472ad0c43f1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b608f657fa12887cc01dd917e66cdbcef40735deb9504fb4457472ad0c43f1eb->leave($__internal_b608f657fa12887cc01dd917e66cdbcef40735deb9504fb4457472ad0c43f1eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a2510fef4c3c878724d000ebf8d646b8fee7a2a570fed78b7fe0d92a1f645d6 = $this->env->getExtension("native_profiler");
        $__internal_5a2510fef4c3c878724d000ebf8d646b8fee7a2a570fed78b7fe0d92a1f645d6->enter($__internal_5a2510fef4c3c878724d000ebf8d646b8fee7a2a570fed78b7fe0d92a1f645d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a2510fef4c3c878724d000ebf8d646b8fee7a2a570fed78b7fe0d92a1f645d6->leave($__internal_5a2510fef4c3c878724d000ebf8d646b8fee7a2a570fed78b7fe0d92a1f645d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10c957ecd0f3685c1f4ea89a1d96b9d14370db737f4f79fb58bc8980eeb467f8 = $this->env->getExtension("native_profiler");
        $__internal_10c957ecd0f3685c1f4ea89a1d96b9d14370db737f4f79fb58bc8980eeb467f8->enter($__internal_10c957ecd0f3685c1f4ea89a1d96b9d14370db737f4f79fb58bc8980eeb467f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10c957ecd0f3685c1f4ea89a1d96b9d14370db737f4f79fb58bc8980eeb467f8->leave($__internal_10c957ecd0f3685c1f4ea89a1d96b9d14370db737f4f79fb58bc8980eeb467f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6758ec7753e6ebddd1b19c52dcbfad802770d23725e42e176b9de0e500b8f767 = $this->env->getExtension("native_profiler");
        $__internal_6758ec7753e6ebddd1b19c52dcbfad802770d23725e42e176b9de0e500b8f767->enter($__internal_6758ec7753e6ebddd1b19c52dcbfad802770d23725e42e176b9de0e500b8f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6758ec7753e6ebddd1b19c52dcbfad802770d23725e42e176b9de0e500b8f767->leave($__internal_6758ec7753e6ebddd1b19c52dcbfad802770d23725e42e176b9de0e500b8f767_prof);

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
