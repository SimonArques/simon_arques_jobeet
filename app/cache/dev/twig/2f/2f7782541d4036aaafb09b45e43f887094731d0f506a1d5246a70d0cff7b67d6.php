<?php

/* ::base.html.twig */
class __TwigTemplate_f0cd4dd179bde1a9b17d8f8789d3a0ecd9c741ce144b7d4c7b9c519a05a0e1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb1d159c1b23152a7e6d2d39bdedb9391fc3eedf9d1ebef6957331d592f78eef = $this->env->getExtension("native_profiler");
        $__internal_bb1d159c1b23152a7e6d2d39bdedb9391fc3eedf9d1ebef6957331d592f78eef->enter($__internal_bb1d159c1b23152a7e6d2d39bdedb9391fc3eedf9d1ebef6957331d592f78eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bb1d159c1b23152a7e6d2d39bdedb9391fc3eedf9d1ebef6957331d592f78eef->leave($__internal_bb1d159c1b23152a7e6d2d39bdedb9391fc3eedf9d1ebef6957331d592f78eef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e64a59a77dfcdf462e624aa47dffd2b8b7bfe36fbb77f0f3be70ecf833505ff = $this->env->getExtension("native_profiler");
        $__internal_6e64a59a77dfcdf462e624aa47dffd2b8b7bfe36fbb77f0f3be70ecf833505ff->enter($__internal_6e64a59a77dfcdf462e624aa47dffd2b8b7bfe36fbb77f0f3be70ecf833505ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e64a59a77dfcdf462e624aa47dffd2b8b7bfe36fbb77f0f3be70ecf833505ff->leave($__internal_6e64a59a77dfcdf462e624aa47dffd2b8b7bfe36fbb77f0f3be70ecf833505ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_418ecfc259babda27f70be8468bcafd836a3e98de27161cfe6432d6cb33da0d8 = $this->env->getExtension("native_profiler");
        $__internal_418ecfc259babda27f70be8468bcafd836a3e98de27161cfe6432d6cb33da0d8->enter($__internal_418ecfc259babda27f70be8468bcafd836a3e98de27161cfe6432d6cb33da0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_418ecfc259babda27f70be8468bcafd836a3e98de27161cfe6432d6cb33da0d8->leave($__internal_418ecfc259babda27f70be8468bcafd836a3e98de27161cfe6432d6cb33da0d8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_881a0717cd2688a51ff2b8e39919909020c182c833b1a2014c03a76d7c55ed39 = $this->env->getExtension("native_profiler");
        $__internal_881a0717cd2688a51ff2b8e39919909020c182c833b1a2014c03a76d7c55ed39->enter($__internal_881a0717cd2688a51ff2b8e39919909020c182c833b1a2014c03a76d7c55ed39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_881a0717cd2688a51ff2b8e39919909020c182c833b1a2014c03a76d7c55ed39->leave($__internal_881a0717cd2688a51ff2b8e39919909020c182c833b1a2014c03a76d7c55ed39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16f6de3f63cec2b49e2fdd2c1a325b42adc56d8132386894ba280c2c272eb735 = $this->env->getExtension("native_profiler");
        $__internal_16f6de3f63cec2b49e2fdd2c1a325b42adc56d8132386894ba280c2c272eb735->enter($__internal_16f6de3f63cec2b49e2fdd2c1a325b42adc56d8132386894ba280c2c272eb735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16f6de3f63cec2b49e2fdd2c1a325b42adc56d8132386894ba280c2c272eb735->leave($__internal_16f6de3f63cec2b49e2fdd2c1a325b42adc56d8132386894ba280c2c272eb735_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
