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
        $__internal_ea0fae62625b5d993ef56f2f1a484a7fc2f391e49a2dd726fca808d7069ce95c = $this->env->getExtension("native_profiler");
        $__internal_ea0fae62625b5d993ef56f2f1a484a7fc2f391e49a2dd726fca808d7069ce95c->enter($__internal_ea0fae62625b5d993ef56f2f1a484a7fc2f391e49a2dd726fca808d7069ce95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ea0fae62625b5d993ef56f2f1a484a7fc2f391e49a2dd726fca808d7069ce95c->leave($__internal_ea0fae62625b5d993ef56f2f1a484a7fc2f391e49a2dd726fca808d7069ce95c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c6e7335ee454a4253433f3076a33e3be6e2c4167733111ad2c0c4830e087220 = $this->env->getExtension("native_profiler");
        $__internal_5c6e7335ee454a4253433f3076a33e3be6e2c4167733111ad2c0c4830e087220->enter($__internal_5c6e7335ee454a4253433f3076a33e3be6e2c4167733111ad2c0c4830e087220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c6e7335ee454a4253433f3076a33e3be6e2c4167733111ad2c0c4830e087220->leave($__internal_5c6e7335ee454a4253433f3076a33e3be6e2c4167733111ad2c0c4830e087220_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b42a700c3e7ac4cced99967da01fad69b38af3c72c9ef7a8ea989c8df8ebd7cd = $this->env->getExtension("native_profiler");
        $__internal_b42a700c3e7ac4cced99967da01fad69b38af3c72c9ef7a8ea989c8df8ebd7cd->enter($__internal_b42a700c3e7ac4cced99967da01fad69b38af3c72c9ef7a8ea989c8df8ebd7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b42a700c3e7ac4cced99967da01fad69b38af3c72c9ef7a8ea989c8df8ebd7cd->leave($__internal_b42a700c3e7ac4cced99967da01fad69b38af3c72c9ef7a8ea989c8df8ebd7cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f48c346d4358ac81aba37710c4c8bfe37a2fba80535dbeaa335495072b5feb68 = $this->env->getExtension("native_profiler");
        $__internal_f48c346d4358ac81aba37710c4c8bfe37a2fba80535dbeaa335495072b5feb68->enter($__internal_f48c346d4358ac81aba37710c4c8bfe37a2fba80535dbeaa335495072b5feb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f48c346d4358ac81aba37710c4c8bfe37a2fba80535dbeaa335495072b5feb68->leave($__internal_f48c346d4358ac81aba37710c4c8bfe37a2fba80535dbeaa335495072b5feb68_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97f4b9e37fbc47968ddae48586b4e5af3b252ce231edd4cdf60f1bb0d9bd3a5f = $this->env->getExtension("native_profiler");
        $__internal_97f4b9e37fbc47968ddae48586b4e5af3b252ce231edd4cdf60f1bb0d9bd3a5f->enter($__internal_97f4b9e37fbc47968ddae48586b4e5af3b252ce231edd4cdf60f1bb0d9bd3a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97f4b9e37fbc47968ddae48586b4e5af3b252ce231edd4cdf60f1bb0d9bd3a5f->leave($__internal_97f4b9e37fbc47968ddae48586b4e5af3b252ce231edd4cdf60f1bb0d9bd3a5f_prof);

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
