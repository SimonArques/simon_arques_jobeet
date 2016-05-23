<?php

/* :Category:show.html.twig */
class __TwigTemplate_2f5bfe33f9d2e4ff8b6dc5b5aa2185149a0c00a0298aa2e401ce0bbb143f3e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", ":Category:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsSimonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07dbe0befb03e69616c24e48467791b5c29e443c5def121a0e3b4685fc01a54d = $this->env->getExtension("native_profiler");
        $__internal_07dbe0befb03e69616c24e48467791b5c29e443c5def121a0e3b4685fc01a54d->enter($__internal_07dbe0befb03e69616c24e48467791b5c29e443c5def121a0e3b4685fc01a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dbe0befb03e69616c24e48467791b5c29e443c5def121a0e3b4685fc01a54d->leave($__internal_07dbe0befb03e69616c24e48467791b5c29e443c5def121a0e3b4685fc01a54d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b80ab43f1543040fcb354ae3eba6535f1eb0a0ea03df69bbe6b22270e5f7a9 = $this->env->getExtension("native_profiler");
        $__internal_85b80ab43f1543040fcb354ae3eba6535f1eb0a0ea03df69bbe6b22270e5f7a9->enter($__internal_85b80ab43f1543040fcb354ae3eba6535f1eb0a0ea03df69bbe6b22270e5f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_85b80ab43f1543040fcb354ae3eba6535f1eb0a0ea03df69bbe6b22270e5f7a9->leave($__internal_85b80ab43f1543040fcb354ae3eba6535f1eb0a0ea03df69bbe6b22270e5f7a9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e40c00a13d9d8a6d51e9fd2ed253915c3b0d01a3de8d208938e1f12a17b66a29 = $this->env->getExtension("native_profiler");
        $__internal_e40c00a13d9d8a6d51e9fd2ed253915c3b0d01a3de8d208938e1f12a17b66a29->enter($__internal_e40c00a13d9d8a6d51e9fd2ed253915c3b0d01a3de8d208938e1f12a17b66a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e40c00a13d9d8a6d51e9fd2ed253915c3b0d01a3de8d208938e1f12a17b66a29->leave($__internal_e40c00a13d9d8a6d51e9fd2ed253915c3b0d01a3de8d208938e1f12a17b66a29_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b0190baba7b80a4b24fb88457b9698937663e5e1f78bd316c5630179d0913cc = $this->env->getExtension("native_profiler");
        $__internal_7b0190baba7b80a4b24fb88457b9698937663e5e1f78bd316c5630179d0913cc->enter($__internal_7b0190baba7b80a4b24fb88457b9698937663e5e1f78bd316c5630179d0913cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed</a>
        </div>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 20
        $this->loadTemplate("EnsSimonBundle:Job:list.html.twig", ":Category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        
        $__internal_7b0190baba7b80a4b24fb88457b9698937663e5e1f78bd316c5630179d0913cc->leave($__internal_7b0190baba7b80a4b24fb88457b9698937663e5e1f78bd316c5630179d0913cc_prof);

    }

    public function getTemplateName()
    {
        return ":Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="category">*/
/*         <div class="feed">*/
/*             <a href="">Feed</a>*/
/*         </div>*/
/*         <h1>{{ category.name }}</h1>*/
/*     </div>*/
/* */
/*     {% include 'EnsSimonBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* {% endblock %}*/
