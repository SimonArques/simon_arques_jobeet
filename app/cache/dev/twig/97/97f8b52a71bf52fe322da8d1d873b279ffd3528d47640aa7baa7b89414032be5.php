<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_82f796bd3ad1558114d13e6fe2168360d9425bd1e160fd42845e40da7edbc068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_43ab93e55e17a3009a07d2fac56a21600ad3d0a56c003769b2f148a5a97af52b = $this->env->getExtension("native_profiler");
        $__internal_43ab93e55e17a3009a07d2fac56a21600ad3d0a56c003769b2f148a5a97af52b->enter($__internal_43ab93e55e17a3009a07d2fac56a21600ad3d0a56c003769b2f148a5a97af52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ab93e55e17a3009a07d2fac56a21600ad3d0a56c003769b2f148a5a97af52b->leave($__internal_43ab93e55e17a3009a07d2fac56a21600ad3d0a56c003769b2f148a5a97af52b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_808382a5a5227d5d08c6d1c68ca899582735b90a1ae800233cbf8a59f859ce73 = $this->env->getExtension("native_profiler");
        $__internal_808382a5a5227d5d08c6d1c68ca899582735b90a1ae800233cbf8a59f859ce73->enter($__internal_808382a5a5227d5d08c6d1c68ca899582735b90a1ae800233cbf8a59f859ce73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_808382a5a5227d5d08c6d1c68ca899582735b90a1ae800233cbf8a59f859ce73->leave($__internal_808382a5a5227d5d08c6d1c68ca899582735b90a1ae800233cbf8a59f859ce73_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_367f7e7b1e7460162094c1dec5b3a05347f3ccc260de9a4b6138dbaa9b5051bf = $this->env->getExtension("native_profiler");
        $__internal_367f7e7b1e7460162094c1dec5b3a05347f3ccc260de9a4b6138dbaa9b5051bf->enter($__internal_367f7e7b1e7460162094c1dec5b3a05347f3ccc260de9a4b6138dbaa9b5051bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_367f7e7b1e7460162094c1dec5b3a05347f3ccc260de9a4b6138dbaa9b5051bf->leave($__internal_367f7e7b1e7460162094c1dec5b3a05347f3ccc260de9a4b6138dbaa9b5051bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1be04cb766f685266f4ecdbb46853de67cd0b63b50820cbb765d2241e68567b = $this->env->getExtension("native_profiler");
        $__internal_c1be04cb766f685266f4ecdbb46853de67cd0b63b50820cbb765d2241e68567b->enter($__internal_c1be04cb766f685266f4ecdbb46853de67cd0b63b50820cbb765d2241e68567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c1be04cb766f685266f4ecdbb46853de67cd0b63b50820cbb765d2241e68567b->leave($__internal_c1be04cb766f685266f4ecdbb46853de67cd0b63b50820cbb765d2241e68567b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
