<?php

/* job/show.html.twig */
class __TwigTemplate_8498d57fbdb2a1872d6d7962b1437abeab8036cdddb514df2c8d97dc29d9ca85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "job/show.html.twig", 1);
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
        $__internal_10361d5d0280876aeb9be89c2870dcdb6ed00c645caa75724a29760219e2ea97 = $this->env->getExtension("native_profiler");
        $__internal_10361d5d0280876aeb9be89c2870dcdb6ed00c645caa75724a29760219e2ea97->enter($__internal_10361d5d0280876aeb9be89c2870dcdb6ed00c645caa75724a29760219e2ea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10361d5d0280876aeb9be89c2870dcdb6ed00c645caa75724a29760219e2ea97->leave($__internal_10361d5d0280876aeb9be89c2870dcdb6ed00c645caa75724a29760219e2ea97_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8303a92e5c58d9311b57280787920cbcff2aa8e13e9964930ffb42e7c7c8760 = $this->env->getExtension("native_profiler");
        $__internal_b8303a92e5c58d9311b57280787920cbcff2aa8e13e9964930ffb42e7c7c8760->enter($__internal_b8303a92e5c58d9311b57280787920cbcff2aa8e13e9964930ffb42e7c7c8760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_b8303a92e5c58d9311b57280787920cbcff2aa8e13e9964930ffb42e7c7c8760->leave($__internal_b8303a92e5c58d9311b57280787920cbcff2aa8e13e9964930ffb42e7c7c8760_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf131e5aacea4ff57d9b185ca2547a8080904186b08e77796647a894cef86051 = $this->env->getExtension("native_profiler");
        $__internal_cf131e5aacea4ff57d9b185ca2547a8080904186b08e77796647a894cef86051->enter($__internal_cf131e5aacea4ff57d9b185ca2547a8080904186b08e77796647a894cef86051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf131e5aacea4ff57d9b185ca2547a8080904186b08e77796647a894cef86051->leave($__internal_cf131e5aacea4ff57d9b185ca2547a8080904186b08e77796647a894cef86051_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2e8f7aecebfa0c5c410a059fead1b95cb9adc69097e6e1d13424d8d0ddfa50d = $this->env->getExtension("native_profiler");
        $__internal_b2e8f7aecebfa0c5c410a059fead1b95cb9adc69097e6e1d13424d8d0ddfa50d->enter($__internal_b2e8f7aecebfa0c5c410a059fead1b95cb9adc69097e6e1d13424d8d0ddfa50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 15
            echo "        ";
            $this->loadTemplate(":Job:admin.html.twig", "job/show.html.twig", 15)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"job\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 25
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 26
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 33
        echo "
        <div class=\"description\">
            ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_b2e8f7aecebfa0c5c410a059fead1b95cb9adc69097e6e1d13424d8d0ddfa50d->leave($__internal_b2e8f7aecebfa0c5c410a059fead1b95cb9adc69097e6e1d13424d8d0ddfa50d_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  149 => 43,  143 => 40,  135 => 35,  131 => 33,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  111 => 25,  105 => 22,  101 => 21,  96 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  74 => 13,  65 => 10,  60 => 9,  54 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block title %}*/
/*     {{ job.company }} is looking for a {{ job.position }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% if app.request.get('token') %}*/
/*         {% include ':Job:admin.html.twig' with {'job': job} %}*/
/*     {% endif %}*/
/*     <div id="job">*/
/*         <h1>{{ job.company }}</h1>*/
/*         <h2>{{ job.location }}</h2>*/
/*         <h3>*/
/*             {{ job.position }}*/
/*             <small> - {{ job.type }}</small>*/
/*         </h3>*/
/* */
/*         {% if job.logo %}*/
/*             <div class="logo">*/
/*                 <a href="{{ job.url }}">*/
/*                     <img src="/uploads/jobs/{{ job.logo }}"*/
/*                          alt="{{ job.company }} logo" />*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="description">*/
/*             {{ job.description|nl2br }}*/
/*         </div>*/
/* */
/*         <h4>How to apply?</h4>*/
/* */
/*         <p class="how_to_apply">{{ job.howtoapply }}</p>*/
/* */
/*         <div class="meta">*/
/*             <small>posted on {{ job.createdat|date('m/d/Y') }}</small>*/
/*         </div>*/
/* */
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('job_edit', { 'token': job.token }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
