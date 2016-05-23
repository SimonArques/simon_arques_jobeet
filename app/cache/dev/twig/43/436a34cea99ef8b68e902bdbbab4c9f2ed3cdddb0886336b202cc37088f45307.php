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
        $__internal_86f0f99d5d6cf307d22a454b082e1ef0108e9401ab98ed3baeb582272af14f2f = $this->env->getExtension("native_profiler");
        $__internal_86f0f99d5d6cf307d22a454b082e1ef0108e9401ab98ed3baeb582272af14f2f->enter($__internal_86f0f99d5d6cf307d22a454b082e1ef0108e9401ab98ed3baeb582272af14f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_86f0f99d5d6cf307d22a454b082e1ef0108e9401ab98ed3baeb582272af14f2f->leave($__internal_86f0f99d5d6cf307d22a454b082e1ef0108e9401ab98ed3baeb582272af14f2f_prof);

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
