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
        $__internal_4da4a7bbd63a233edb6870bc885822c197bd7048a9d8e35f76c8a4a41113cbda = $this->env->getExtension("native_profiler");
        $__internal_4da4a7bbd63a233edb6870bc885822c197bd7048a9d8e35f76c8a4a41113cbda->enter($__internal_4da4a7bbd63a233edb6870bc885822c197bd7048a9d8e35f76c8a4a41113cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da4a7bbd63a233edb6870bc885822c197bd7048a9d8e35f76c8a4a41113cbda->leave($__internal_4da4a7bbd63a233edb6870bc885822c197bd7048a9d8e35f76c8a4a41113cbda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90aaf59994cb97e23e19fed2c2d8c5824220527f0dc0dc721833b5feada1dbfc = $this->env->getExtension("native_profiler");
        $__internal_90aaf59994cb97e23e19fed2c2d8c5824220527f0dc0dc721833b5feada1dbfc->enter($__internal_90aaf59994cb97e23e19fed2c2d8c5824220527f0dc0dc721833b5feada1dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90aaf59994cb97e23e19fed2c2d8c5824220527f0dc0dc721833b5feada1dbfc->leave($__internal_90aaf59994cb97e23e19fed2c2d8c5824220527f0dc0dc721833b5feada1dbfc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18323a84ed15ffc9339f10e9dd6781becd82c3947d7a158b928899b2cff314b5 = $this->env->getExtension("native_profiler");
        $__internal_18323a84ed15ffc9339f10e9dd6781becd82c3947d7a158b928899b2cff314b5->enter($__internal_18323a84ed15ffc9339f10e9dd6781becd82c3947d7a158b928899b2cff314b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18323a84ed15ffc9339f10e9dd6781becd82c3947d7a158b928899b2cff314b5->leave($__internal_18323a84ed15ffc9339f10e9dd6781becd82c3947d7a158b928899b2cff314b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42416986bcb25aeff7d5b0785a109d11ce433604d9c062a8141e446702124f08 = $this->env->getExtension("native_profiler");
        $__internal_42416986bcb25aeff7d5b0785a109d11ce433604d9c062a8141e446702124f08->enter($__internal_42416986bcb25aeff7d5b0785a109d11ce433604d9c062a8141e446702124f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_42416986bcb25aeff7d5b0785a109d11ce433604d9c062a8141e446702124f08->leave($__internal_42416986bcb25aeff7d5b0785a109d11ce433604d9c062a8141e446702124f08_prof);

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
