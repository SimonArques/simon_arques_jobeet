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
        $__internal_0f735146b8142a84f86b1069fbdca69061a043420ea5bdca356d79497ff26459 = $this->env->getExtension("native_profiler");
        $__internal_0f735146b8142a84f86b1069fbdca69061a043420ea5bdca356d79497ff26459->enter($__internal_0f735146b8142a84f86b1069fbdca69061a043420ea5bdca356d79497ff26459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0f735146b8142a84f86b1069fbdca69061a043420ea5bdca356d79497ff26459->leave($__internal_0f735146b8142a84f86b1069fbdca69061a043420ea5bdca356d79497ff26459_prof);

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
