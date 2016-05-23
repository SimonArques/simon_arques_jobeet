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
        $__internal_42c57d403cf40cb5040ccab3628f05391bb14f1294a29b12072ac4805dc2fa81 = $this->env->getExtension("native_profiler");
        $__internal_42c57d403cf40cb5040ccab3628f05391bb14f1294a29b12072ac4805dc2fa81->enter($__internal_42c57d403cf40cb5040ccab3628f05391bb14f1294a29b12072ac4805dc2fa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_42c57d403cf40cb5040ccab3628f05391bb14f1294a29b12072ac4805dc2fa81->leave($__internal_42c57d403cf40cb5040ccab3628f05391bb14f1294a29b12072ac4805dc2fa81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66cca1cc68276f4ceb073f352d5b105bfa3fd153c72c743921035963e96c7f11 = $this->env->getExtension("native_profiler");
        $__internal_66cca1cc68276f4ceb073f352d5b105bfa3fd153c72c743921035963e96c7f11->enter($__internal_66cca1cc68276f4ceb073f352d5b105bfa3fd153c72c743921035963e96c7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66cca1cc68276f4ceb073f352d5b105bfa3fd153c72c743921035963e96c7f11->leave($__internal_66cca1cc68276f4ceb073f352d5b105bfa3fd153c72c743921035963e96c7f11_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b99e7326b259a577dd42d7185b70debcded2c071b038764e0c54b1fd04f31d58 = $this->env->getExtension("native_profiler");
        $__internal_b99e7326b259a577dd42d7185b70debcded2c071b038764e0c54b1fd04f31d58->enter($__internal_b99e7326b259a577dd42d7185b70debcded2c071b038764e0c54b1fd04f31d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b99e7326b259a577dd42d7185b70debcded2c071b038764e0c54b1fd04f31d58->leave($__internal_b99e7326b259a577dd42d7185b70debcded2c071b038764e0c54b1fd04f31d58_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e52a7d43591ceeca1cde00ee351d937b62501dac719a8835e351739449916040 = $this->env->getExtension("native_profiler");
        $__internal_e52a7d43591ceeca1cde00ee351d937b62501dac719a8835e351739449916040->enter($__internal_e52a7d43591ceeca1cde00ee351d937b62501dac719a8835e351739449916040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e52a7d43591ceeca1cde00ee351d937b62501dac719a8835e351739449916040->leave($__internal_e52a7d43591ceeca1cde00ee351d937b62501dac719a8835e351739449916040_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c1539980a634ee162ebc7253b4356682fc29c94243be67573a7fded48870348 = $this->env->getExtension("native_profiler");
        $__internal_7c1539980a634ee162ebc7253b4356682fc29c94243be67573a7fded48870348->enter($__internal_7c1539980a634ee162ebc7253b4356682fc29c94243be67573a7fded48870348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c1539980a634ee162ebc7253b4356682fc29c94243be67573a7fded48870348->leave($__internal_7c1539980a634ee162ebc7253b4356682fc29c94243be67573a7fded48870348_prof);

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
