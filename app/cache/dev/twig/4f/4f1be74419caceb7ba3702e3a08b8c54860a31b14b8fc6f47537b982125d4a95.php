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
        $__internal_d15d2af2f4740827a818912d92594be915732c0a048cf958880395546d090f0c = $this->env->getExtension("native_profiler");
        $__internal_d15d2af2f4740827a818912d92594be915732c0a048cf958880395546d090f0c->enter($__internal_d15d2af2f4740827a818912d92594be915732c0a048cf958880395546d090f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15d2af2f4740827a818912d92594be915732c0a048cf958880395546d090f0c->leave($__internal_d15d2af2f4740827a818912d92594be915732c0a048cf958880395546d090f0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0e1865e5a189958ab31e03cb80954d2c3c35e9a99ddfa9bf844a682499f9d77 = $this->env->getExtension("native_profiler");
        $__internal_c0e1865e5a189958ab31e03cb80954d2c3c35e9a99ddfa9bf844a682499f9d77->enter($__internal_c0e1865e5a189958ab31e03cb80954d2c3c35e9a99ddfa9bf844a682499f9d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c0e1865e5a189958ab31e03cb80954d2c3c35e9a99ddfa9bf844a682499f9d77->leave($__internal_c0e1865e5a189958ab31e03cb80954d2c3c35e9a99ddfa9bf844a682499f9d77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba3cf43bf8816bee61b82663ff5580fdc9e8777d6c59ee02c222fcd3d6b980a = $this->env->getExtension("native_profiler");
        $__internal_7ba3cf43bf8816bee61b82663ff5580fdc9e8777d6c59ee02c222fcd3d6b980a->enter($__internal_7ba3cf43bf8816bee61b82663ff5580fdc9e8777d6c59ee02c222fcd3d6b980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ba3cf43bf8816bee61b82663ff5580fdc9e8777d6c59ee02c222fcd3d6b980a->leave($__internal_7ba3cf43bf8816bee61b82663ff5580fdc9e8777d6c59ee02c222fcd3d6b980a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bb3e8f8c79b38dfd2cba1c2d3b259e35eefe7acabb0e9fa7e3deb0c3bb8f035 = $this->env->getExtension("native_profiler");
        $__internal_8bb3e8f8c79b38dfd2cba1c2d3b259e35eefe7acabb0e9fa7e3deb0c3bb8f035->enter($__internal_8bb3e8f8c79b38dfd2cba1c2d3b259e35eefe7acabb0e9fa7e3deb0c3bb8f035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8bb3e8f8c79b38dfd2cba1c2d3b259e35eefe7acabb0e9fa7e3deb0c3bb8f035->leave($__internal_8bb3e8f8c79b38dfd2cba1c2d3b259e35eefe7acabb0e9fa7e3deb0c3bb8f035_prof);

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
