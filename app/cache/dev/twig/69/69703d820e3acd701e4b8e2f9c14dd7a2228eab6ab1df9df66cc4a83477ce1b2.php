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
        $__internal_a27844f92a89bcb541edd048e33a46d61ba3e0f7c89d3d3e6d96073ee16cafba = $this->env->getExtension("native_profiler");
        $__internal_a27844f92a89bcb541edd048e33a46d61ba3e0f7c89d3d3e6d96073ee16cafba->enter($__internal_a27844f92a89bcb541edd048e33a46d61ba3e0f7c89d3d3e6d96073ee16cafba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27844f92a89bcb541edd048e33a46d61ba3e0f7c89d3d3e6d96073ee16cafba->leave($__internal_a27844f92a89bcb541edd048e33a46d61ba3e0f7c89d3d3e6d96073ee16cafba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c997e0f59f696fe7c82cd9322ca0284efd0292aa3682c88276c65e3bb686bf0c = $this->env->getExtension("native_profiler");
        $__internal_c997e0f59f696fe7c82cd9322ca0284efd0292aa3682c88276c65e3bb686bf0c->enter($__internal_c997e0f59f696fe7c82cd9322ca0284efd0292aa3682c88276c65e3bb686bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c997e0f59f696fe7c82cd9322ca0284efd0292aa3682c88276c65e3bb686bf0c->leave($__internal_c997e0f59f696fe7c82cd9322ca0284efd0292aa3682c88276c65e3bb686bf0c_prof);

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
