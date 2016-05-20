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
        $__internal_960c5a9b44563416b0fe158a5f603394dd845c4ea506d7b256a064531fd700df = $this->env->getExtension("native_profiler");
        $__internal_960c5a9b44563416b0fe158a5f603394dd845c4ea506d7b256a064531fd700df->enter($__internal_960c5a9b44563416b0fe158a5f603394dd845c4ea506d7b256a064531fd700df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_960c5a9b44563416b0fe158a5f603394dd845c4ea506d7b256a064531fd700df->leave($__internal_960c5a9b44563416b0fe158a5f603394dd845c4ea506d7b256a064531fd700df_prof);

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
