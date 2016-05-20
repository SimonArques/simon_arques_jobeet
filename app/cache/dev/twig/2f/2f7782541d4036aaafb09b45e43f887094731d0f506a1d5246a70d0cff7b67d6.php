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
        $__internal_677050ec0c5db548cb0bc11119b44a038def32fe29a36f637e8ad94392785f2f = $this->env->getExtension("native_profiler");
        $__internal_677050ec0c5db548cb0bc11119b44a038def32fe29a36f637e8ad94392785f2f->enter($__internal_677050ec0c5db548cb0bc11119b44a038def32fe29a36f637e8ad94392785f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_677050ec0c5db548cb0bc11119b44a038def32fe29a36f637e8ad94392785f2f->leave($__internal_677050ec0c5db548cb0bc11119b44a038def32fe29a36f637e8ad94392785f2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d189ab2a7205682c8cee2b2f434eb8057a24357b10b01f44e6e7a9ad8ec195ef = $this->env->getExtension("native_profiler");
        $__internal_d189ab2a7205682c8cee2b2f434eb8057a24357b10b01f44e6e7a9ad8ec195ef->enter($__internal_d189ab2a7205682c8cee2b2f434eb8057a24357b10b01f44e6e7a9ad8ec195ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d189ab2a7205682c8cee2b2f434eb8057a24357b10b01f44e6e7a9ad8ec195ef->leave($__internal_d189ab2a7205682c8cee2b2f434eb8057a24357b10b01f44e6e7a9ad8ec195ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e5500de0841ba559263afc2b8d821345083dbafe3e201afbe05efd7717dd64f = $this->env->getExtension("native_profiler");
        $__internal_9e5500de0841ba559263afc2b8d821345083dbafe3e201afbe05efd7717dd64f->enter($__internal_9e5500de0841ba559263afc2b8d821345083dbafe3e201afbe05efd7717dd64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e5500de0841ba559263afc2b8d821345083dbafe3e201afbe05efd7717dd64f->leave($__internal_9e5500de0841ba559263afc2b8d821345083dbafe3e201afbe05efd7717dd64f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa3c7e3c127b0ce679aeefd4cec207fd408254573086188d4a530d7db51ea63 = $this->env->getExtension("native_profiler");
        $__internal_4aa3c7e3c127b0ce679aeefd4cec207fd408254573086188d4a530d7db51ea63->enter($__internal_4aa3c7e3c127b0ce679aeefd4cec207fd408254573086188d4a530d7db51ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4aa3c7e3c127b0ce679aeefd4cec207fd408254573086188d4a530d7db51ea63->leave($__internal_4aa3c7e3c127b0ce679aeefd4cec207fd408254573086188d4a530d7db51ea63_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48bd3b3fe307fa1f12a54c1f4cb92202b10a9d124efa2c680ce6a367d9d6ec43 = $this->env->getExtension("native_profiler");
        $__internal_48bd3b3fe307fa1f12a54c1f4cb92202b10a9d124efa2c680ce6a367d9d6ec43->enter($__internal_48bd3b3fe307fa1f12a54c1f4cb92202b10a9d124efa2c680ce6a367d9d6ec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48bd3b3fe307fa1f12a54c1f4cb92202b10a9d124efa2c680ce6a367d9d6ec43->leave($__internal_48bd3b3fe307fa1f12a54c1f4cb92202b10a9d124efa2c680ce6a367d9d6ec43_prof);

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
