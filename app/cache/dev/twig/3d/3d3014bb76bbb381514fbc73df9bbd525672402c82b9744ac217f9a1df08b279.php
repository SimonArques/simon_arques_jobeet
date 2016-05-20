<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_70d53785b267d03b2bb23f6f06346bcfb2f8809f09b08722b64cab67d202b2ef extends Twig_Template
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
        $__internal_acad4da7285557241a8f5e129f72d434af735442565709927de271b74292f8ea = $this->env->getExtension("native_profiler");
        $__internal_acad4da7285557241a8f5e129f72d434af735442565709927de271b74292f8ea->enter($__internal_acad4da7285557241a8f5e129f72d434af735442565709927de271b74292f8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_acad4da7285557241a8f5e129f72d434af735442565709927de271b74292f8ea->leave($__internal_acad4da7285557241a8f5e129f72d434af735442565709927de271b74292f8ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
