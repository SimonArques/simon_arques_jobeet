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
        $__internal_fd77e4a2cf7d36f45d49ad9be03efdeae54b9d69ddc8d94a878bd7a8e988d85a = $this->env->getExtension("native_profiler");
        $__internal_fd77e4a2cf7d36f45d49ad9be03efdeae54b9d69ddc8d94a878bd7a8e988d85a->enter($__internal_fd77e4a2cf7d36f45d49ad9be03efdeae54b9d69ddc8d94a878bd7a8e988d85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd77e4a2cf7d36f45d49ad9be03efdeae54b9d69ddc8d94a878bd7a8e988d85a->leave($__internal_fd77e4a2cf7d36f45d49ad9be03efdeae54b9d69ddc8d94a878bd7a8e988d85a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5573f558c706bb91a4c66785a749d91febb20bd3c1fd9ac77719ca798c00fccb = $this->env->getExtension("native_profiler");
        $__internal_5573f558c706bb91a4c66785a749d91febb20bd3c1fd9ac77719ca798c00fccb->enter($__internal_5573f558c706bb91a4c66785a749d91febb20bd3c1fd9ac77719ca798c00fccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5573f558c706bb91a4c66785a749d91febb20bd3c1fd9ac77719ca798c00fccb->leave($__internal_5573f558c706bb91a4c66785a749d91febb20bd3c1fd9ac77719ca798c00fccb_prof);

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
