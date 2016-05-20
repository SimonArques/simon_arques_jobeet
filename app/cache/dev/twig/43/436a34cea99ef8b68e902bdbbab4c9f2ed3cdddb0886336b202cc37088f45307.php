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
        $__internal_9b79ca2741987d82b5f3531d75055406ae41d726086da3da62e683cbda0c5816 = $this->env->getExtension("native_profiler");
        $__internal_9b79ca2741987d82b5f3531d75055406ae41d726086da3da62e683cbda0c5816->enter($__internal_9b79ca2741987d82b5f3531d75055406ae41d726086da3da62e683cbda0c5816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9b79ca2741987d82b5f3531d75055406ae41d726086da3da62e683cbda0c5816->leave($__internal_9b79ca2741987d82b5f3531d75055406ae41d726086da3da62e683cbda0c5816_prof);

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
