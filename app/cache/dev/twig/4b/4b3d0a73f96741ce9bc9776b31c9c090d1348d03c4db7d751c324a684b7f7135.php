<?php

/* :job:index.html.twig */
class __TwigTemplate_ef50cc1a7e8237095b54994efc1fd691b4501fb5be2e848c0f7f2e400aaf2cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3b1384602e8759aed4bb77bbf079a7a0a3e18ef4bbea4ae86c0de55d7ac1353e = $this->env->getExtension("native_profiler");
        $__internal_3b1384602e8759aed4bb77bbf079a7a0a3e18ef4bbea4ae86c0de55d7ac1353e->enter($__internal_3b1384602e8759aed4bb77bbf079a7a0a3e18ef4bbea4ae86c0de55d7ac1353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1384602e8759aed4bb77bbf079a7a0a3e18ef4bbea4ae86c0de55d7ac1353e->leave($__internal_3b1384602e8759aed4bb77bbf079a7a0a3e18ef4bbea4ae86c0de55d7ac1353e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19510b638151580d4d0d84fbe7286f01cc0148dfbaa42ec891393f483f4163b5 = $this->env->getExtension("native_profiler");
        $__internal_19510b638151580d4d0d84fbe7286f01cc0148dfbaa42ec891393f483f4163b5->enter($__internal_19510b638151580d4d0d84fbe7286f01cc0148dfbaa42ec891393f483f4163b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19510b638151580d4d0d84fbe7286f01cc0148dfbaa42ec891393f483f4163b5->leave($__internal_19510b638151580d4d0d84fbe7286f01cc0148dfbaa42ec891393f483f4163b5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_7aacf69839fb17609c134329feaf41344d8ef276bd2700cf92d392e066309838 = $this->env->getExtension("native_profiler");
        $__internal_7aacf69839fb17609c134329feaf41344d8ef276bd2700cf92d392e066309838->enter($__internal_7aacf69839fb17609c134329feaf41344d8ef276bd2700cf92d392e066309838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companySlug", array()), "location" => $this->getAttribute($context["job"], "locationSlug", array()), "position" => $this->getAttribute($context["job"], "positionSlug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
";
        
        $__internal_7aacf69839fb17609c134329feaf41344d8ef276bd2700cf92d392e066309838->leave($__internal_7aacf69839fb17609c134329feaf41344d8ef276bd2700cf92d392e066309838_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  102 => 19,  96 => 16,  92 => 15,  87 => 13,  82 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         <table class="jobs">*/
/*             {% for job in jobs %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ job.location }}</td>*/
/*                     <td class="position">*/
/*                         <a href="{{ path('job_show', { 'id': job.id, 'company': job.companySlug, 'location': job.locationSlug, 'position': job.positionSlug}) }}">*/
/*                             {{ job.position }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="company">{{ job.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
