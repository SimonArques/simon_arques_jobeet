<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e7877814ea22566f27603b7e1fe60ba11f2c4960767c48117bf96ddc484e0328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87982a9d99a4fe3c8f61b632e82ece76416ea3e2e12648e079ad00a2088f3d4f = $this->env->getExtension("native_profiler");
        $__internal_87982a9d99a4fe3c8f61b632e82ece76416ea3e2e12648e079ad00a2088f3d4f->enter($__internal_87982a9d99a4fe3c8f61b632e82ece76416ea3e2e12648e079ad00a2088f3d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_87982a9d99a4fe3c8f61b632e82ece76416ea3e2e12648e079ad00a2088f3d4f->leave($__internal_87982a9d99a4fe3c8f61b632e82ece76416ea3e2e12648e079ad00a2088f3d4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
