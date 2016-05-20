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
        $__internal_b787241718e70639b7eb4b5b197d87731a990e5575d047289e9f64a648ab8d6b = $this->env->getExtension("native_profiler");
        $__internal_b787241718e70639b7eb4b5b197d87731a990e5575d047289e9f64a648ab8d6b->enter($__internal_b787241718e70639b7eb4b5b197d87731a990e5575d047289e9f64a648ab8d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b787241718e70639b7eb4b5b197d87731a990e5575d047289e9f64a648ab8d6b->leave($__internal_b787241718e70639b7eb4b5b197d87731a990e5575d047289e9f64a648ab8d6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93446ac006e0864b7fe525d6304fd19aa5ce2c400e284ed89c6ba33f8af0fd65 = $this->env->getExtension("native_profiler");
        $__internal_93446ac006e0864b7fe525d6304fd19aa5ce2c400e284ed89c6ba33f8af0fd65->enter($__internal_93446ac006e0864b7fe525d6304fd19aa5ce2c400e284ed89c6ba33f8af0fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93446ac006e0864b7fe525d6304fd19aa5ce2c400e284ed89c6ba33f8af0fd65->leave($__internal_93446ac006e0864b7fe525d6304fd19aa5ce2c400e284ed89c6ba33f8af0fd65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_677faffb7dd872a7ba27dca21f3b80c6f7a61c56ce640fe8cec0fea3c23fbb85 = $this->env->getExtension("native_profiler");
        $__internal_677faffb7dd872a7ba27dca21f3b80c6f7a61c56ce640fe8cec0fea3c23fbb85->enter($__internal_677faffb7dd872a7ba27dca21f3b80c6f7a61c56ce640fe8cec0fea3c23fbb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_677faffb7dd872a7ba27dca21f3b80c6f7a61c56ce640fe8cec0fea3c23fbb85->leave($__internal_677faffb7dd872a7ba27dca21f3b80c6f7a61c56ce640fe8cec0fea3c23fbb85_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45fbc6519bfb81fdd9aee269834991512a2ec0e2ef54e203977a07709cbdaabf = $this->env->getExtension("native_profiler");
        $__internal_45fbc6519bfb81fdd9aee269834991512a2ec0e2ef54e203977a07709cbdaabf->enter($__internal_45fbc6519bfb81fdd9aee269834991512a2ec0e2ef54e203977a07709cbdaabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_45fbc6519bfb81fdd9aee269834991512a2ec0e2ef54e203977a07709cbdaabf->leave($__internal_45fbc6519bfb81fdd9aee269834991512a2ec0e2ef54e203977a07709cbdaabf_prof);

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
