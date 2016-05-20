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
        $__internal_e81e2180388507dcc8f1bb2466bcdaca8fd97bd89c930d3b09e6a2777a1afa2a = $this->env->getExtension("native_profiler");
        $__internal_e81e2180388507dcc8f1bb2466bcdaca8fd97bd89c930d3b09e6a2777a1afa2a->enter($__internal_e81e2180388507dcc8f1bb2466bcdaca8fd97bd89c930d3b09e6a2777a1afa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e81e2180388507dcc8f1bb2466bcdaca8fd97bd89c930d3b09e6a2777a1afa2a->leave($__internal_e81e2180388507dcc8f1bb2466bcdaca8fd97bd89c930d3b09e6a2777a1afa2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6328ec4e1260b2cf6c17cd465d2f145b7f8170d12a719fb03b6c17b8f5197cd3 = $this->env->getExtension("native_profiler");
        $__internal_6328ec4e1260b2cf6c17cd465d2f145b7f8170d12a719fb03b6c17b8f5197cd3->enter($__internal_6328ec4e1260b2cf6c17cd465d2f145b7f8170d12a719fb03b6c17b8f5197cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6328ec4e1260b2cf6c17cd465d2f145b7f8170d12a719fb03b6c17b8f5197cd3->leave($__internal_6328ec4e1260b2cf6c17cd465d2f145b7f8170d12a719fb03b6c17b8f5197cd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ed0770cede91a1ab1ece8dc4539b7e67ecee2986ec1821e7962fb15109e5e77 = $this->env->getExtension("native_profiler");
        $__internal_0ed0770cede91a1ab1ece8dc4539b7e67ecee2986ec1821e7962fb15109e5e77->enter($__internal_0ed0770cede91a1ab1ece8dc4539b7e67ecee2986ec1821e7962fb15109e5e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ed0770cede91a1ab1ece8dc4539b7e67ecee2986ec1821e7962fb15109e5e77->leave($__internal_0ed0770cede91a1ab1ece8dc4539b7e67ecee2986ec1821e7962fb15109e5e77_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4494ab465af38fd0ebe6acd1565afff762fcf388c93113c035240d488f1b0c8d = $this->env->getExtension("native_profiler");
        $__internal_4494ab465af38fd0ebe6acd1565afff762fcf388c93113c035240d488f1b0c8d->enter($__internal_4494ab465af38fd0ebe6acd1565afff762fcf388c93113c035240d488f1b0c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4494ab465af38fd0ebe6acd1565afff762fcf388c93113c035240d488f1b0c8d->leave($__internal_4494ab465af38fd0ebe6acd1565afff762fcf388c93113c035240d488f1b0c8d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_818d7facee9b6b4e4304bbcf8e277c08b7a17342eafcfc146547c06956ab7da3 = $this->env->getExtension("native_profiler");
        $__internal_818d7facee9b6b4e4304bbcf8e277c08b7a17342eafcfc146547c06956ab7da3->enter($__internal_818d7facee9b6b4e4304bbcf8e277c08b7a17342eafcfc146547c06956ab7da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_818d7facee9b6b4e4304bbcf8e277c08b7a17342eafcfc146547c06956ab7da3->leave($__internal_818d7facee9b6b4e4304bbcf8e277c08b7a17342eafcfc146547c06956ab7da3_prof);

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
