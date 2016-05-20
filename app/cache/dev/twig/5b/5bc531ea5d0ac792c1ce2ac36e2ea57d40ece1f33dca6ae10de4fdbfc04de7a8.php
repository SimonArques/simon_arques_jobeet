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
        $__internal_8e2200b7c83e4ea732de9ad0d8cca7a5ebc4ca3de76edede029d32659cfdfc9a = $this->env->getExtension("native_profiler");
        $__internal_8e2200b7c83e4ea732de9ad0d8cca7a5ebc4ca3de76edede029d32659cfdfc9a->enter($__internal_8e2200b7c83e4ea732de9ad0d8cca7a5ebc4ca3de76edede029d32659cfdfc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_8e2200b7c83e4ea732de9ad0d8cca7a5ebc4ca3de76edede029d32659cfdfc9a->leave($__internal_8e2200b7c83e4ea732de9ad0d8cca7a5ebc4ca3de76edede029d32659cfdfc9a_prof);

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
