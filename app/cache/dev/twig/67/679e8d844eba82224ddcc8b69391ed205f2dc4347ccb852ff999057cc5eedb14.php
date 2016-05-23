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
        $__internal_f3d6281f4dcdff588e81064fe7bbc4ee254a973925ad5309c9b119f6b1fe369f = $this->env->getExtension("native_profiler");
        $__internal_f3d6281f4dcdff588e81064fe7bbc4ee254a973925ad5309c9b119f6b1fe369f->enter($__internal_f3d6281f4dcdff588e81064fe7bbc4ee254a973925ad5309c9b119f6b1fe369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f3d6281f4dcdff588e81064fe7bbc4ee254a973925ad5309c9b119f6b1fe369f->leave($__internal_f3d6281f4dcdff588e81064fe7bbc4ee254a973925ad5309c9b119f6b1fe369f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7314135df36d5ec0b7b7a34e1a4297db16d1d49db33612359d1db159d411fa57 = $this->env->getExtension("native_profiler");
        $__internal_7314135df36d5ec0b7b7a34e1a4297db16d1d49db33612359d1db159d411fa57->enter($__internal_7314135df36d5ec0b7b7a34e1a4297db16d1d49db33612359d1db159d411fa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7314135df36d5ec0b7b7a34e1a4297db16d1d49db33612359d1db159d411fa57->leave($__internal_7314135df36d5ec0b7b7a34e1a4297db16d1d49db33612359d1db159d411fa57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6d5d46d2d367170bbdf2a3ed42c127cb4ce046a12ee064ea0605f728466ef63 = $this->env->getExtension("native_profiler");
        $__internal_d6d5d46d2d367170bbdf2a3ed42c127cb4ce046a12ee064ea0605f728466ef63->enter($__internal_d6d5d46d2d367170bbdf2a3ed42c127cb4ce046a12ee064ea0605f728466ef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6d5d46d2d367170bbdf2a3ed42c127cb4ce046a12ee064ea0605f728466ef63->leave($__internal_d6d5d46d2d367170bbdf2a3ed42c127cb4ce046a12ee064ea0605f728466ef63_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd898122d7984c7906a40639b9d1d7de235709c942ecb889c681258f13e7460b = $this->env->getExtension("native_profiler");
        $__internal_cd898122d7984c7906a40639b9d1d7de235709c942ecb889c681258f13e7460b->enter($__internal_cd898122d7984c7906a40639b9d1d7de235709c942ecb889c681258f13e7460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd898122d7984c7906a40639b9d1d7de235709c942ecb889c681258f13e7460b->leave($__internal_cd898122d7984c7906a40639b9d1d7de235709c942ecb889c681258f13e7460b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2f132c6ed209ad48c5e1f2efdd8da2382958d8076d817c82e9a7274f5b2159c = $this->env->getExtension("native_profiler");
        $__internal_f2f132c6ed209ad48c5e1f2efdd8da2382958d8076d817c82e9a7274f5b2159c->enter($__internal_f2f132c6ed209ad48c5e1f2efdd8da2382958d8076d817c82e9a7274f5b2159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2f132c6ed209ad48c5e1f2efdd8da2382958d8076d817c82e9a7274f5b2159c->leave($__internal_f2f132c6ed209ad48c5e1f2efdd8da2382958d8076d817c82e9a7274f5b2159c_prof);

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
