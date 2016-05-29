<?php

/* Job/edit.html.twig */
class __TwigTemplate_df789f2997df109ccdb2730fe9afc62dcb72c849446cf4b2abea30c5cf858ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsSimonBundle::layout.html.twig", "Job/edit.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsSimonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_576eece24eb9081e5dafcb72697cbd928df2188b952643e09c0008881e0e685b = $this->env->getExtension("native_profiler");
        $__internal_576eece24eb9081e5dafcb72697cbd928df2188b952643e09c0008881e0e685b->enter($__internal_576eece24eb9081e5dafcb72697cbd928df2188b952643e09c0008881e0e685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Job/edit.html.twig"));

        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576eece24eb9081e5dafcb72697cbd928df2188b952643e09c0008881e0e685b->leave($__internal_576eece24eb9081e5dafcb72697cbd928df2188b952643e09c0008881e0e685b_prof);

    }

    // line 7
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_22e19c0bfd72633889e8b3764a0ac66f0db07a7794c398092745e24e1faba86a = $this->env->getExtension("native_profiler");
        $__internal_22e19c0bfd72633889e8b3764a0ac66f0db07a7794c398092745e24e1faba86a->enter($__internal_22e19c0bfd72633889e8b3764a0ac66f0db07a7794c398092745e24e1faba86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 10
            echo "            <ul>
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ul>
        ";
        }
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_22e19c0bfd72633889e8b3764a0ac66f0db07a7794c398092745e24e1faba86a->leave($__internal_22e19c0bfd72633889e8b3764a0ac66f0db07a7794c398092745e24e1faba86a_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbadc6d718153cb0ae909b2353a44f28645c13ad600806cdd4eddbec2e323ff7 = $this->env->getExtension("native_profiler");
        $__internal_cbadc6d718153cb0ae909b2353a44f28645c13ad600806cdd4eddbec2e323ff7->enter($__internal_cbadc6d718153cb0ae909b2353a44f28645c13ad600806cdd4eddbec2e323ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enssimon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cbadc6d718153cb0ae909b2353a44f28645c13ad600806cdd4eddbec2e323ff7->leave($__internal_cbadc6d718153cb0ae909b2353a44f28645c13ad600806cdd4eddbec2e323ff7_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_fdb502a6f881f78fb82cbab842c28760ed4571103ca334a01af6cf5d5477d445 = $this->env->getExtension("native_profiler");
        $__internal_fdb502a6f881f78fb82cbab842c28760ed4571103ca334a01af6cf5d5477d445->enter($__internal_fdb502a6f881f78fb82cbab842c28760ed4571103ca334a01af6cf5d5477d445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <h1>Job edit</h1>
    <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_update", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <table id=\"job_form\">
            <tfoot>
            <tr>
                <td colspan=\"2\">
                    <input type=\"submit\" value=\"Preview your job\" />
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'errors');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'errors');
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'errors');
        echo "
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'errors');
        echo "
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'errors');
        echo "
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'widget');
        echo "
                    <br /> Whether the job can also be published on affiliate websites or not.
                </td>
            </tr>
            <tr>
                <th>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                </td>
            </tr>
            </tbody>
        </table>

        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
    </form>
";
        
        $__internal_fdb502a6f881f78fb82cbab842c28760ed4571103ca334a01af6cf5d5477d445->leave($__internal_fdb502a6f881f78fb82cbab842c28760ed4571103ca334a01af6cf5d5477d445_prof);

    }

    public function getTemplateName()
    {
        return "Job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 117,  294 => 111,  290 => 110,  285 => 108,  277 => 103,  273 => 102,  268 => 100,  261 => 96,  257 => 95,  252 => 93,  245 => 89,  241 => 88,  236 => 86,  229 => 82,  225 => 81,  220 => 79,  213 => 75,  209 => 74,  204 => 72,  197 => 68,  193 => 67,  188 => 65,  181 => 61,  177 => 60,  172 => 58,  165 => 54,  161 => 53,  156 => 51,  149 => 47,  145 => 46,  140 => 44,  133 => 40,  129 => 39,  124 => 37,  108 => 26,  105 => 25,  99 => 24,  90 => 21,  85 => 20,  79 => 19,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  11 => 1,);
    }
}
/* {% extends 'EnsSimonBundle::layout.html.twig' %}*/
/* */
/* */
/* */
/* {% form_theme edit_form _self %}*/
/* */
/* {% block field_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             <ul>*/
/*                 {% for error in errors %}*/
/*                     <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock field_errors %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/enssimon/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Job edit</h1>*/
/*     <form action="{{ path('job_update', { 'token': job.token }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <table id="job_form">*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <input type="submit" value="Preview your job" />*/
/*                 </td>*/
/*             </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.category) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.category) }}*/
/*                     {{ form_widget(edit_form.category) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.type) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.type) }}*/
/*                     {{ form_widget(edit_form.type) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.company) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.company) }}*/
/*                     {{ form_widget(edit_form.company) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.file) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.file) }}*/
/*                     {{ form_widget(edit_form.file) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.url) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.url) }}*/
/*                     {{ form_widget(edit_form.url) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.position) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.position) }}*/
/*                     {{ form_widget(edit_form.position) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.location) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.location) }}*/
/*                     {{ form_widget(edit_form.location) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.description) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.description) }}*/
/*                     {{ form_widget(edit_form.description) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.how_to_apply) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.how_to_apply) }}*/
/*                     {{ form_widget(edit_form.how_to_apply) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.is_public) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.is_public) }}*/
/*                     {{ form_widget(edit_form.is_public) }}*/
/*                     <br /> Whether the job can also be published on affiliate websites or not.*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.email) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.email) }}*/
/*                     {{ form_widget(edit_form.email) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         {{ form_rest(edit_form) }}*/
/*     </form>*/
/* {% endblock %}*/
/* */
