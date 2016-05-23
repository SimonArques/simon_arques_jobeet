<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3eb08c82d20102389ad23d590008113399c2f1b9c8014508d6dae2b667e3db6c extends Twig_Template
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
        $__internal_74f908db810a42b98e9161ba1b23beda6fa70ad3d424b149a35e4aad7a49b964 = $this->env->getExtension("native_profiler");
        $__internal_74f908db810a42b98e9161ba1b23beda6fa70ad3d424b149a35e4aad7a49b964->enter($__internal_74f908db810a42b98e9161ba1b23beda6fa70ad3d424b149a35e4aad7a49b964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74f908db810a42b98e9161ba1b23beda6fa70ad3d424b149a35e4aad7a49b964->leave($__internal_74f908db810a42b98e9161ba1b23beda6fa70ad3d424b149a35e4aad7a49b964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
