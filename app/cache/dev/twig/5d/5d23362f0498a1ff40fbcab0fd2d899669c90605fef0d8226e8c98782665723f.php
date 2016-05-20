<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6317ead908d483206d2eea502970c58e71d0afef34e17ee4da29a4f21eea985f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14814b2dd84c487532d072784f58ced3d16ea985725d09ba02a2ec1fa488a868 = $this->env->getExtension("native_profiler");
        $__internal_14814b2dd84c487532d072784f58ced3d16ea985725d09ba02a2ec1fa488a868->enter($__internal_14814b2dd84c487532d072784f58ced3d16ea985725d09ba02a2ec1fa488a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14814b2dd84c487532d072784f58ced3d16ea985725d09ba02a2ec1fa488a868->leave($__internal_14814b2dd84c487532d072784f58ced3d16ea985725d09ba02a2ec1fa488a868_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29c6575e348f948e9b6f00b0c360752733dfb37c7aecca126bd340d1a81def35 = $this->env->getExtension("native_profiler");
        $__internal_29c6575e348f948e9b6f00b0c360752733dfb37c7aecca126bd340d1a81def35->enter($__internal_29c6575e348f948e9b6f00b0c360752733dfb37c7aecca126bd340d1a81def35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29c6575e348f948e9b6f00b0c360752733dfb37c7aecca126bd340d1a81def35->leave($__internal_29c6575e348f948e9b6f00b0c360752733dfb37c7aecca126bd340d1a81def35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e266d0d52ffa89bc7508c86bd244bed01e5cceb12d44bc475dd87d7ee503eb1 = $this->env->getExtension("native_profiler");
        $__internal_6e266d0d52ffa89bc7508c86bd244bed01e5cceb12d44bc475dd87d7ee503eb1->enter($__internal_6e266d0d52ffa89bc7508c86bd244bed01e5cceb12d44bc475dd87d7ee503eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e266d0d52ffa89bc7508c86bd244bed01e5cceb12d44bc475dd87d7ee503eb1->leave($__internal_6e266d0d52ffa89bc7508c86bd244bed01e5cceb12d44bc475dd87d7ee503eb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_872068bc2d2253d1bddfb0a9c9d280d6992710422cb842c92a936fbc514c99ca = $this->env->getExtension("native_profiler");
        $__internal_872068bc2d2253d1bddfb0a9c9d280d6992710422cb842c92a936fbc514c99ca->enter($__internal_872068bc2d2253d1bddfb0a9c9d280d6992710422cb842c92a936fbc514c99ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_872068bc2d2253d1bddfb0a9c9d280d6992710422cb842c92a936fbc514c99ca->leave($__internal_872068bc2d2253d1bddfb0a9c9d280d6992710422cb842c92a936fbc514c99ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
