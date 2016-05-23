<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bf63daee2a8fb91b4cdd27340c21725ea4c960f1da28ead0399fbefc1cbe4431 extends Twig_Template
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
        $__internal_26b3f56adf8d925dd7011f9a0715f4e10fcba8a5402a330b00e43c2de85b9722 = $this->env->getExtension("native_profiler");
        $__internal_26b3f56adf8d925dd7011f9a0715f4e10fcba8a5402a330b00e43c2de85b9722->enter($__internal_26b3f56adf8d925dd7011f9a0715f4e10fcba8a5402a330b00e43c2de85b9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_26b3f56adf8d925dd7011f9a0715f4e10fcba8a5402a330b00e43c2de85b9722->leave($__internal_26b3f56adf8d925dd7011f9a0715f4e10fcba8a5402a330b00e43c2de85b9722_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
