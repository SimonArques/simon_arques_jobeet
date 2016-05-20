<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9ca9081e9167f9a6e12cb67b81a97d2dcbbc907c321c544716f3612999cef39a extends Twig_Template
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
        $__internal_fa1078d3532b7626dee70d8cee2e1246501c4080593420cb38345bee51a5f28a = $this->env->getExtension("native_profiler");
        $__internal_fa1078d3532b7626dee70d8cee2e1246501c4080593420cb38345bee51a5f28a->enter($__internal_fa1078d3532b7626dee70d8cee2e1246501c4080593420cb38345bee51a5f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fa1078d3532b7626dee70d8cee2e1246501c4080593420cb38345bee51a5f28a->leave($__internal_fa1078d3532b7626dee70d8cee2e1246501c4080593420cb38345bee51a5f28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
