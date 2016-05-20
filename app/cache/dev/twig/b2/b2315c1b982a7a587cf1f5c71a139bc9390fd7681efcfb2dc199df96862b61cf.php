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
        $__internal_48dae8864f39bc9b0553bbd3874ca79d9f1bcfff7ed2f88b6b2efc37f8e19576 = $this->env->getExtension("native_profiler");
        $__internal_48dae8864f39bc9b0553bbd3874ca79d9f1bcfff7ed2f88b6b2efc37f8e19576->enter($__internal_48dae8864f39bc9b0553bbd3874ca79d9f1bcfff7ed2f88b6b2efc37f8e19576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_48dae8864f39bc9b0553bbd3874ca79d9f1bcfff7ed2f88b6b2efc37f8e19576->leave($__internal_48dae8864f39bc9b0553bbd3874ca79d9f1bcfff7ed2f88b6b2efc37f8e19576_prof);

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
