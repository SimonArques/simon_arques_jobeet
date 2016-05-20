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
        $__internal_53a1320f1229d7b11f538d31fe652f4a49e9eee95685b4b3851f3a38130e14e5 = $this->env->getExtension("native_profiler");
        $__internal_53a1320f1229d7b11f538d31fe652f4a49e9eee95685b4b3851f3a38130e14e5->enter($__internal_53a1320f1229d7b11f538d31fe652f4a49e9eee95685b4b3851f3a38130e14e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_53a1320f1229d7b11f538d31fe652f4a49e9eee95685b4b3851f3a38130e14e5->leave($__internal_53a1320f1229d7b11f538d31fe652f4a49e9eee95685b4b3851f3a38130e14e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9304d01d89b2f588904963e17a91753c2d016a2ad310cfbce30a8c26e05951ca = $this->env->getExtension("native_profiler");
        $__internal_9304d01d89b2f588904963e17a91753c2d016a2ad310cfbce30a8c26e05951ca->enter($__internal_9304d01d89b2f588904963e17a91753c2d016a2ad310cfbce30a8c26e05951ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9304d01d89b2f588904963e17a91753c2d016a2ad310cfbce30a8c26e05951ca->leave($__internal_9304d01d89b2f588904963e17a91753c2d016a2ad310cfbce30a8c26e05951ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5952cfc3d38399454df913e2648b17f3df73e64f2d06d22b089c5b0a1f8c1cf0 = $this->env->getExtension("native_profiler");
        $__internal_5952cfc3d38399454df913e2648b17f3df73e64f2d06d22b089c5b0a1f8c1cf0->enter($__internal_5952cfc3d38399454df913e2648b17f3df73e64f2d06d22b089c5b0a1f8c1cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5952cfc3d38399454df913e2648b17f3df73e64f2d06d22b089c5b0a1f8c1cf0->leave($__internal_5952cfc3d38399454df913e2648b17f3df73e64f2d06d22b089c5b0a1f8c1cf0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c337b5cba138048fdde230616f378fd6ba9adf87f9c74f63a4c0e43d4adf2b0f = $this->env->getExtension("native_profiler");
        $__internal_c337b5cba138048fdde230616f378fd6ba9adf87f9c74f63a4c0e43d4adf2b0f->enter($__internal_c337b5cba138048fdde230616f378fd6ba9adf87f9c74f63a4c0e43d4adf2b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c337b5cba138048fdde230616f378fd6ba9adf87f9c74f63a4c0e43d4adf2b0f->leave($__internal_c337b5cba138048fdde230616f378fd6ba9adf87f9c74f63a4c0e43d4adf2b0f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af8aad9c003b7099eb465a3cc8812a6766be820b12dca68ba2baa0c81fba4c30 = $this->env->getExtension("native_profiler");
        $__internal_af8aad9c003b7099eb465a3cc8812a6766be820b12dca68ba2baa0c81fba4c30->enter($__internal_af8aad9c003b7099eb465a3cc8812a6766be820b12dca68ba2baa0c81fba4c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af8aad9c003b7099eb465a3cc8812a6766be820b12dca68ba2baa0c81fba4c30->leave($__internal_af8aad9c003b7099eb465a3cc8812a6766be820b12dca68ba2baa0c81fba4c30_prof);

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
