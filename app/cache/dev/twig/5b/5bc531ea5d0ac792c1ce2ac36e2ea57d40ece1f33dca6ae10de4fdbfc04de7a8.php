<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_6e2cc912785158db7cb8206e018263421d1ec9d5d0390abe78f66f76e7ee581d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0e96b1a88e4ccd112ce81378f115137d9d5e160a2bd3d10fcf7fc632f0922f6 = $this->env->getExtension("native_profiler");
        $__internal_f0e96b1a88e4ccd112ce81378f115137d9d5e160a2bd3d10fcf7fc632f0922f6->enter($__internal_f0e96b1a88e4ccd112ce81378f115137d9d5e160a2bd3d10fcf7fc632f0922f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f0e96b1a88e4ccd112ce81378f115137d9d5e160a2bd3d10fcf7fc632f0922f6->leave($__internal_f0e96b1a88e4ccd112ce81378f115137d9d5e160a2bd3d10fcf7fc632f0922f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
