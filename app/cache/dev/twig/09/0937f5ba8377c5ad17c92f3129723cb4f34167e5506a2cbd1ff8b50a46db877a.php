<?php

/* job/edit.html.twig */
class __TwigTemplate_df789f2997df109ccdb2730fe9afc62dcb72c849446cf4b2abea30c5cf858ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "job/edit.html.twig", 1);
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
        $__internal_e381529a5e9c5a3d71bb609fd89c562ee9ad92370465945fac133340642e5b1a = $this->env->getExtension("native_profiler");
        $__internal_e381529a5e9c5a3d71bb609fd89c562ee9ad92370465945fac133340642e5b1a->enter($__internal_e381529a5e9c5a3d71bb609fd89c562ee9ad92370465945fac133340642e5b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e381529a5e9c5a3d71bb609fd89c562ee9ad92370465945fac133340642e5b1a->leave($__internal_e381529a5e9c5a3d71bb609fd89c562ee9ad92370465945fac133340642e5b1a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ba69ccca1e70bd8a6e365cac4cf97a568ad4c21bb8e26f1a774da45cb401c06 = $this->env->getExtension("native_profiler");
        $__internal_6ba69ccca1e70bd8a6e365cac4cf97a568ad4c21bb8e26f1a774da45cb401c06->enter($__internal_6ba69ccca1e70bd8a6e365cac4cf97a568ad4c21bb8e26f1a774da45cb401c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Job edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6ba69ccca1e70bd8a6e365cac4cf97a568ad4c21bb8e26f1a774da45cb401c06->leave($__internal_6ba69ccca1e70bd8a6e365cac4cf97a568ad4c21bb8e26f1a774da45cb401c06_prof);

    }

    public function getTemplateName()
    {
        return "job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  66 => 18,  60 => 15,  53 => 11,  48 => 9,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
