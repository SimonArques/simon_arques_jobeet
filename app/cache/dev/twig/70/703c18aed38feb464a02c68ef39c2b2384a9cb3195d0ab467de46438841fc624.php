<?php

/* job/index.html.twig */
class __TwigTemplate_ad349d78061a11b9632c154264d03f0a27e5a64394f3312b987ed68d8afc4d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "job/index.html.twig", 1);
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
        $__internal_027c8282045be6b68235208d668d9ae18db0717448701aa4cc2362f7bd6b1238 = $this->env->getExtension("native_profiler");
        $__internal_027c8282045be6b68235208d668d9ae18db0717448701aa4cc2362f7bd6b1238->enter($__internal_027c8282045be6b68235208d668d9ae18db0717448701aa4cc2362f7bd6b1238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027c8282045be6b68235208d668d9ae18db0717448701aa4cc2362f7bd6b1238->leave($__internal_027c8282045be6b68235208d668d9ae18db0717448701aa4cc2362f7bd6b1238_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5be563ea982d1ea29df2234d8c98ef3b7bfe0329d59689d7c38ddeb001001eb4 = $this->env->getExtension("native_profiler");
        $__internal_5be563ea982d1ea29df2234d8c98ef3b7bfe0329d59689d7c38ddeb001001eb4->enter($__internal_5be563ea982d1ea29df2234d8c98ef3b7bfe0329d59689d7c38ddeb001001eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5be563ea982d1ea29df2234d8c98ef3b7bfe0329d59689d7c38ddeb001001eb4->leave($__internal_5be563ea982d1ea29df2234d8c98ef3b7bfe0329d59689d7c38ddeb001001eb4_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_82b7f597e464a4099053d5ff0463b0aec75d0393ae47baadb1a1f8fb1ac70e58 = $this->env->getExtension("native_profiler");
        $__internal_82b7f597e464a4099053d5ff0463b0aec75d0393ae47baadb1a1f8fb1ac70e58->enter($__internal_82b7f597e464a4099053d5ff0463b0aec75d0393ae47baadb1a1f8fb1ac70e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsSimonBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
                </div>

                ";
            // line 19
            $this->loadTemplate(":job:list.html.twig", "job/index.html.twig", 19)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 20
            echo "
                ";
            // line 21
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 22
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsSimonBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 27
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
";
        
        $__internal_82b7f597e464a4099053d5ff0463b0aec75d0393ae47baadb1a1f8fb1ac70e58->leave($__internal_82b7f597e464a4099053d5ff0463b0aec75d0393ae47baadb1a1f8fb1ac70e58_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 29,  115 => 27,  106 => 23,  103 => 22,  101 => 21,  98 => 20,  96 => 19,  88 => 16,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*         {% for category in categories %}*/
/*             <div>*/
/*                 <div class="category">*/
/*                     <div class="feed">*/
/*                         <a href="">Feed</a>*/
/*                     </div>*/
/*                     <h1><a href="{{ path('EnsSimonBundle_category', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/*                 </div>*/
/* */
/*                 {% include ':job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* */
/*                 {% if category.morejobs %}*/
/*                     <div class="more_jobs">*/
/*                         and <a href="{{ path('EnsSimonBundle_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                         more...*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
