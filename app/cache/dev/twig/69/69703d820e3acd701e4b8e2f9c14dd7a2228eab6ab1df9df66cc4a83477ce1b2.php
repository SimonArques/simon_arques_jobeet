<?php

/* :job:new.html.twig */
class __TwigTemplate_816da25d926eb1be96dcc543875ff342367492f4b920051774aff106b0ff6e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
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
        $__internal_078a70891ad684f43fea82b42a4a0a8a97b470f0fb7be93981bf0d3585190401 = $this->env->getExtension("native_profiler");
        $__internal_078a70891ad684f43fea82b42a4a0a8a97b470f0fb7be93981bf0d3585190401->enter($__internal_078a70891ad684f43fea82b42a4a0a8a97b470f0fb7be93981bf0d3585190401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078a70891ad684f43fea82b42a4a0a8a97b470f0fb7be93981bf0d3585190401->leave($__internal_078a70891ad684f43fea82b42a4a0a8a97b470f0fb7be93981bf0d3585190401_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f50bc82be0b501bc8c281e38d32aec3f987574c73d04c0c90d60fec479144bc = $this->env->getExtension("native_profiler");
        $__internal_5f50bc82be0b501bc8c281e38d32aec3f987574c73d04c0c90d60fec479144bc->enter($__internal_5f50bc82be0b501bc8c281e38d32aec3f987574c73d04c0c90d60fec479144bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f50bc82be0b501bc8c281e38d32aec3f987574c73d04c0c90d60fec479144bc->leave($__internal_5f50bc82be0b501bc8c281e38d32aec3f987574c73d04c0c90d60fec479144bc_prof);

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