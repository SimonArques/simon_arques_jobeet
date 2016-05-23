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
        $__internal_35285577efff2beec0f855bee2d0e2b30536eb2caaed57bc4de9c48d576e39c5 = $this->env->getExtension("native_profiler");
        $__internal_35285577efff2beec0f855bee2d0e2b30536eb2caaed57bc4de9c48d576e39c5->enter($__internal_35285577efff2beec0f855bee2d0e2b30536eb2caaed57bc4de9c48d576e39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_35285577efff2beec0f855bee2d0e2b30536eb2caaed57bc4de9c48d576e39c5->leave($__internal_35285577efff2beec0f855bee2d0e2b30536eb2caaed57bc4de9c48d576e39c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fdfe6ef36030d2aaf56e4576ddaf346dccfe651c78f888607488c15e5825c80 = $this->env->getExtension("native_profiler");
        $__internal_6fdfe6ef36030d2aaf56e4576ddaf346dccfe651c78f888607488c15e5825c80->enter($__internal_6fdfe6ef36030d2aaf56e4576ddaf346dccfe651c78f888607488c15e5825c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6fdfe6ef36030d2aaf56e4576ddaf346dccfe651c78f888607488c15e5825c80->leave($__internal_6fdfe6ef36030d2aaf56e4576ddaf346dccfe651c78f888607488c15e5825c80_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6c1b142cee5838ed27e6e923ac4cb8c96d4f3b5ebb42c2b611d069b72c4d5a4 = $this->env->getExtension("native_profiler");
        $__internal_d6c1b142cee5838ed27e6e923ac4cb8c96d4f3b5ebb42c2b611d069b72c4d5a4->enter($__internal_d6c1b142cee5838ed27e6e923ac4cb8c96d4f3b5ebb42c2b611d069b72c4d5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6c1b142cee5838ed27e6e923ac4cb8c96d4f3b5ebb42c2b611d069b72c4d5a4->leave($__internal_d6c1b142cee5838ed27e6e923ac4cb8c96d4f3b5ebb42c2b611d069b72c4d5a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_250df5f654bb570d2d1dfc760acb01acb55e64fbeccc90ed01e7a6f70ac0bdad = $this->env->getExtension("native_profiler");
        $__internal_250df5f654bb570d2d1dfc760acb01acb55e64fbeccc90ed01e7a6f70ac0bdad->enter($__internal_250df5f654bb570d2d1dfc760acb01acb55e64fbeccc90ed01e7a6f70ac0bdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_250df5f654bb570d2d1dfc760acb01acb55e64fbeccc90ed01e7a6f70ac0bdad->leave($__internal_250df5f654bb570d2d1dfc760acb01acb55e64fbeccc90ed01e7a6f70ac0bdad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b834a4c1ad95d34b855fc294793707b5f266b7f1847de9d34bf765384c6f60e2 = $this->env->getExtension("native_profiler");
        $__internal_b834a4c1ad95d34b855fc294793707b5f266b7f1847de9d34bf765384c6f60e2->enter($__internal_b834a4c1ad95d34b855fc294793707b5f266b7f1847de9d34bf765384c6f60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b834a4c1ad95d34b855fc294793707b5f266b7f1847de9d34bf765384c6f60e2->leave($__internal_b834a4c1ad95d34b855fc294793707b5f266b7f1847de9d34bf765384c6f60e2_prof);

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
