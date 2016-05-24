<?php

/* EnsSimonBundle::layout.html.twig */
class __TwigTemplate_8fdb166225200ed0c0fab18f7d77ee80f42c2209e87d3aa90f80dc10dc0117c8 extends Twig_Template
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
        $__internal_58570eebe7634b79bd9b0ffef7bdcab4bd0f45b810cd8b283a0f5b1b82fc3f08 = $this->env->getExtension("native_profiler");
        $__internal_58570eebe7634b79bd9b0ffef7bdcab4bd0f45b810cd8b283a0f5b1b82fc3f08->enter($__internal_58570eebe7634b79bd9b0ffef7bdcab4bd0f45b810cd8b283a0f5b1b82fc3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsSimonBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/symfony.gif"), "html", null, true);
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
        
        $__internal_58570eebe7634b79bd9b0ffef7bdcab4bd0f45b810cd8b283a0f5b1b82fc3f08->leave($__internal_58570eebe7634b79bd9b0ffef7bdcab4bd0f45b810cd8b283a0f5b1b82fc3f08_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98752424797f0e2cc2423fcd07b155867c0185ea9f9e0ec3686a33aae0e4fc9f = $this->env->getExtension("native_profiler");
        $__internal_98752424797f0e2cc2423fcd07b155867c0185ea9f9e0ec3686a33aae0e4fc9f->enter($__internal_98752424797f0e2cc2423fcd07b155867c0185ea9f9e0ec3686a33aae0e4fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_98752424797f0e2cc2423fcd07b155867c0185ea9f9e0ec3686a33aae0e4fc9f->leave($__internal_98752424797f0e2cc2423fcd07b155867c0185ea9f9e0ec3686a33aae0e4fc9f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce6945a78cdbee14bb84f835dbed1e6d86d893c0bfcffcd3e4546fb31d8886b6 = $this->env->getExtension("native_profiler");
        $__internal_ce6945a78cdbee14bb84f835dbed1e6d86d893c0bfcffcd3e4546fb31d8886b6->enter($__internal_ce6945a78cdbee14bb84f835dbed1e6d86d893c0bfcffcd3e4546fb31d8886b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_ce6945a78cdbee14bb84f835dbed1e6d86d893c0bfcffcd3e4546fb31d8886b6->leave($__internal_ce6945a78cdbee14bb84f835dbed1e6d86d893c0bfcffcd3e4546fb31d8886b6_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a50f53c01b8f91d412010dc55ed5844a7418ab8b080604e25fbac87c6d4bd274 = $this->env->getExtension("native_profiler");
        $__internal_a50f53c01b8f91d412010dc55ed5844a7418ab8b080604e25fbac87c6d4bd274->enter($__internal_a50f53c01b8f91d412010dc55ed5844a7418ab8b080604e25fbac87c6d4bd274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    ";
        
        $__internal_a50f53c01b8f91d412010dc55ed5844a7418ab8b080604e25fbac87c6d4bd274->leave($__internal_a50f53c01b8f91d412010dc55ed5844a7418ab8b080604e25fbac87c6d4bd274_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_574262881b9ff6e71a44e17acb40fd6370e5457c1764db2114e2f3bf485ebca0 = $this->env->getExtension("native_profiler");
        $__internal_574262881b9ff6e71a44e17acb40fd6370e5457c1764db2114e2f3bf485ebca0->enter($__internal_574262881b9ff6e71a44e17acb40fd6370e5457c1764db2114e2f3bf485ebca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "            ";
        
        $__internal_574262881b9ff6e71a44e17acb40fd6370e5457c1764db2114e2f3bf485ebca0->leave($__internal_574262881b9ff6e71a44e17acb40fd6370e5457c1764db2114e2f3bf485ebca0_prof);

    }

    public function getTemplateName()
    {
        return "EnsSimonBundle::layout.html.twig";
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
/*             <img src="{{ asset('bundles/enssimon/images/jobeet-mini.png') }}" />*/
/*             powered by <a href="http://www.symfony.com/">*/
/*               <img src="{{ asset('bundles/enssimon/images/symfony.gif') }}" alt="symfony framework" />*/
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