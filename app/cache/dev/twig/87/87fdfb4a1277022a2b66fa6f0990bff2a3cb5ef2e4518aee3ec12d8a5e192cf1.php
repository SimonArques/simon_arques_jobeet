<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6f638f970677f4de97b974d942dd3dd494064e4195c9dd985df5bf17b5dbe755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6b99c26d1af84a3c4390d0b87715e76aad3c7ac892a75bf4460091cdc938de22 = $this->env->getExtension("native_profiler");
        $__internal_6b99c26d1af84a3c4390d0b87715e76aad3c7ac892a75bf4460091cdc938de22->enter($__internal_6b99c26d1af84a3c4390d0b87715e76aad3c7ac892a75bf4460091cdc938de22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b99c26d1af84a3c4390d0b87715e76aad3c7ac892a75bf4460091cdc938de22->leave($__internal_6b99c26d1af84a3c4390d0b87715e76aad3c7ac892a75bf4460091cdc938de22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5411d12a50203be081300438da506301f3f358d78aa5d73bd8839473315bf3a = $this->env->getExtension("native_profiler");
        $__internal_e5411d12a50203be081300438da506301f3f358d78aa5d73bd8839473315bf3a->enter($__internal_e5411d12a50203be081300438da506301f3f358d78aa5d73bd8839473315bf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e5411d12a50203be081300438da506301f3f358d78aa5d73bd8839473315bf3a->leave($__internal_e5411d12a50203be081300438da506301f3f358d78aa5d73bd8839473315bf3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43c5103ed14c119eaa76a72b307c0bb573c9b4e070d916871622425b5e7e6198 = $this->env->getExtension("native_profiler");
        $__internal_43c5103ed14c119eaa76a72b307c0bb573c9b4e070d916871622425b5e7e6198->enter($__internal_43c5103ed14c119eaa76a72b307c0bb573c9b4e070d916871622425b5e7e6198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_43c5103ed14c119eaa76a72b307c0bb573c9b4e070d916871622425b5e7e6198->leave($__internal_43c5103ed14c119eaa76a72b307c0bb573c9b4e070d916871622425b5e7e6198_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64217b8eefb02c6bac12d2ce003c926db395304a0bbe97b3a824adeb79e1ac21 = $this->env->getExtension("native_profiler");
        $__internal_64217b8eefb02c6bac12d2ce003c926db395304a0bbe97b3a824adeb79e1ac21->enter($__internal_64217b8eefb02c6bac12d2ce003c926db395304a0bbe97b3a824adeb79e1ac21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_64217b8eefb02c6bac12d2ce003c926db395304a0bbe97b3a824adeb79e1ac21->leave($__internal_64217b8eefb02c6bac12d2ce003c926db395304a0bbe97b3a824adeb79e1ac21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
