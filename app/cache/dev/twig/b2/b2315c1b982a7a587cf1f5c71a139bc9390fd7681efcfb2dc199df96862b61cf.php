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
        $__internal_3bb9a064f70d04d3ae69cc7a4e9d11aae6a50b6d302a0a52f5669fbd69b3c394 = $this->env->getExtension("native_profiler");
        $__internal_3bb9a064f70d04d3ae69cc7a4e9d11aae6a50b6d302a0a52f5669fbd69b3c394->enter($__internal_3bb9a064f70d04d3ae69cc7a4e9d11aae6a50b6d302a0a52f5669fbd69b3c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3bb9a064f70d04d3ae69cc7a4e9d11aae6a50b6d302a0a52f5669fbd69b3c394->leave($__internal_3bb9a064f70d04d3ae69cc7a4e9d11aae6a50b6d302a0a52f5669fbd69b3c394_prof);

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
