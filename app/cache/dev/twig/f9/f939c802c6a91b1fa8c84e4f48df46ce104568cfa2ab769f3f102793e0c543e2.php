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
        $__internal_dce347e5e7b0542f56819f29ca7e880e2a057ceacf2288098c207b81db507111 = $this->env->getExtension("native_profiler");
        $__internal_dce347e5e7b0542f56819f29ca7e880e2a057ceacf2288098c207b81db507111->enter($__internal_dce347e5e7b0542f56819f29ca7e880e2a057ceacf2288098c207b81db507111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dce347e5e7b0542f56819f29ca7e880e2a057ceacf2288098c207b81db507111->leave($__internal_dce347e5e7b0542f56819f29ca7e880e2a057ceacf2288098c207b81db507111_prof);

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
