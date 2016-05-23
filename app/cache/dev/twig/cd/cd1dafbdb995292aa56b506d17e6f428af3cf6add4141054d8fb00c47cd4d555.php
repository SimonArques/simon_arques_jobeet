<?php

/* job/new.html.twig */
class __TwigTemplate_5ff27e46e74c0c9b8d9c9cf93ce78dbe8796224775d10e0e3c8631e5031dc087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "job/new.html.twig", 1);
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
        $__internal_266d0c8b3f471ddbb0f76f675d06be62cfa62278e11fdfa47bc2c92e517b2422 = $this->env->getExtension("native_profiler");
        $__internal_266d0c8b3f471ddbb0f76f675d06be62cfa62278e11fdfa47bc2c92e517b2422->enter($__internal_266d0c8b3f471ddbb0f76f675d06be62cfa62278e11fdfa47bc2c92e517b2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266d0c8b3f471ddbb0f76f675d06be62cfa62278e11fdfa47bc2c92e517b2422->leave($__internal_266d0c8b3f471ddbb0f76f675d06be62cfa62278e11fdfa47bc2c92e517b2422_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e09670ed3e977c95e0c5bd74e1612bfbff57fb1864ca12f527a270eaba3134db = $this->env->getExtension("native_profiler");
        $__internal_e09670ed3e977c95e0c5bd74e1612bfbff57fb1864ca12f527a270eaba3134db->enter($__internal_e09670ed3e977c95e0c5bd74e1612bfbff57fb1864ca12f527a270eaba3134db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e09670ed3e977c95e0c5bd74e1612bfbff57fb1864ca12f527a270eaba3134db->leave($__internal_e09670ed3e977c95e0c5bd74e1612bfbff57fb1864ca12f527a270eaba3134db_prof);

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
