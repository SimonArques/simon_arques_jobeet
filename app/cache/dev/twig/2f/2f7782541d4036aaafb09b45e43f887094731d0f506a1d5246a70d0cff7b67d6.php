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
        $__internal_ffd7b0efb44b94a207d6c2136e6d4b6c53abca00d8ad4c3ebd9f68015d1a98b1 = $this->env->getExtension("native_profiler");
        $__internal_ffd7b0efb44b94a207d6c2136e6d4b6c53abca00d8ad4c3ebd9f68015d1a98b1->enter($__internal_ffd7b0efb44b94a207d6c2136e6d4b6c53abca00d8ad4c3ebd9f68015d1a98b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ffd7b0efb44b94a207d6c2136e6d4b6c53abca00d8ad4c3ebd9f68015d1a98b1->leave($__internal_ffd7b0efb44b94a207d6c2136e6d4b6c53abca00d8ad4c3ebd9f68015d1a98b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f90aa3542fcea995b5ada045b37fef7efe5373f3b94336f64590257116971d63 = $this->env->getExtension("native_profiler");
        $__internal_f90aa3542fcea995b5ada045b37fef7efe5373f3b94336f64590257116971d63->enter($__internal_f90aa3542fcea995b5ada045b37fef7efe5373f3b94336f64590257116971d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f90aa3542fcea995b5ada045b37fef7efe5373f3b94336f64590257116971d63->leave($__internal_f90aa3542fcea995b5ada045b37fef7efe5373f3b94336f64590257116971d63_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f31ffa4297191879d9885519eca92b28f754ebd26816f31e4c544ce5e8ed180f = $this->env->getExtension("native_profiler");
        $__internal_f31ffa4297191879d9885519eca92b28f754ebd26816f31e4c544ce5e8ed180f->enter($__internal_f31ffa4297191879d9885519eca92b28f754ebd26816f31e4c544ce5e8ed180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f31ffa4297191879d9885519eca92b28f754ebd26816f31e4c544ce5e8ed180f->leave($__internal_f31ffa4297191879d9885519eca92b28f754ebd26816f31e4c544ce5e8ed180f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b94c5d15fdafc486f1381ba712bf550d0f6c0cd0063a2fdc3cb0dc4c00c25d96 = $this->env->getExtension("native_profiler");
        $__internal_b94c5d15fdafc486f1381ba712bf550d0f6c0cd0063a2fdc3cb0dc4c00c25d96->enter($__internal_b94c5d15fdafc486f1381ba712bf550d0f6c0cd0063a2fdc3cb0dc4c00c25d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b94c5d15fdafc486f1381ba712bf550d0f6c0cd0063a2fdc3cb0dc4c00c25d96->leave($__internal_b94c5d15fdafc486f1381ba712bf550d0f6c0cd0063a2fdc3cb0dc4c00c25d96_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6eaecb628e410a6c4ef8aea5084f8430fa8200bce65a9b8f9eeec3be8c7923b = $this->env->getExtension("native_profiler");
        $__internal_a6eaecb628e410a6c4ef8aea5084f8430fa8200bce65a9b8f9eeec3be8c7923b->enter($__internal_a6eaecb628e410a6c4ef8aea5084f8430fa8200bce65a9b8f9eeec3be8c7923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6eaecb628e410a6c4ef8aea5084f8430fa8200bce65a9b8f9eeec3be8c7923b->leave($__internal_a6eaecb628e410a6c4ef8aea5084f8430fa8200bce65a9b8f9eeec3be8c7923b_prof);

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
