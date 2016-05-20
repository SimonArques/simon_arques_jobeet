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
        $__internal_abd9f5600f6d03154b0e452c23051310a03ca7905b28552936c09ff9999a8faa = $this->env->getExtension("native_profiler");
        $__internal_abd9f5600f6d03154b0e452c23051310a03ca7905b28552936c09ff9999a8faa->enter($__internal_abd9f5600f6d03154b0e452c23051310a03ca7905b28552936c09ff9999a8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_abd9f5600f6d03154b0e452c23051310a03ca7905b28552936c09ff9999a8faa->leave($__internal_abd9f5600f6d03154b0e452c23051310a03ca7905b28552936c09ff9999a8faa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_215b0d718ed477cd65a17409a5f770d9ed3c7fac571601b80e0c2cd87f722d30 = $this->env->getExtension("native_profiler");
        $__internal_215b0d718ed477cd65a17409a5f770d9ed3c7fac571601b80e0c2cd87f722d30->enter($__internal_215b0d718ed477cd65a17409a5f770d9ed3c7fac571601b80e0c2cd87f722d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_215b0d718ed477cd65a17409a5f770d9ed3c7fac571601b80e0c2cd87f722d30->leave($__internal_215b0d718ed477cd65a17409a5f770d9ed3c7fac571601b80e0c2cd87f722d30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7b03a4e9fd1d3968f6b13b39c4be11d92a1b35a464cfde790e8a586f5158ba4 = $this->env->getExtension("native_profiler");
        $__internal_c7b03a4e9fd1d3968f6b13b39c4be11d92a1b35a464cfde790e8a586f5158ba4->enter($__internal_c7b03a4e9fd1d3968f6b13b39c4be11d92a1b35a464cfde790e8a586f5158ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7b03a4e9fd1d3968f6b13b39c4be11d92a1b35a464cfde790e8a586f5158ba4->leave($__internal_c7b03a4e9fd1d3968f6b13b39c4be11d92a1b35a464cfde790e8a586f5158ba4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce0e743e682c86e6bee53e0f853781d5ca4b1ca1d153f44c186f6ebfcfa4b3c1 = $this->env->getExtension("native_profiler");
        $__internal_ce0e743e682c86e6bee53e0f853781d5ca4b1ca1d153f44c186f6ebfcfa4b3c1->enter($__internal_ce0e743e682c86e6bee53e0f853781d5ca4b1ca1d153f44c186f6ebfcfa4b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce0e743e682c86e6bee53e0f853781d5ca4b1ca1d153f44c186f6ebfcfa4b3c1->leave($__internal_ce0e743e682c86e6bee53e0f853781d5ca4b1ca1d153f44c186f6ebfcfa4b3c1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20f558db4fe42645973869be2d286d58435ccc541aed9357f96e67c2a2a69d6f = $this->env->getExtension("native_profiler");
        $__internal_20f558db4fe42645973869be2d286d58435ccc541aed9357f96e67c2a2a69d6f->enter($__internal_20f558db4fe42645973869be2d286d58435ccc541aed9357f96e67c2a2a69d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20f558db4fe42645973869be2d286d58435ccc541aed9357f96e67c2a2a69d6f->leave($__internal_20f558db4fe42645973869be2d286d58435ccc541aed9357f96e67c2a2a69d6f_prof);

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
