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
        $__internal_1db71bbd3c261511e44bfbe4ddd7933bd1958c607e96f72157abd1cf0fb3ca40 = $this->env->getExtension("native_profiler");
        $__internal_1db71bbd3c261511e44bfbe4ddd7933bd1958c607e96f72157abd1cf0fb3ca40->enter($__internal_1db71bbd3c261511e44bfbe4ddd7933bd1958c607e96f72157abd1cf0fb3ca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1db71bbd3c261511e44bfbe4ddd7933bd1958c607e96f72157abd1cf0fb3ca40->leave($__internal_1db71bbd3c261511e44bfbe4ddd7933bd1958c607e96f72157abd1cf0fb3ca40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c174e83202f6abe25d0f387dff117a6098ef8436f74f0814d32d2c1d84e6128d = $this->env->getExtension("native_profiler");
        $__internal_c174e83202f6abe25d0f387dff117a6098ef8436f74f0814d32d2c1d84e6128d->enter($__internal_c174e83202f6abe25d0f387dff117a6098ef8436f74f0814d32d2c1d84e6128d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c174e83202f6abe25d0f387dff117a6098ef8436f74f0814d32d2c1d84e6128d->leave($__internal_c174e83202f6abe25d0f387dff117a6098ef8436f74f0814d32d2c1d84e6128d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2f2977816d9ece8690de142077e192497bd94eaf9d3d5b02fc5d9dc4fdde1d9 = $this->env->getExtension("native_profiler");
        $__internal_b2f2977816d9ece8690de142077e192497bd94eaf9d3d5b02fc5d9dc4fdde1d9->enter($__internal_b2f2977816d9ece8690de142077e192497bd94eaf9d3d5b02fc5d9dc4fdde1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2f2977816d9ece8690de142077e192497bd94eaf9d3d5b02fc5d9dc4fdde1d9->leave($__internal_b2f2977816d9ece8690de142077e192497bd94eaf9d3d5b02fc5d9dc4fdde1d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c64093bdd9e44c0d5657a538df470318be6070737c8620820e04997c1436dc = $this->env->getExtension("native_profiler");
        $__internal_23c64093bdd9e44c0d5657a538df470318be6070737c8620820e04997c1436dc->enter($__internal_23c64093bdd9e44c0d5657a538df470318be6070737c8620820e04997c1436dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23c64093bdd9e44c0d5657a538df470318be6070737c8620820e04997c1436dc->leave($__internal_23c64093bdd9e44c0d5657a538df470318be6070737c8620820e04997c1436dc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96c12d7466b01f0d4caf572d9d5604277885242477e73b6148980abbe6434a12 = $this->env->getExtension("native_profiler");
        $__internal_96c12d7466b01f0d4caf572d9d5604277885242477e73b6148980abbe6434a12->enter($__internal_96c12d7466b01f0d4caf572d9d5604277885242477e73b6148980abbe6434a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96c12d7466b01f0d4caf572d9d5604277885242477e73b6148980abbe6434a12->leave($__internal_96c12d7466b01f0d4caf572d9d5604277885242477e73b6148980abbe6434a12_prof);

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
