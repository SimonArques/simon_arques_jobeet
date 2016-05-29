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
        $__internal_e87768d94dc68eab9e32a68d57d7eb944d43f83ab50268f820aad81174599724 = $this->env->getExtension("native_profiler");
        $__internal_e87768d94dc68eab9e32a68d57d7eb944d43f83ab50268f820aad81174599724->enter($__internal_e87768d94dc68eab9e32a68d57d7eb944d43f83ab50268f820aad81174599724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87768d94dc68eab9e32a68d57d7eb944d43f83ab50268f820aad81174599724->leave($__internal_e87768d94dc68eab9e32a68d57d7eb944d43f83ab50268f820aad81174599724_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff56f6b94708f78e3b6825789f00f565568fba3f34d887f807740e728878c2b4 = $this->env->getExtension("native_profiler");
        $__internal_ff56f6b94708f78e3b6825789f00f565568fba3f34d887f807740e728878c2b4->enter($__internal_ff56f6b94708f78e3b6825789f00f565568fba3f34d887f807740e728878c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff56f6b94708f78e3b6825789f00f565568fba3f34d887f807740e728878c2b4->leave($__internal_ff56f6b94708f78e3b6825789f00f565568fba3f34d887f807740e728878c2b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91026339d1825c41393fa8b5bac9b5adaa1eff70de1f49b77008d91ed42ed383 = $this->env->getExtension("native_profiler");
        $__internal_91026339d1825c41393fa8b5bac9b5adaa1eff70de1f49b77008d91ed42ed383->enter($__internal_91026339d1825c41393fa8b5bac9b5adaa1eff70de1f49b77008d91ed42ed383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91026339d1825c41393fa8b5bac9b5adaa1eff70de1f49b77008d91ed42ed383->leave($__internal_91026339d1825c41393fa8b5bac9b5adaa1eff70de1f49b77008d91ed42ed383_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad5f71fb9438b58c76832f88d748f7dbdf1a28532421bc7853c7d5e0d487e58 = $this->env->getExtension("native_profiler");
        $__internal_1ad5f71fb9438b58c76832f88d748f7dbdf1a28532421bc7853c7d5e0d487e58->enter($__internal_1ad5f71fb9438b58c76832f88d748f7dbdf1a28532421bc7853c7d5e0d487e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1ad5f71fb9438b58c76832f88d748f7dbdf1a28532421bc7853c7d5e0d487e58->leave($__internal_1ad5f71fb9438b58c76832f88d748f7dbdf1a28532421bc7853c7d5e0d487e58_prof);

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
