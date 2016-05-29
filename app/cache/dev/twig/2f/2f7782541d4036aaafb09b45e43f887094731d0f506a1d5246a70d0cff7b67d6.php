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
        $__internal_24113365eb0b6492c1836bb182157a80df8f312fe2f6bf3c2a46340b006f7b57 = $this->env->getExtension("native_profiler");
        $__internal_24113365eb0b6492c1836bb182157a80df8f312fe2f6bf3c2a46340b006f7b57->enter($__internal_24113365eb0b6492c1836bb182157a80df8f312fe2f6bf3c2a46340b006f7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_24113365eb0b6492c1836bb182157a80df8f312fe2f6bf3c2a46340b006f7b57->leave($__internal_24113365eb0b6492c1836bb182157a80df8f312fe2f6bf3c2a46340b006f7b57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_286c4a35429601db8d27daa5ced73242f29718ecefc9da1756296f515d75f493 = $this->env->getExtension("native_profiler");
        $__internal_286c4a35429601db8d27daa5ced73242f29718ecefc9da1756296f515d75f493->enter($__internal_286c4a35429601db8d27daa5ced73242f29718ecefc9da1756296f515d75f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_286c4a35429601db8d27daa5ced73242f29718ecefc9da1756296f515d75f493->leave($__internal_286c4a35429601db8d27daa5ced73242f29718ecefc9da1756296f515d75f493_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e808eb0d1e6f4fcee69ee72c1171fa468ff360065fa8b3b6126cd3be1e1f30f7 = $this->env->getExtension("native_profiler");
        $__internal_e808eb0d1e6f4fcee69ee72c1171fa468ff360065fa8b3b6126cd3be1e1f30f7->enter($__internal_e808eb0d1e6f4fcee69ee72c1171fa468ff360065fa8b3b6126cd3be1e1f30f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e808eb0d1e6f4fcee69ee72c1171fa468ff360065fa8b3b6126cd3be1e1f30f7->leave($__internal_e808eb0d1e6f4fcee69ee72c1171fa468ff360065fa8b3b6126cd3be1e1f30f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05bcca0b1333558809ae793abae0228a2ef649b33f29ce3d8fd652dffefadfe = $this->env->getExtension("native_profiler");
        $__internal_d05bcca0b1333558809ae793abae0228a2ef649b33f29ce3d8fd652dffefadfe->enter($__internal_d05bcca0b1333558809ae793abae0228a2ef649b33f29ce3d8fd652dffefadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d05bcca0b1333558809ae793abae0228a2ef649b33f29ce3d8fd652dffefadfe->leave($__internal_d05bcca0b1333558809ae793abae0228a2ef649b33f29ce3d8fd652dffefadfe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d36e91ffd112e13ddfd9df883f803f7b9ccce52a892a9d88962a2dd019d02456 = $this->env->getExtension("native_profiler");
        $__internal_d36e91ffd112e13ddfd9df883f803f7b9ccce52a892a9d88962a2dd019d02456->enter($__internal_d36e91ffd112e13ddfd9df883f803f7b9ccce52a892a9d88962a2dd019d02456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d36e91ffd112e13ddfd9df883f803f7b9ccce52a892a9d88962a2dd019d02456->leave($__internal_d36e91ffd112e13ddfd9df883f803f7b9ccce52a892a9d88962a2dd019d02456_prof);

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
