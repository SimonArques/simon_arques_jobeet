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
        $__internal_b7e7b9794ad381a1f1ec6e53c208d8708f411815103ce65b423a8ab353cf3e39 = $this->env->getExtension("native_profiler");
        $__internal_b7e7b9794ad381a1f1ec6e53c208d8708f411815103ce65b423a8ab353cf3e39->enter($__internal_b7e7b9794ad381a1f1ec6e53c208d8708f411815103ce65b423a8ab353cf3e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e7b9794ad381a1f1ec6e53c208d8708f411815103ce65b423a8ab353cf3e39->leave($__internal_b7e7b9794ad381a1f1ec6e53c208d8708f411815103ce65b423a8ab353cf3e39_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f3215c145c747066cc608ea3ec85a13407d77f4d000f137c2c5292935d9eb4f = $this->env->getExtension("native_profiler");
        $__internal_1f3215c145c747066cc608ea3ec85a13407d77f4d000f137c2c5292935d9eb4f->enter($__internal_1f3215c145c747066cc608ea3ec85a13407d77f4d000f137c2c5292935d9eb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_1f3215c145c747066cc608ea3ec85a13407d77f4d000f137c2c5292935d9eb4f->leave($__internal_1f3215c145c747066cc608ea3ec85a13407d77f4d000f137c2c5292935d9eb4f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2169a27373ffb727b3419a046696cd777240bfd9598d724d03fa8e8d6de5fc08 = $this->env->getExtension("native_profiler");
        $__internal_2169a27373ffb727b3419a046696cd777240bfd9598d724d03fa8e8d6de5fc08->enter($__internal_2169a27373ffb727b3419a046696cd777240bfd9598d724d03fa8e8d6de5fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2169a27373ffb727b3419a046696cd777240bfd9598d724d03fa8e8d6de5fc08->leave($__internal_2169a27373ffb727b3419a046696cd777240bfd9598d724d03fa8e8d6de5fc08_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_c353eb26e92c98673c7f1ed2765aae1bf34d8c492023707df574d6d93c926a52 = $this->env->getExtension("native_profiler");
        $__internal_c353eb26e92c98673c7f1ed2765aae1bf34d8c492023707df574d6d93c926a52->enter($__internal_c353eb26e92c98673c7f1ed2765aae1bf34d8c492023707df574d6d93c926a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div id=\"job\">
        <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 22
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 23
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"description\">
            ";
        // line 32
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_c353eb26e92c98673c7f1ed2765aae1bf34d8c492023707df574d6d93c926a52->leave($__internal_c353eb26e92c98673c7f1ed2765aae1bf34d8c492023707df574d6d93c926a52_prof);

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
        return array (  147 => 44,  140 => 40,  134 => 37,  126 => 32,  122 => 30,  115 => 26,  111 => 25,  107 => 24,  104 => 23,  102 => 22,  96 => 19,  92 => 18,  87 => 16,  83 => 15,  80 => 14,  74 => 13,  65 => 10,  60 => 9,  54 => 8,  42 => 5,  36 => 4,  11 => 1,);
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
/*             <a href="{{ path('job_edit', { 'id': job.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
