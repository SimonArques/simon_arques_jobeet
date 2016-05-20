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
        $__internal_70021c2309e752f5babd00b4ef44e28d780bc1bfa805d68416093bae540b0189 = $this->env->getExtension("native_profiler");
        $__internal_70021c2309e752f5babd00b4ef44e28d780bc1bfa805d68416093bae540b0189->enter($__internal_70021c2309e752f5babd00b4ef44e28d780bc1bfa805d68416093bae540b0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_70021c2309e752f5babd00b4ef44e28d780bc1bfa805d68416093bae540b0189->leave($__internal_70021c2309e752f5babd00b4ef44e28d780bc1bfa805d68416093bae540b0189_prof);

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
