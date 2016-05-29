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
        $__internal_8c26f85d459c922abe3ad22027111c1fa4dce5e970364529674f41682f9f5e02 = $this->env->getExtension("native_profiler");
        $__internal_8c26f85d459c922abe3ad22027111c1fa4dce5e970364529674f41682f9f5e02->enter($__internal_8c26f85d459c922abe3ad22027111c1fa4dce5e970364529674f41682f9f5e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8c26f85d459c922abe3ad22027111c1fa4dce5e970364529674f41682f9f5e02->leave($__internal_8c26f85d459c922abe3ad22027111c1fa4dce5e970364529674f41682f9f5e02_prof);

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
