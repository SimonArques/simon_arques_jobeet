<?php

/* Category/show.html.twig */
class __TwigTemplate_24f79c3b65aab1949768664c7b68592c7ea1ab3848172b1ffd9b72cdedc3c924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "Category/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsSimonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a2353ed46df8ce0b466eb00b17eab348579ee8333ebd6677cc6304ae2745b9 = $this->env->getExtension("native_profiler");
        $__internal_03a2353ed46df8ce0b466eb00b17eab348579ee8333ebd6677cc6304ae2745b9->enter($__internal_03a2353ed46df8ce0b466eb00b17eab348579ee8333ebd6677cc6304ae2745b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a2353ed46df8ce0b466eb00b17eab348579ee8333ebd6677cc6304ae2745b9->leave($__internal_03a2353ed46df8ce0b466eb00b17eab348579ee8333ebd6677cc6304ae2745b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76bdf6b73173060e8ee70074d539e95c9e502e9fc22398a068033d9085f7649a = $this->env->getExtension("native_profiler");
        $__internal_76bdf6b73173060e8ee70074d539e95c9e502e9fc22398a068033d9085f7649a->enter($__internal_76bdf6b73173060e8ee70074d539e95c9e502e9fc22398a068033d9085f7649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_76bdf6b73173060e8ee70074d539e95c9e502e9fc22398a068033d9085f7649a->leave($__internal_76bdf6b73173060e8ee70074d539e95c9e502e9fc22398a068033d9085f7649a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2ba7e0825a762527ed8bcc81e1857ebbbe01fd448cfed228f2b6d8714315676 = $this->env->getExtension("native_profiler");
        $__internal_d2ba7e0825a762527ed8bcc81e1857ebbbe01fd448cfed228f2b6d8714315676->enter($__internal_d2ba7e0825a762527ed8bcc81e1857ebbbe01fd448cfed228f2b6d8714315676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2ba7e0825a762527ed8bcc81e1857ebbbe01fd448cfed228f2b6d8714315676->leave($__internal_d2ba7e0825a762527ed8bcc81e1857ebbbe01fd448cfed228f2b6d8714315676_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab8f832ab6ea96c85e54575dd926bc876f3ab9e44423867e46f68b0fd47419c3 = $this->env->getExtension("native_profiler");
        $__internal_ab8f832ab6ea96c85e54575dd926bc876f3ab9e44423867e46f68b0fd47419c3->enter($__internal_ab8f832ab6ea96c85e54575dd926bc876f3ab9e44423867e46f68b0fd47419c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed</a>
        </div>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 20
        $this->loadTemplate("EnsSimonBundle:Job:list.html.twig", "Category/show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        
        $__internal_ab8f832ab6ea96c85e54575dd926bc876f3ab9e44423867e46f68b0fd47419c3->leave($__internal_ab8f832ab6ea96c85e54575dd926bc876f3ab9e44423867e46f68b0fd47419c3_prof);

    }

    public function getTemplateName()
    {
        return "Category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="category">*/
/*         <div class="feed">*/
/*             <a href="">Feed</a>*/
/*         </div>*/
/*         <h1>{{ category.name }}</h1>*/
/*     </div>*/
/* */
/*     {% include 'EnsSimonBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* {% endblock %}*/
