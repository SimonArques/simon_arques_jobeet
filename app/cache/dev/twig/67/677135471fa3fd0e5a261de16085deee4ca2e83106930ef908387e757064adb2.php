<?php

/* :job:edit.html.twig */
class __TwigTemplate_99ca2ef5e815a87b0758bf8373177c164922c80050d91d068e0c4f5541a6001a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", ":job:edit.html.twig", 1);
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
        $__internal_f021b2198d62f51405b56a2ddeb45f3088f7fd1e5e4b9d1523edda06835d05df = $this->env->getExtension("native_profiler");
        $__internal_f021b2198d62f51405b56a2ddeb45f3088f7fd1e5e4b9d1523edda06835d05df->enter($__internal_f021b2198d62f51405b56a2ddeb45f3088f7fd1e5e4b9d1523edda06835d05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f021b2198d62f51405b56a2ddeb45f3088f7fd1e5e4b9d1523edda06835d05df->leave($__internal_f021b2198d62f51405b56a2ddeb45f3088f7fd1e5e4b9d1523edda06835d05df_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3be6496afc12246fe5edf40e403f10c688d08f446a0646710273ad105bfed6dc = $this->env->getExtension("native_profiler");
        $__internal_3be6496afc12246fe5edf40e403f10c688d08f446a0646710273ad105bfed6dc->enter($__internal_3be6496afc12246fe5edf40e403f10c688d08f446a0646710273ad105bfed6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3be6496afc12246fe5edf40e403f10c688d08f446a0646710273ad105bfed6dc->leave($__internal_3be6496afc12246fe5edf40e403f10c688d08f446a0646710273ad105bfed6dc_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
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
