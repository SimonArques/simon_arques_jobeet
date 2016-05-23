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
        $__internal_941b85726df48c0c5dedf0265dc8356b9e08dba069875a6b12989b8d90e5fb1a = $this->env->getExtension("native_profiler");
        $__internal_941b85726df48c0c5dedf0265dc8356b9e08dba069875a6b12989b8d90e5fb1a->enter($__internal_941b85726df48c0c5dedf0265dc8356b9e08dba069875a6b12989b8d90e5fb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_941b85726df48c0c5dedf0265dc8356b9e08dba069875a6b12989b8d90e5fb1a->leave($__internal_941b85726df48c0c5dedf0265dc8356b9e08dba069875a6b12989b8d90e5fb1a_prof);

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
