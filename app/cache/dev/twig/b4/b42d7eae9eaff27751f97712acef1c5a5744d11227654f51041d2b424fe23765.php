<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24964af2d2c66e6c4fd839ed8c30ba69480386efaabbe7fb962b9a0212c9ef66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f61a54111d66b2fb1d001c6d8ded7a23fdab2400f5c9c44768ad499fcb506a0e = $this->env->getExtension("native_profiler");
        $__internal_f61a54111d66b2fb1d001c6d8ded7a23fdab2400f5c9c44768ad499fcb506a0e->enter($__internal_f61a54111d66b2fb1d001c6d8ded7a23fdab2400f5c9c44768ad499fcb506a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f61a54111d66b2fb1d001c6d8ded7a23fdab2400f5c9c44768ad499fcb506a0e->leave($__internal_f61a54111d66b2fb1d001c6d8ded7a23fdab2400f5c9c44768ad499fcb506a0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a367ff736226136f5163a09838943409f5aaffcdd8d00718262a61966ff320b = $this->env->getExtension("native_profiler");
        $__internal_4a367ff736226136f5163a09838943409f5aaffcdd8d00718262a61966ff320b->enter($__internal_4a367ff736226136f5163a09838943409f5aaffcdd8d00718262a61966ff320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4a367ff736226136f5163a09838943409f5aaffcdd8d00718262a61966ff320b->leave($__internal_4a367ff736226136f5163a09838943409f5aaffcdd8d00718262a61966ff320b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43af0e95ed3678b1a21122d922a5918b03602d04047bcfe910cce21efba1a983 = $this->env->getExtension("native_profiler");
        $__internal_43af0e95ed3678b1a21122d922a5918b03602d04047bcfe910cce21efba1a983->enter($__internal_43af0e95ed3678b1a21122d922a5918b03602d04047bcfe910cce21efba1a983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_43af0e95ed3678b1a21122d922a5918b03602d04047bcfe910cce21efba1a983->leave($__internal_43af0e95ed3678b1a21122d922a5918b03602d04047bcfe910cce21efba1a983_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
