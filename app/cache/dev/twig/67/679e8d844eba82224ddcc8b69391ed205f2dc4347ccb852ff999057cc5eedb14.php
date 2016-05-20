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
        $__internal_2fb65caab1b413f9efc355cd92d1e8cdae5d0b34d9b1fc8c9111a451cdf1722d = $this->env->getExtension("native_profiler");
        $__internal_2fb65caab1b413f9efc355cd92d1e8cdae5d0b34d9b1fc8c9111a451cdf1722d->enter($__internal_2fb65caab1b413f9efc355cd92d1e8cdae5d0b34d9b1fc8c9111a451cdf1722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2fb65caab1b413f9efc355cd92d1e8cdae5d0b34d9b1fc8c9111a451cdf1722d->leave($__internal_2fb65caab1b413f9efc355cd92d1e8cdae5d0b34d9b1fc8c9111a451cdf1722d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_996280bad1a6a9621e7bb48bc811c463ad199b7e502c4ef595ae35a18218c146 = $this->env->getExtension("native_profiler");
        $__internal_996280bad1a6a9621e7bb48bc811c463ad199b7e502c4ef595ae35a18218c146->enter($__internal_996280bad1a6a9621e7bb48bc811c463ad199b7e502c4ef595ae35a18218c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_996280bad1a6a9621e7bb48bc811c463ad199b7e502c4ef595ae35a18218c146->leave($__internal_996280bad1a6a9621e7bb48bc811c463ad199b7e502c4ef595ae35a18218c146_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cb9a5fa631da0bd66ca3dbbe8f554eab004fe773fd1961d1d2de66989d6474a = $this->env->getExtension("native_profiler");
        $__internal_4cb9a5fa631da0bd66ca3dbbe8f554eab004fe773fd1961d1d2de66989d6474a->enter($__internal_4cb9a5fa631da0bd66ca3dbbe8f554eab004fe773fd1961d1d2de66989d6474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4cb9a5fa631da0bd66ca3dbbe8f554eab004fe773fd1961d1d2de66989d6474a->leave($__internal_4cb9a5fa631da0bd66ca3dbbe8f554eab004fe773fd1961d1d2de66989d6474a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_29fec3691fd6f720fb474a215d95b0e4a76c7f25d85df9ee09bd51fd2eb41439 = $this->env->getExtension("native_profiler");
        $__internal_29fec3691fd6f720fb474a215d95b0e4a76c7f25d85df9ee09bd51fd2eb41439->enter($__internal_29fec3691fd6f720fb474a215d95b0e4a76c7f25d85df9ee09bd51fd2eb41439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29fec3691fd6f720fb474a215d95b0e4a76c7f25d85df9ee09bd51fd2eb41439->leave($__internal_29fec3691fd6f720fb474a215d95b0e4a76c7f25d85df9ee09bd51fd2eb41439_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69bbf4c920bdca6d0a6e6c256298bd075bedd7f1892fb8752cd00c432ab63820 = $this->env->getExtension("native_profiler");
        $__internal_69bbf4c920bdca6d0a6e6c256298bd075bedd7f1892fb8752cd00c432ab63820->enter($__internal_69bbf4c920bdca6d0a6e6c256298bd075bedd7f1892fb8752cd00c432ab63820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69bbf4c920bdca6d0a6e6c256298bd075bedd7f1892fb8752cd00c432ab63820->leave($__internal_69bbf4c920bdca6d0a6e6c256298bd075bedd7f1892fb8752cd00c432ab63820_prof);

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
