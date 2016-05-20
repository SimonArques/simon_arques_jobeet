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
        $__internal_f408e08914a2b1e58724ae1860830cbd46f0282cccc3fd3e9d091e6af05560f6 = $this->env->getExtension("native_profiler");
        $__internal_f408e08914a2b1e58724ae1860830cbd46f0282cccc3fd3e9d091e6af05560f6->enter($__internal_f408e08914a2b1e58724ae1860830cbd46f0282cccc3fd3e9d091e6af05560f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f408e08914a2b1e58724ae1860830cbd46f0282cccc3fd3e9d091e6af05560f6->leave($__internal_f408e08914a2b1e58724ae1860830cbd46f0282cccc3fd3e9d091e6af05560f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f76a2910a2cb5fd327f9fc4173a8d5e1441ea6e1638f523d232d97ec4a53886 = $this->env->getExtension("native_profiler");
        $__internal_3f76a2910a2cb5fd327f9fc4173a8d5e1441ea6e1638f523d232d97ec4a53886->enter($__internal_3f76a2910a2cb5fd327f9fc4173a8d5e1441ea6e1638f523d232d97ec4a53886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f76a2910a2cb5fd327f9fc4173a8d5e1441ea6e1638f523d232d97ec4a53886->leave($__internal_3f76a2910a2cb5fd327f9fc4173a8d5e1441ea6e1638f523d232d97ec4a53886_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62cbf088b292bcdfec85c3abb731cd2957d25ee321fd84cba5f28695af35c015 = $this->env->getExtension("native_profiler");
        $__internal_62cbf088b292bcdfec85c3abb731cd2957d25ee321fd84cba5f28695af35c015->enter($__internal_62cbf088b292bcdfec85c3abb731cd2957d25ee321fd84cba5f28695af35c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62cbf088b292bcdfec85c3abb731cd2957d25ee321fd84cba5f28695af35c015->leave($__internal_62cbf088b292bcdfec85c3abb731cd2957d25ee321fd84cba5f28695af35c015_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c02cdfb689c3d0dc03a26f820d323c1c589dbf20913a6e41a90f803605244805 = $this->env->getExtension("native_profiler");
        $__internal_c02cdfb689c3d0dc03a26f820d323c1c589dbf20913a6e41a90f803605244805->enter($__internal_c02cdfb689c3d0dc03a26f820d323c1c589dbf20913a6e41a90f803605244805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c02cdfb689c3d0dc03a26f820d323c1c589dbf20913a6e41a90f803605244805->leave($__internal_c02cdfb689c3d0dc03a26f820d323c1c589dbf20913a6e41a90f803605244805_prof);

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
