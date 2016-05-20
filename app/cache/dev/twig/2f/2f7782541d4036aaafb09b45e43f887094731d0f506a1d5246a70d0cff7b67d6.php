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
        $__internal_7c42aab6c672cb555e9facbc18ebb6badb97416f0b9a308fa2b4cfbd1d7c2af2 = $this->env->getExtension("native_profiler");
        $__internal_7c42aab6c672cb555e9facbc18ebb6badb97416f0b9a308fa2b4cfbd1d7c2af2->enter($__internal_7c42aab6c672cb555e9facbc18ebb6badb97416f0b9a308fa2b4cfbd1d7c2af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7c42aab6c672cb555e9facbc18ebb6badb97416f0b9a308fa2b4cfbd1d7c2af2->leave($__internal_7c42aab6c672cb555e9facbc18ebb6badb97416f0b9a308fa2b4cfbd1d7c2af2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00843a5ed89b63d753c8c90c33cf6fdbd261af4948a25961e08b2c75dc1139df = $this->env->getExtension("native_profiler");
        $__internal_00843a5ed89b63d753c8c90c33cf6fdbd261af4948a25961e08b2c75dc1139df->enter($__internal_00843a5ed89b63d753c8c90c33cf6fdbd261af4948a25961e08b2c75dc1139df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00843a5ed89b63d753c8c90c33cf6fdbd261af4948a25961e08b2c75dc1139df->leave($__internal_00843a5ed89b63d753c8c90c33cf6fdbd261af4948a25961e08b2c75dc1139df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bc58a7c3387f8fc62bfea57f4dbd0d0b42bf23078e820e8ea377158ff3548f7 = $this->env->getExtension("native_profiler");
        $__internal_6bc58a7c3387f8fc62bfea57f4dbd0d0b42bf23078e820e8ea377158ff3548f7->enter($__internal_6bc58a7c3387f8fc62bfea57f4dbd0d0b42bf23078e820e8ea377158ff3548f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6bc58a7c3387f8fc62bfea57f4dbd0d0b42bf23078e820e8ea377158ff3548f7->leave($__internal_6bc58a7c3387f8fc62bfea57f4dbd0d0b42bf23078e820e8ea377158ff3548f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_230a522f4fd3061a35fa6adde265a11875f7d7b5f2cef929a239740afa3b81cb = $this->env->getExtension("native_profiler");
        $__internal_230a522f4fd3061a35fa6adde265a11875f7d7b5f2cef929a239740afa3b81cb->enter($__internal_230a522f4fd3061a35fa6adde265a11875f7d7b5f2cef929a239740afa3b81cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_230a522f4fd3061a35fa6adde265a11875f7d7b5f2cef929a239740afa3b81cb->leave($__internal_230a522f4fd3061a35fa6adde265a11875f7d7b5f2cef929a239740afa3b81cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da0c04ed6ae5f2dc820df974d97e81ac5ed3f3bdfc7916c08e400edd2024a976 = $this->env->getExtension("native_profiler");
        $__internal_da0c04ed6ae5f2dc820df974d97e81ac5ed3f3bdfc7916c08e400edd2024a976->enter($__internal_da0c04ed6ae5f2dc820df974d97e81ac5ed3f3bdfc7916c08e400edd2024a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da0c04ed6ae5f2dc820df974d97e81ac5ed3f3bdfc7916c08e400edd2024a976->leave($__internal_da0c04ed6ae5f2dc820df974d97e81ac5ed3f3bdfc7916c08e400edd2024a976_prof);

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
