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
        $__internal_50b7e4a24afd7d840d8cc39959ad667c6942123df3409ca0d482193adade8e2b = $this->env->getExtension("native_profiler");
        $__internal_50b7e4a24afd7d840d8cc39959ad667c6942123df3409ca0d482193adade8e2b->enter($__internal_50b7e4a24afd7d840d8cc39959ad667c6942123df3409ca0d482193adade8e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_50b7e4a24afd7d840d8cc39959ad667c6942123df3409ca0d482193adade8e2b->leave($__internal_50b7e4a24afd7d840d8cc39959ad667c6942123df3409ca0d482193adade8e2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1473a5e1b7388b0c5bebeeedf52f82990a024560f150b4eb9d32e04af035593 = $this->env->getExtension("native_profiler");
        $__internal_a1473a5e1b7388b0c5bebeeedf52f82990a024560f150b4eb9d32e04af035593->enter($__internal_a1473a5e1b7388b0c5bebeeedf52f82990a024560f150b4eb9d32e04af035593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1473a5e1b7388b0c5bebeeedf52f82990a024560f150b4eb9d32e04af035593->leave($__internal_a1473a5e1b7388b0c5bebeeedf52f82990a024560f150b4eb9d32e04af035593_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef4f282161e358accc7a140033384c3c0d7ee712310b6fd812c5f445600df12d = $this->env->getExtension("native_profiler");
        $__internal_ef4f282161e358accc7a140033384c3c0d7ee712310b6fd812c5f445600df12d->enter($__internal_ef4f282161e358accc7a140033384c3c0d7ee712310b6fd812c5f445600df12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ef4f282161e358accc7a140033384c3c0d7ee712310b6fd812c5f445600df12d->leave($__internal_ef4f282161e358accc7a140033384c3c0d7ee712310b6fd812c5f445600df12d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79444eb4bb8d7ed26dc8735cee0fd30c33435e8cc3dc8a8d9738947f3a6aaba3 = $this->env->getExtension("native_profiler");
        $__internal_79444eb4bb8d7ed26dc8735cee0fd30c33435e8cc3dc8a8d9738947f3a6aaba3->enter($__internal_79444eb4bb8d7ed26dc8735cee0fd30c33435e8cc3dc8a8d9738947f3a6aaba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79444eb4bb8d7ed26dc8735cee0fd30c33435e8cc3dc8a8d9738947f3a6aaba3->leave($__internal_79444eb4bb8d7ed26dc8735cee0fd30c33435e8cc3dc8a8d9738947f3a6aaba3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0f75c95dd94cb5671ae2df9d670d5d33129b45190d1c02d4d944d9a2ff98a60 = $this->env->getExtension("native_profiler");
        $__internal_a0f75c95dd94cb5671ae2df9d670d5d33129b45190d1c02d4d944d9a2ff98a60->enter($__internal_a0f75c95dd94cb5671ae2df9d670d5d33129b45190d1c02d4d944d9a2ff98a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0f75c95dd94cb5671ae2df9d670d5d33129b45190d1c02d4d944d9a2ff98a60->leave($__internal_a0f75c95dd94cb5671ae2df9d670d5d33129b45190d1c02d4d944d9a2ff98a60_prof);

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
