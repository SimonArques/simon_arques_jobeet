<?php

/* base.html.twig */
class __TwigTemplate_cef4b1911c7509d0b9e2de49eef38aecbeb4d34808512e3e0cba59ffecd64556 extends Twig_Template
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
        $__internal_a324c11ebf650f73874659a874ace43d892acfb54c56652ab04d6c1b4f81a4f7 = $this->env->getExtension("native_profiler");
        $__internal_a324c11ebf650f73874659a874ace43d892acfb54c56652ab04d6c1b4f81a4f7->enter($__internal_a324c11ebf650f73874659a874ace43d892acfb54c56652ab04d6c1b4f81a4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a324c11ebf650f73874659a874ace43d892acfb54c56652ab04d6c1b4f81a4f7->leave($__internal_a324c11ebf650f73874659a874ace43d892acfb54c56652ab04d6c1b4f81a4f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b115a9c2cf987d20bbc2ee0dc9da6bcfd03d6cfa70f5192024b91c5613d405 = $this->env->getExtension("native_profiler");
        $__internal_36b115a9c2cf987d20bbc2ee0dc9da6bcfd03d6cfa70f5192024b91c5613d405->enter($__internal_36b115a9c2cf987d20bbc2ee0dc9da6bcfd03d6cfa70f5192024b91c5613d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36b115a9c2cf987d20bbc2ee0dc9da6bcfd03d6cfa70f5192024b91c5613d405->leave($__internal_36b115a9c2cf987d20bbc2ee0dc9da6bcfd03d6cfa70f5192024b91c5613d405_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43b8772cffe67b8ef4952a993732303f795d54313a1ab7cfa03a71c17571baa9 = $this->env->getExtension("native_profiler");
        $__internal_43b8772cffe67b8ef4952a993732303f795d54313a1ab7cfa03a71c17571baa9->enter($__internal_43b8772cffe67b8ef4952a993732303f795d54313a1ab7cfa03a71c17571baa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43b8772cffe67b8ef4952a993732303f795d54313a1ab7cfa03a71c17571baa9->leave($__internal_43b8772cffe67b8ef4952a993732303f795d54313a1ab7cfa03a71c17571baa9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_63128e0d31c0e6c64ade4cc424fbbf3594b31d326e9dd9709cc877201e977de9 = $this->env->getExtension("native_profiler");
        $__internal_63128e0d31c0e6c64ade4cc424fbbf3594b31d326e9dd9709cc877201e977de9->enter($__internal_63128e0d31c0e6c64ade4cc424fbbf3594b31d326e9dd9709cc877201e977de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63128e0d31c0e6c64ade4cc424fbbf3594b31d326e9dd9709cc877201e977de9->leave($__internal_63128e0d31c0e6c64ade4cc424fbbf3594b31d326e9dd9709cc877201e977de9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa16d5a59abb3c9ddd3fb934afcee5df318946f77977b6fa7afd86c814ae1c12 = $this->env->getExtension("native_profiler");
        $__internal_aa16d5a59abb3c9ddd3fb934afcee5df318946f77977b6fa7afd86c814ae1c12->enter($__internal_aa16d5a59abb3c9ddd3fb934afcee5df318946f77977b6fa7afd86c814ae1c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa16d5a59abb3c9ddd3fb934afcee5df318946f77977b6fa7afd86c814ae1c12->leave($__internal_aa16d5a59abb3c9ddd3fb934afcee5df318946f77977b6fa7afd86c814ae1c12_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
