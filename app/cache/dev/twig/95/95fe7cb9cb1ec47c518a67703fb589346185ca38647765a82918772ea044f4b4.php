<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cea4b0fe5794da66b39ba817bc3d7c028a0c45924ec581a287db9e578e97626c extends Twig_Template
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
        $__internal_9446681b303585537907a1804a60f38089259542b5462de9f4771abae1998b8a = $this->env->getExtension("native_profiler");
        $__internal_9446681b303585537907a1804a60f38089259542b5462de9f4771abae1998b8a->enter($__internal_9446681b303585537907a1804a60f38089259542b5462de9f4771abae1998b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9446681b303585537907a1804a60f38089259542b5462de9f4771abae1998b8a->leave($__internal_9446681b303585537907a1804a60f38089259542b5462de9f4771abae1998b8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
