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
        $__internal_bb07351273041a145ff6423733920d784f98b595ee4a8b9bb9ee12aba90159b7 = $this->env->getExtension("native_profiler");
        $__internal_bb07351273041a145ff6423733920d784f98b595ee4a8b9bb9ee12aba90159b7->enter($__internal_bb07351273041a145ff6423733920d784f98b595ee4a8b9bb9ee12aba90159b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bb07351273041a145ff6423733920d784f98b595ee4a8b9bb9ee12aba90159b7->leave($__internal_bb07351273041a145ff6423733920d784f98b595ee4a8b9bb9ee12aba90159b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60072d672553230e00e4cbabeacdef69f0a9a30f1f06c967369451e970280978 = $this->env->getExtension("native_profiler");
        $__internal_60072d672553230e00e4cbabeacdef69f0a9a30f1f06c967369451e970280978->enter($__internal_60072d672553230e00e4cbabeacdef69f0a9a30f1f06c967369451e970280978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60072d672553230e00e4cbabeacdef69f0a9a30f1f06c967369451e970280978->leave($__internal_60072d672553230e00e4cbabeacdef69f0a9a30f1f06c967369451e970280978_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd91e48051a50dfa2160d12b1630f020f844c9eb48fe01eee444518c3377c1c7 = $this->env->getExtension("native_profiler");
        $__internal_fd91e48051a50dfa2160d12b1630f020f844c9eb48fe01eee444518c3377c1c7->enter($__internal_fd91e48051a50dfa2160d12b1630f020f844c9eb48fe01eee444518c3377c1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd91e48051a50dfa2160d12b1630f020f844c9eb48fe01eee444518c3377c1c7->leave($__internal_fd91e48051a50dfa2160d12b1630f020f844c9eb48fe01eee444518c3377c1c7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6943d62e2b569242e8de4ed776d475189d4c792086367768f02cae94e2f550b = $this->env->getExtension("native_profiler");
        $__internal_c6943d62e2b569242e8de4ed776d475189d4c792086367768f02cae94e2f550b->enter($__internal_c6943d62e2b569242e8de4ed776d475189d4c792086367768f02cae94e2f550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6943d62e2b569242e8de4ed776d475189d4c792086367768f02cae94e2f550b->leave($__internal_c6943d62e2b569242e8de4ed776d475189d4c792086367768f02cae94e2f550b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6e6588f87663228d9efa328245449dc302dfb2d0fc18d52a02a5eb19355a4d0 = $this->env->getExtension("native_profiler");
        $__internal_b6e6588f87663228d9efa328245449dc302dfb2d0fc18d52a02a5eb19355a4d0->enter($__internal_b6e6588f87663228d9efa328245449dc302dfb2d0fc18d52a02a5eb19355a4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6e6588f87663228d9efa328245449dc302dfb2d0fc18d52a02a5eb19355a4d0->leave($__internal_b6e6588f87663228d9efa328245449dc302dfb2d0fc18d52a02a5eb19355a4d0_prof);

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
