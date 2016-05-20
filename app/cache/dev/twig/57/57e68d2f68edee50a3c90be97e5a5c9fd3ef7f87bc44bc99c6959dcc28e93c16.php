<?php

/* @EnsSimon/layout.html.twig */
class __TwigTemplate_82968b06440b49dca1d9da8c941dec35446ae13fc58b95a16475c10ae9161c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_940c96950a9b905d696debfd15106eee562c361ce00c8db8a1aeedd16615b83b = $this->env->getExtension("native_profiler");
        $__internal_940c96950a9b905d696debfd15106eee562c361ce00c8db8a1aeedd16615b83b->enter($__internal_940c96950a9b905d696debfd15106eee562c361ce00c8db8a1aeedd16615b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsSimon/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">

        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        <div class=\"content\">
            ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_940c96950a9b905d696debfd15106eee562c361ce00c8db8a1aeedd16615b83b->leave($__internal_940c96950a9b905d696debfd15106eee562c361ce00c8db8a1aeedd16615b83b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54dc873b69af86da61ad154de2cedff58946c9d5efd0aac67423de1cf6a06d18 = $this->env->getExtension("native_profiler");
        $__internal_54dc873b69af86da61ad154de2cedff58946c9d5efd0aac67423de1cf6a06d18->enter($__internal_54dc873b69af86da61ad154de2cedff58946c9d5efd0aac67423de1cf6a06d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_54dc873b69af86da61ad154de2cedff58946c9d5efd0aac67423de1cf6a06d18->leave($__internal_54dc873b69af86da61ad154de2cedff58946c9d5efd0aac67423de1cf6a06d18_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08814e73ad79d86e997b2ef24ec7cc338333805fac82e0c51c32bc54e3bb16c4 = $this->env->getExtension("native_profiler");
        $__internal_08814e73ad79d86e997b2ef24ec7cc338333805fac82e0c51c32bc54e3bb16c4->enter($__internal_08814e73ad79d86e997b2ef24ec7cc338333805fac82e0c51c32bc54e3bb16c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_08814e73ad79d86e997b2ef24ec7cc338333805fac82e0c51c32bc54e3bb16c4->leave($__internal_08814e73ad79d86e997b2ef24ec7cc338333805fac82e0c51c32bc54e3bb16c4_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_316c01eb5d31490d0bb6131478ef56165f7487a58ff8338085fb69ad1d156703 = $this->env->getExtension("native_profiler");
        $__internal_316c01eb5d31490d0bb6131478ef56165f7487a58ff8338085fb69ad1d156703->enter($__internal_316c01eb5d31490d0bb6131478ef56165f7487a58ff8338085fb69ad1d156703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        
        $__internal_316c01eb5d31490d0bb6131478ef56165f7487a58ff8338085fb69ad1d156703->leave($__internal_316c01eb5d31490d0bb6131478ef56165f7487a58ff8338085fb69ad1d156703_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5122a494a1004fb1e4b6800b8d9429eb812d3c78521b1c82038462d79cbe32d = $this->env->getExtension("native_profiler");
        $__internal_c5122a494a1004fb1e4b6800b8d9429eb812d3c78521b1c82038462d79cbe32d->enter($__internal_c5122a494a1004fb1e4b6800b8d9429eb812d3c78521b1c82038462d79cbe32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "            ";
        
        $__internal_c5122a494a1004fb1e4b6800b8d9429eb812d3c78521b1c82038462d79cbe32d->leave($__internal_c5122a494a1004fb1e4b6800b8d9429eb812d3c78521b1c82038462d79cbe32d_prof);

    }

    public function getTemplateName()
    {
        return "@EnsSimon/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 61,  205 => 60,  198 => 15,  192 => 14,  182 => 11,  176 => 10,  168 => 6,  162 => 5,  141 => 70,  136 => 68,  128 => 62,  126 => 60,  122 => 58,  113 => 56,  109 => 55,  105 => 53,  96 => 51,  92 => 50,  69 => 30,  59 => 23,  55 => 22,  45 => 16,  43 => 14,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Jobeet - Your best job board*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/enssimon/images/favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('homepage') }}">*/
/*                     <img src="{{ asset('bundles/enssimon/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                 </a></h1>*/
/* */
/*             <div id="sub_header">*/
/*                 <div class="post">*/
/*                     <h2>Ask for people</h2>*/
/*                     <div>*/
/*                         <a href="{{ path('job_index') }}">Post a Job</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <h2>Ask for a job</h2>*/
/*                     <form action="" method="get">*/
/*                         <input type="text" name="keywords" id="search_keywords" />*/
/*                         <input type="submit" value="search" />*/
/*                         <div class="help">*/
/*                             Enter some keywords (city, country, position, ...)*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="content">*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             {{ flashMessage }}*/
/*         {% endfor %}*/
/* */
/* */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             {{ flashMessage }}*/
/*         {% endfor %}*/
/* */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         <div class="content">*/
/*           <span class="symfony">*/
/*             <img src="{{ asset('bundles/ensjobeet/images/jobeet-mini.png') }}" />*/
/*             powered by <a href="http://www.symfony.com/">*/
/*               <img src="{{ asset('bundles/ensjobeet/images/symfony.gif') }}" alt="symfony framework" />*/
/*             </a>*/
/*           </span>*/
/*             <ul>*/
/*                 <li><a href="">About Jobeet</a></li>*/
/*                 <li class="feed"><a href="">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
