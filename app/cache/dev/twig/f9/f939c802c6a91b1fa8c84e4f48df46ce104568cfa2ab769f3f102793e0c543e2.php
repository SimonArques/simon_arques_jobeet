<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3508e8b223eb917c8841018afe4b17bfac04981cbb9157e166c8e89e3d02d47b extends Twig_Template
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
        $__internal_65c5afe6ed592ddc0912b8c0a744771fd5a709b0b30b3a5c8a3c3b22feeae7ce = $this->env->getExtension("native_profiler");
        $__internal_65c5afe6ed592ddc0912b8c0a744771fd5a709b0b30b3a5c8a3c3b22feeae7ce->enter($__internal_65c5afe6ed592ddc0912b8c0a744771fd5a709b0b30b3a5c8a3c3b22feeae7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_65c5afe6ed592ddc0912b8c0a744771fd5a709b0b30b3a5c8a3c3b22feeae7ce->leave($__internal_65c5afe6ed592ddc0912b8c0a744771fd5a709b0b30b3a5c8a3c3b22feeae7ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
