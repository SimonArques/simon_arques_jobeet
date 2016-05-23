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
        $__internal_11b36504dfb26bd184a76a1e2078c495f1a8f3f972fa77f460bb52603b4f53e8 = $this->env->getExtension("native_profiler");
        $__internal_11b36504dfb26bd184a76a1e2078c495f1a8f3f972fa77f460bb52603b4f53e8->enter($__internal_11b36504dfb26bd184a76a1e2078c495f1a8f3f972fa77f460bb52603b4f53e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11b36504dfb26bd184a76a1e2078c495f1a8f3f972fa77f460bb52603b4f53e8->leave($__internal_11b36504dfb26bd184a76a1e2078c495f1a8f3f972fa77f460bb52603b4f53e8_prof);

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
