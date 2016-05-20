<?php

/* job/new.html.twig */
class __TwigTemplate_5ff27e46e74c0c9b8d9c9cf93ce78dbe8796224775d10e0e3c8631e5031dc087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a7b34f3e0c864413263a0229281a2e02a0e7f6ae1f1c9d00d82ee109bfa425 = $this->env->getExtension("native_profiler");
        $__internal_71a7b34f3e0c864413263a0229281a2e02a0e7f6ae1f1c9d00d82ee109bfa425->enter($__internal_71a7b34f3e0c864413263a0229281a2e02a0e7f6ae1f1c9d00d82ee109bfa425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a7b34f3e0c864413263a0229281a2e02a0e7f6ae1f1c9d00d82ee109bfa425->leave($__internal_71a7b34f3e0c864413263a0229281a2e02a0e7f6ae1f1c9d00d82ee109bfa425_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4267e65688a7bf3877a7cab6a3b50dffc5ce0c4f14cff564b803d27b43a58f49 = $this->env->getExtension("native_profiler");
        $__internal_4267e65688a7bf3877a7cab6a3b50dffc5ce0c4f14cff564b803d27b43a58f49->enter($__internal_4267e65688a7bf3877a7cab6a3b50dffc5ce0c4f14cff564b803d27b43a58f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4267e65688a7bf3877a7cab6a3b50dffc5ce0c4f14cff564b803d27b43a58f49->leave($__internal_4267e65688a7bf3877a7cab6a3b50dffc5ce0c4f14cff564b803d27b43a58f49_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
