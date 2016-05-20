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
        $__internal_a4cf97b4082e48b5f6b28c144c759f77a79c70637152e01d2a5dc7b130fb15a5 = $this->env->getExtension("native_profiler");
        $__internal_a4cf97b4082e48b5f6b28c144c759f77a79c70637152e01d2a5dc7b130fb15a5->enter($__internal_a4cf97b4082e48b5f6b28c144c759f77a79c70637152e01d2a5dc7b130fb15a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a4cf97b4082e48b5f6b28c144c759f77a79c70637152e01d2a5dc7b130fb15a5->leave($__internal_a4cf97b4082e48b5f6b28c144c759f77a79c70637152e01d2a5dc7b130fb15a5_prof);

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
