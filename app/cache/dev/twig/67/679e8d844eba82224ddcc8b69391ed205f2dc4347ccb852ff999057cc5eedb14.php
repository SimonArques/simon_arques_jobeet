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
        $__internal_49c83a5b3ddebe4576cdf8a224f5ea17f2107c7a9cbdc2fb33f6b50fd41b1c3c = $this->env->getExtension("native_profiler");
        $__internal_49c83a5b3ddebe4576cdf8a224f5ea17f2107c7a9cbdc2fb33f6b50fd41b1c3c->enter($__internal_49c83a5b3ddebe4576cdf8a224f5ea17f2107c7a9cbdc2fb33f6b50fd41b1c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_49c83a5b3ddebe4576cdf8a224f5ea17f2107c7a9cbdc2fb33f6b50fd41b1c3c->leave($__internal_49c83a5b3ddebe4576cdf8a224f5ea17f2107c7a9cbdc2fb33f6b50fd41b1c3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_037f7693be5945c02988859954b67892de14155dae56e1ebdbabe9ac6df3ebcf = $this->env->getExtension("native_profiler");
        $__internal_037f7693be5945c02988859954b67892de14155dae56e1ebdbabe9ac6df3ebcf->enter($__internal_037f7693be5945c02988859954b67892de14155dae56e1ebdbabe9ac6df3ebcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_037f7693be5945c02988859954b67892de14155dae56e1ebdbabe9ac6df3ebcf->leave($__internal_037f7693be5945c02988859954b67892de14155dae56e1ebdbabe9ac6df3ebcf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc724ef059ddf6af9526f4ec7d78585067851dfbecac29c0604b72eba1c4fb6a = $this->env->getExtension("native_profiler");
        $__internal_cc724ef059ddf6af9526f4ec7d78585067851dfbecac29c0604b72eba1c4fb6a->enter($__internal_cc724ef059ddf6af9526f4ec7d78585067851dfbecac29c0604b72eba1c4fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc724ef059ddf6af9526f4ec7d78585067851dfbecac29c0604b72eba1c4fb6a->leave($__internal_cc724ef059ddf6af9526f4ec7d78585067851dfbecac29c0604b72eba1c4fb6a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9dee5999344bd5c4bc1e42e66393f8f879e69a4274b3e033271010b19ef17b4 = $this->env->getExtension("native_profiler");
        $__internal_c9dee5999344bd5c4bc1e42e66393f8f879e69a4274b3e033271010b19ef17b4->enter($__internal_c9dee5999344bd5c4bc1e42e66393f8f879e69a4274b3e033271010b19ef17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9dee5999344bd5c4bc1e42e66393f8f879e69a4274b3e033271010b19ef17b4->leave($__internal_c9dee5999344bd5c4bc1e42e66393f8f879e69a4274b3e033271010b19ef17b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8f81d274a4e5323606e96efb108de8470d8e0b05c0dc5d4436aa9400d5ee713 = $this->env->getExtension("native_profiler");
        $__internal_e8f81d274a4e5323606e96efb108de8470d8e0b05c0dc5d4436aa9400d5ee713->enter($__internal_e8f81d274a4e5323606e96efb108de8470d8e0b05c0dc5d4436aa9400d5ee713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e8f81d274a4e5323606e96efb108de8470d8e0b05c0dc5d4436aa9400d5ee713->leave($__internal_e8f81d274a4e5323606e96efb108de8470d8e0b05c0dc5d4436aa9400d5ee713_prof);

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
