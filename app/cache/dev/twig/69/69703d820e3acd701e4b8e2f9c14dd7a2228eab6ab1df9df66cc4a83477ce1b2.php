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
        $__internal_46d33d264f3b058f54c3b838de9f13ae77e5d26953980f188e714649e689782d = $this->env->getExtension("native_profiler");
        $__internal_46d33d264f3b058f54c3b838de9f13ae77e5d26953980f188e714649e689782d->enter($__internal_46d33d264f3b058f54c3b838de9f13ae77e5d26953980f188e714649e689782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d33d264f3b058f54c3b838de9f13ae77e5d26953980f188e714649e689782d->leave($__internal_46d33d264f3b058f54c3b838de9f13ae77e5d26953980f188e714649e689782d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_933fb73b00db525b44edc4d8116d7fedad0aa82c81ab67d9c0c31fbf249fca78 = $this->env->getExtension("native_profiler");
        $__internal_933fb73b00db525b44edc4d8116d7fedad0aa82c81ab67d9c0c31fbf249fca78->enter($__internal_933fb73b00db525b44edc4d8116d7fedad0aa82c81ab67d9c0c31fbf249fca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_933fb73b00db525b44edc4d8116d7fedad0aa82c81ab67d9c0c31fbf249fca78->leave($__internal_933fb73b00db525b44edc4d8116d7fedad0aa82c81ab67d9c0c31fbf249fca78_prof);

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
