<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d713604d401c19990e9a5cfc6512858758391e2137cb270d21935214e4bae46 extends Twig_Template
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
        $__internal_956e37f6c1df5cf3a24ef668e77cf73e8a016252556f91f46397a987c5a2afd5 = $this->env->getExtension("native_profiler");
        $__internal_956e37f6c1df5cf3a24ef668e77cf73e8a016252556f91f46397a987c5a2afd5->enter($__internal_956e37f6c1df5cf3a24ef668e77cf73e8a016252556f91f46397a987c5a2afd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_956e37f6c1df5cf3a24ef668e77cf73e8a016252556f91f46397a987c5a2afd5->leave($__internal_956e37f6c1df5cf3a24ef668e77cf73e8a016252556f91f46397a987c5a2afd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
