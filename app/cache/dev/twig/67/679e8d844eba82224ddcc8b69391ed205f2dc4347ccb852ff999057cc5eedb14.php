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
        $__internal_97eb05ffb3297ca94dc3d7057a5815ce4bc14009572cf20c78202687b1d9f2b9 = $this->env->getExtension("native_profiler");
        $__internal_97eb05ffb3297ca94dc3d7057a5815ce4bc14009572cf20c78202687b1d9f2b9->enter($__internal_97eb05ffb3297ca94dc3d7057a5815ce4bc14009572cf20c78202687b1d9f2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_97eb05ffb3297ca94dc3d7057a5815ce4bc14009572cf20c78202687b1d9f2b9->leave($__internal_97eb05ffb3297ca94dc3d7057a5815ce4bc14009572cf20c78202687b1d9f2b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fca1d090205907d58c8461e33ff15a648179741b2c2afe36fbeaffa57573780b = $this->env->getExtension("native_profiler");
        $__internal_fca1d090205907d58c8461e33ff15a648179741b2c2afe36fbeaffa57573780b->enter($__internal_fca1d090205907d58c8461e33ff15a648179741b2c2afe36fbeaffa57573780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fca1d090205907d58c8461e33ff15a648179741b2c2afe36fbeaffa57573780b->leave($__internal_fca1d090205907d58c8461e33ff15a648179741b2c2afe36fbeaffa57573780b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebacc904e78d180b34f7c35bd57b7b26fe8be42bdac25ffe88a07afed0075714 = $this->env->getExtension("native_profiler");
        $__internal_ebacc904e78d180b34f7c35bd57b7b26fe8be42bdac25ffe88a07afed0075714->enter($__internal_ebacc904e78d180b34f7c35bd57b7b26fe8be42bdac25ffe88a07afed0075714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebacc904e78d180b34f7c35bd57b7b26fe8be42bdac25ffe88a07afed0075714->leave($__internal_ebacc904e78d180b34f7c35bd57b7b26fe8be42bdac25ffe88a07afed0075714_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b86e286221766db671211e669018253316e1d4d74d976532d14d3b773887d8 = $this->env->getExtension("native_profiler");
        $__internal_a3b86e286221766db671211e669018253316e1d4d74d976532d14d3b773887d8->enter($__internal_a3b86e286221766db671211e669018253316e1d4d74d976532d14d3b773887d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3b86e286221766db671211e669018253316e1d4d74d976532d14d3b773887d8->leave($__internal_a3b86e286221766db671211e669018253316e1d4d74d976532d14d3b773887d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eff5a6ad9d6809001b3fd720fafae4a141643e59f50cbaded4f1f4a3d4a1498 = $this->env->getExtension("native_profiler");
        $__internal_5eff5a6ad9d6809001b3fd720fafae4a141643e59f50cbaded4f1f4a3d4a1498->enter($__internal_5eff5a6ad9d6809001b3fd720fafae4a141643e59f50cbaded4f1f4a3d4a1498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5eff5a6ad9d6809001b3fd720fafae4a141643e59f50cbaded4f1f4a3d4a1498->leave($__internal_5eff5a6ad9d6809001b3fd720fafae4a141643e59f50cbaded4f1f4a3d4a1498_prof);

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
