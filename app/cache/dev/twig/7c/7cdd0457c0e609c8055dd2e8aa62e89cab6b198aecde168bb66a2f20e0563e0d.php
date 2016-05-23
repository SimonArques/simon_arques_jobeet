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
        $__internal_675d47c604be92c457bef308a0d435ed2c4772ea9ea0f62c682f6610fd0a8e62 = $this->env->getExtension("native_profiler");
        $__internal_675d47c604be92c457bef308a0d435ed2c4772ea9ea0f62c682f6610fd0a8e62->enter($__internal_675d47c604be92c457bef308a0d435ed2c4772ea9ea0f62c682f6610fd0a8e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675d47c604be92c457bef308a0d435ed2c4772ea9ea0f62c682f6610fd0a8e62->leave($__internal_675d47c604be92c457bef308a0d435ed2c4772ea9ea0f62c682f6610fd0a8e62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_231b18ba930bf6c85890d2ae62d50c1063e0caa7f82750a003ff03378280eb78 = $this->env->getExtension("native_profiler");
        $__internal_231b18ba930bf6c85890d2ae62d50c1063e0caa7f82750a003ff03378280eb78->enter($__internal_231b18ba930bf6c85890d2ae62d50c1063e0caa7f82750a003ff03378280eb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_231b18ba930bf6c85890d2ae62d50c1063e0caa7f82750a003ff03378280eb78->leave($__internal_231b18ba930bf6c85890d2ae62d50c1063e0caa7f82750a003ff03378280eb78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df245bda0ad0212bb709be212d8dc7f7d608d5f558a1ac16ae9a2a10f4e047e5 = $this->env->getExtension("native_profiler");
        $__internal_df245bda0ad0212bb709be212d8dc7f7d608d5f558a1ac16ae9a2a10f4e047e5->enter($__internal_df245bda0ad0212bb709be212d8dc7f7d608d5f558a1ac16ae9a2a10f4e047e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df245bda0ad0212bb709be212d8dc7f7d608d5f558a1ac16ae9a2a10f4e047e5->leave($__internal_df245bda0ad0212bb709be212d8dc7f7d608d5f558a1ac16ae9a2a10f4e047e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_928903df39d7904fd2c68beca8959c0c29f07d0be0a25172a686c41e8be7ba4d = $this->env->getExtension("native_profiler");
        $__internal_928903df39d7904fd2c68beca8959c0c29f07d0be0a25172a686c41e8be7ba4d->enter($__internal_928903df39d7904fd2c68beca8959c0c29f07d0be0a25172a686c41e8be7ba4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_928903df39d7904fd2c68beca8959c0c29f07d0be0a25172a686c41e8be7ba4d->leave($__internal_928903df39d7904fd2c68beca8959c0c29f07d0be0a25172a686c41e8be7ba4d_prof);

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
