<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_99521a48c58cf02fcb3a64c06a54aeb2f89331b574fe31a028e0196d0ed52576 extends Twig_Template
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
        $__internal_0ccdfccbcfd695be945d90e379823c06e44d06b5548b12260ce70c1cbf5c669b = $this->env->getExtension("native_profiler");
        $__internal_0ccdfccbcfd695be945d90e379823c06e44d06b5548b12260ce70c1cbf5c669b->enter($__internal_0ccdfccbcfd695be945d90e379823c06e44d06b5548b12260ce70c1cbf5c669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0ccdfccbcfd695be945d90e379823c06e44d06b5548b12260ce70c1cbf5c669b->leave($__internal_0ccdfccbcfd695be945d90e379823c06e44d06b5548b12260ce70c1cbf5c669b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
