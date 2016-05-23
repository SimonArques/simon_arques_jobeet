<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_abcd4b9247ab7ea670dd8805af98b798f3ee2bd6fd1e7050d8236e027d9ab6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a474762436f0c2903c6b02ad1b154225668c79e99eacb350eda180b5192a4b = $this->env->getExtension("native_profiler");
        $__internal_89a474762436f0c2903c6b02ad1b154225668c79e99eacb350eda180b5192a4b->enter($__internal_89a474762436f0c2903c6b02ad1b154225668c79e99eacb350eda180b5192a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a474762436f0c2903c6b02ad1b154225668c79e99eacb350eda180b5192a4b->leave($__internal_89a474762436f0c2903c6b02ad1b154225668c79e99eacb350eda180b5192a4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01cfe11542f6df14f3d0ee45e4ce93dabf7ed99938e01211e3c01392447e9bc7 = $this->env->getExtension("native_profiler");
        $__internal_01cfe11542f6df14f3d0ee45e4ce93dabf7ed99938e01211e3c01392447e9bc7->enter($__internal_01cfe11542f6df14f3d0ee45e4ce93dabf7ed99938e01211e3c01392447e9bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01cfe11542f6df14f3d0ee45e4ce93dabf7ed99938e01211e3c01392447e9bc7->leave($__internal_01cfe11542f6df14f3d0ee45e4ce93dabf7ed99938e01211e3c01392447e9bc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6846d06e3363827428ad8458fb7c6b6b299180bd867a0715c1182f224e23db7 = $this->env->getExtension("native_profiler");
        $__internal_e6846d06e3363827428ad8458fb7c6b6b299180bd867a0715c1182f224e23db7->enter($__internal_e6846d06e3363827428ad8458fb7c6b6b299180bd867a0715c1182f224e23db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6846d06e3363827428ad8458fb7c6b6b299180bd867a0715c1182f224e23db7->leave($__internal_e6846d06e3363827428ad8458fb7c6b6b299180bd867a0715c1182f224e23db7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d3d26c713e7fb77c74dc822060c3158f8b796f7f344dcb7808735f793343a19 = $this->env->getExtension("native_profiler");
        $__internal_0d3d26c713e7fb77c74dc822060c3158f8b796f7f344dcb7808735f793343a19->enter($__internal_0d3d26c713e7fb77c74dc822060c3158f8b796f7f344dcb7808735f793343a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0d3d26c713e7fb77c74dc822060c3158f8b796f7f344dcb7808735f793343a19->leave($__internal_0d3d26c713e7fb77c74dc822060c3158f8b796f7f344dcb7808735f793343a19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
