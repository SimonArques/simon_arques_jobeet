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
        $__internal_d153ae9a350eb2969eafaa52f158b6b4781edc888c0141bc54cb34ea6b6f248a = $this->env->getExtension("native_profiler");
        $__internal_d153ae9a350eb2969eafaa52f158b6b4781edc888c0141bc54cb34ea6b6f248a->enter($__internal_d153ae9a350eb2969eafaa52f158b6b4781edc888c0141bc54cb34ea6b6f248a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d153ae9a350eb2969eafaa52f158b6b4781edc888c0141bc54cb34ea6b6f248a->leave($__internal_d153ae9a350eb2969eafaa52f158b6b4781edc888c0141bc54cb34ea6b6f248a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_671043db5cfe32dc6731eb5bf91278d866cde020b2ff166ef72f3bf6d16fae48 = $this->env->getExtension("native_profiler");
        $__internal_671043db5cfe32dc6731eb5bf91278d866cde020b2ff166ef72f3bf6d16fae48->enter($__internal_671043db5cfe32dc6731eb5bf91278d866cde020b2ff166ef72f3bf6d16fae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_671043db5cfe32dc6731eb5bf91278d866cde020b2ff166ef72f3bf6d16fae48->leave($__internal_671043db5cfe32dc6731eb5bf91278d866cde020b2ff166ef72f3bf6d16fae48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d539e017e4f6d76fd1aa03a248bc907a26f1b8f6418d5754254ec463e4dba7e = $this->env->getExtension("native_profiler");
        $__internal_0d539e017e4f6d76fd1aa03a248bc907a26f1b8f6418d5754254ec463e4dba7e->enter($__internal_0d539e017e4f6d76fd1aa03a248bc907a26f1b8f6418d5754254ec463e4dba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d539e017e4f6d76fd1aa03a248bc907a26f1b8f6418d5754254ec463e4dba7e->leave($__internal_0d539e017e4f6d76fd1aa03a248bc907a26f1b8f6418d5754254ec463e4dba7e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bde7f652d31c9c5233cde3b6620c138985ffbffc34188c55e3fe0275dbfe4a3a = $this->env->getExtension("native_profiler");
        $__internal_bde7f652d31c9c5233cde3b6620c138985ffbffc34188c55e3fe0275dbfe4a3a->enter($__internal_bde7f652d31c9c5233cde3b6620c138985ffbffc34188c55e3fe0275dbfe4a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bde7f652d31c9c5233cde3b6620c138985ffbffc34188c55e3fe0275dbfe4a3a->leave($__internal_bde7f652d31c9c5233cde3b6620c138985ffbffc34188c55e3fe0275dbfe4a3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d66bc0c51a9923f8062484e6bc2ce7fe58735e95a93c7eb22dcc38a981e497f5 = $this->env->getExtension("native_profiler");
        $__internal_d66bc0c51a9923f8062484e6bc2ce7fe58735e95a93c7eb22dcc38a981e497f5->enter($__internal_d66bc0c51a9923f8062484e6bc2ce7fe58735e95a93c7eb22dcc38a981e497f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d66bc0c51a9923f8062484e6bc2ce7fe58735e95a93c7eb22dcc38a981e497f5->leave($__internal_d66bc0c51a9923f8062484e6bc2ce7fe58735e95a93c7eb22dcc38a981e497f5_prof);

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
