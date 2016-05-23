<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6317ead908d483206d2eea502970c58e71d0afef34e17ee4da29a4f21eea985f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1d1357e1eee73863b4821d80d8893611064d4cb83b2725bd8682ae86cb6bc13a = $this->env->getExtension("native_profiler");
        $__internal_1d1357e1eee73863b4821d80d8893611064d4cb83b2725bd8682ae86cb6bc13a->enter($__internal_1d1357e1eee73863b4821d80d8893611064d4cb83b2725bd8682ae86cb6bc13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1357e1eee73863b4821d80d8893611064d4cb83b2725bd8682ae86cb6bc13a->leave($__internal_1d1357e1eee73863b4821d80d8893611064d4cb83b2725bd8682ae86cb6bc13a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d057b9ccead3499b766a897000642060b046af859bc349b8ec5c6dd8d75bfb3f = $this->env->getExtension("native_profiler");
        $__internal_d057b9ccead3499b766a897000642060b046af859bc349b8ec5c6dd8d75bfb3f->enter($__internal_d057b9ccead3499b766a897000642060b046af859bc349b8ec5c6dd8d75bfb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d057b9ccead3499b766a897000642060b046af859bc349b8ec5c6dd8d75bfb3f->leave($__internal_d057b9ccead3499b766a897000642060b046af859bc349b8ec5c6dd8d75bfb3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97d27f49bb8bf31afabe9de00617dbd2b099fa282861eeedbd3d138a775f0f74 = $this->env->getExtension("native_profiler");
        $__internal_97d27f49bb8bf31afabe9de00617dbd2b099fa282861eeedbd3d138a775f0f74->enter($__internal_97d27f49bb8bf31afabe9de00617dbd2b099fa282861eeedbd3d138a775f0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97d27f49bb8bf31afabe9de00617dbd2b099fa282861eeedbd3d138a775f0f74->leave($__internal_97d27f49bb8bf31afabe9de00617dbd2b099fa282861eeedbd3d138a775f0f74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb2f0b0eec1f4050b6e4b2f34750c4cea5ab14d4c92ec1f83a529cfe72781f3f = $this->env->getExtension("native_profiler");
        $__internal_fb2f0b0eec1f4050b6e4b2f34750c4cea5ab14d4c92ec1f83a529cfe72781f3f->enter($__internal_fb2f0b0eec1f4050b6e4b2f34750c4cea5ab14d4c92ec1f83a529cfe72781f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb2f0b0eec1f4050b6e4b2f34750c4cea5ab14d4c92ec1f83a529cfe72781f3f->leave($__internal_fb2f0b0eec1f4050b6e4b2f34750c4cea5ab14d4c92ec1f83a529cfe72781f3f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
