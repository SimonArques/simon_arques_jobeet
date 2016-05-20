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
        $__internal_054feb7791046c494a015094e5d7ecfe0d4b5625f91571b519e5ce301f40e1db = $this->env->getExtension("native_profiler");
        $__internal_054feb7791046c494a015094e5d7ecfe0d4b5625f91571b519e5ce301f40e1db->enter($__internal_054feb7791046c494a015094e5d7ecfe0d4b5625f91571b519e5ce301f40e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054feb7791046c494a015094e5d7ecfe0d4b5625f91571b519e5ce301f40e1db->leave($__internal_054feb7791046c494a015094e5d7ecfe0d4b5625f91571b519e5ce301f40e1db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32601bc2ddb92d9dcf0e24a04bc41c6f18926f0ac200214310310705b05cb216 = $this->env->getExtension("native_profiler");
        $__internal_32601bc2ddb92d9dcf0e24a04bc41c6f18926f0ac200214310310705b05cb216->enter($__internal_32601bc2ddb92d9dcf0e24a04bc41c6f18926f0ac200214310310705b05cb216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_32601bc2ddb92d9dcf0e24a04bc41c6f18926f0ac200214310310705b05cb216->leave($__internal_32601bc2ddb92d9dcf0e24a04bc41c6f18926f0ac200214310310705b05cb216_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0525dbb2f961e1efd272bfa28bdf2626f09d063d2831529cb4a0f43abb689054 = $this->env->getExtension("native_profiler");
        $__internal_0525dbb2f961e1efd272bfa28bdf2626f09d063d2831529cb4a0f43abb689054->enter($__internal_0525dbb2f961e1efd272bfa28bdf2626f09d063d2831529cb4a0f43abb689054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0525dbb2f961e1efd272bfa28bdf2626f09d063d2831529cb4a0f43abb689054->leave($__internal_0525dbb2f961e1efd272bfa28bdf2626f09d063d2831529cb4a0f43abb689054_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d14ef823c2f57aebc16a728e6da68d11f8e4a1450fa3e7a92dae60f327b84659 = $this->env->getExtension("native_profiler");
        $__internal_d14ef823c2f57aebc16a728e6da68d11f8e4a1450fa3e7a92dae60f327b84659->enter($__internal_d14ef823c2f57aebc16a728e6da68d11f8e4a1450fa3e7a92dae60f327b84659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d14ef823c2f57aebc16a728e6da68d11f8e4a1450fa3e7a92dae60f327b84659->leave($__internal_d14ef823c2f57aebc16a728e6da68d11f8e4a1450fa3e7a92dae60f327b84659_prof);

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
