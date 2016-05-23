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
        $__internal_e3b73fe8a831754535f34c1d1038d53a1bc16935cdfab476b260c4beffe3c07c = $this->env->getExtension("native_profiler");
        $__internal_e3b73fe8a831754535f34c1d1038d53a1bc16935cdfab476b260c4beffe3c07c->enter($__internal_e3b73fe8a831754535f34c1d1038d53a1bc16935cdfab476b260c4beffe3c07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b73fe8a831754535f34c1d1038d53a1bc16935cdfab476b260c4beffe3c07c->leave($__internal_e3b73fe8a831754535f34c1d1038d53a1bc16935cdfab476b260c4beffe3c07c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6bb3f0de37346a36d0408f67b30b6d8fcaebe60d280c1832c916a3b9c0a264c = $this->env->getExtension("native_profiler");
        $__internal_e6bb3f0de37346a36d0408f67b30b6d8fcaebe60d280c1832c916a3b9c0a264c->enter($__internal_e6bb3f0de37346a36d0408f67b30b6d8fcaebe60d280c1832c916a3b9c0a264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e6bb3f0de37346a36d0408f67b30b6d8fcaebe60d280c1832c916a3b9c0a264c->leave($__internal_e6bb3f0de37346a36d0408f67b30b6d8fcaebe60d280c1832c916a3b9c0a264c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3db939294c51c81a479a0b906a86dba5f8d85b966d44a5e6305644790308d07 = $this->env->getExtension("native_profiler");
        $__internal_b3db939294c51c81a479a0b906a86dba5f8d85b966d44a5e6305644790308d07->enter($__internal_b3db939294c51c81a479a0b906a86dba5f8d85b966d44a5e6305644790308d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b3db939294c51c81a479a0b906a86dba5f8d85b966d44a5e6305644790308d07->leave($__internal_b3db939294c51c81a479a0b906a86dba5f8d85b966d44a5e6305644790308d07_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96559a47cea41763a963f5b9a63a36b2703a5f20c78688896ee987864ff904d8 = $this->env->getExtension("native_profiler");
        $__internal_96559a47cea41763a963f5b9a63a36b2703a5f20c78688896ee987864ff904d8->enter($__internal_96559a47cea41763a963f5b9a63a36b2703a5f20c78688896ee987864ff904d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_96559a47cea41763a963f5b9a63a36b2703a5f20c78688896ee987864ff904d8->leave($__internal_96559a47cea41763a963f5b9a63a36b2703a5f20c78688896ee987864ff904d8_prof);

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
