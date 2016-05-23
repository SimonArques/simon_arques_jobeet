<?php

/* :job:new.html.twig */
class __TwigTemplate_816da25d926eb1be96dcc543875ff342367492f4b920051774aff106b0ff6e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsSimonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6871da62f90941db412d23d2d37b801914165c5b579a75610c9a632f8dbed16e = $this->env->getExtension("native_profiler");
        $__internal_6871da62f90941db412d23d2d37b801914165c5b579a75610c9a632f8dbed16e->enter($__internal_6871da62f90941db412d23d2d37b801914165c5b579a75610c9a632f8dbed16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6871da62f90941db412d23d2d37b801914165c5b579a75610c9a632f8dbed16e->leave($__internal_6871da62f90941db412d23d2d37b801914165c5b579a75610c9a632f8dbed16e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b35d12ddf53b6466f0bbcde95742a037f464f428d0af7ed2c132a2e2a682a13 = $this->env->getExtension("native_profiler");
        $__internal_1b35d12ddf53b6466f0bbcde95742a037f464f428d0af7ed2c132a2e2a682a13->enter($__internal_1b35d12ddf53b6466f0bbcde95742a037f464f428d0af7ed2c132a2e2a682a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1b35d12ddf53b6466f0bbcde95742a037f464f428d0af7ed2c132a2e2a682a13->leave($__internal_1b35d12ddf53b6466f0bbcde95742a037f464f428d0af7ed2c132a2e2a682a13_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
