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
        $__internal_0512188fcfd603a07a06a2ac9b42ce1240a174ae65b24f6a08630c30d8600d66 = $this->env->getExtension("native_profiler");
        $__internal_0512188fcfd603a07a06a2ac9b42ce1240a174ae65b24f6a08630c30d8600d66->enter($__internal_0512188fcfd603a07a06a2ac9b42ce1240a174ae65b24f6a08630c30d8600d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsSimonBundle::layout.html.twig"));

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
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 29
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        <div class=\"content\">
            ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 69
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
        
        $__internal_0512188fcfd603a07a06a2ac9b42ce1240a174ae65b24f6a08630c30d8600d66->leave($__internal_0512188fcfd603a07a06a2ac9b42ce1240a174ae65b24f6a08630c30d8600d66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9178807babe8fd73ecedf4087c3a0d9589e761e6726ef603d04b0c879bdf1d00 = $this->env->getExtension("native_profiler");
        $__internal_9178807babe8fd73ecedf4087c3a0d9589e761e6726ef603d04b0c879bdf1d00->enter($__internal_9178807babe8fd73ecedf4087c3a0d9589e761e6726ef603d04b0c879bdf1d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_9178807babe8fd73ecedf4087c3a0d9589e761e6726ef603d04b0c879bdf1d00->leave($__internal_9178807babe8fd73ecedf4087c3a0d9589e761e6726ef603d04b0c879bdf1d00_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e536dfe91b2a5e9f1c7f55a7849770e40bcfbef605fe02f68d4fe86e20af6f70 = $this->env->getExtension("native_profiler");
        $__internal_e536dfe91b2a5e9f1c7f55a7849770e40bcfbef605fe02f68d4fe86e20af6f70->enter($__internal_e536dfe91b2a5e9f1c7f55a7849770e40bcfbef605fe02f68d4fe86e20af6f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_e536dfe91b2a5e9f1c7f55a7849770e40bcfbef605fe02f68d4fe86e20af6f70->leave($__internal_e536dfe91b2a5e9f1c7f55a7849770e40bcfbef605fe02f68d4fe86e20af6f70_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4996add535b9bbde8c783cd9482362bbe9a9d8b4d112e7b8967dcf0ebcb5589e = $this->env->getExtension("native_profiler");
        $__internal_4996add535b9bbde8c783cd9482362bbe9a9d8b4d112e7b8967dcf0ebcb5589e->enter($__internal_4996add535b9bbde8c783cd9482362bbe9a9d8b4d112e7b8967dcf0ebcb5589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_4996add535b9bbde8c783cd9482362bbe9a9d8b4d112e7b8967dcf0ebcb5589e->leave($__internal_4996add535b9bbde8c783cd9482362bbe9a9d8b4d112e7b8967dcf0ebcb5589e_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fe4aecfcd2018c80531c097e7976fe3b0445a96be744a2a9f81ead82bafa557 = $this->env->getExtension("native_profiler");
        $__internal_1fe4aecfcd2018c80531c097e7976fe3b0445a96be744a2a9f81ead82bafa557->enter($__internal_1fe4aecfcd2018c80531c097e7976fe3b0445a96be744a2a9f81ead82bafa557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "            ";
        
        $__internal_1fe4aecfcd2018c80531c097e7976fe3b0445a96be744a2a9f81ead82bafa557->leave($__internal_1fe4aecfcd2018c80531c097e7976fe3b0445a96be744a2a9f81ead82bafa557_prof);

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
        return array (  209 => 60,  203 => 59,  196 => 14,  190 => 13,  180 => 11,  174 => 10,  166 => 6,  160 => 5,  139 => 69,  134 => 67,  126 => 61,  124 => 59,  120 => 57,  111 => 55,  107 => 54,  103 => 52,  94 => 50,  90 => 49,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
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
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/enssimon/images/favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('job_index') }}">*/
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
