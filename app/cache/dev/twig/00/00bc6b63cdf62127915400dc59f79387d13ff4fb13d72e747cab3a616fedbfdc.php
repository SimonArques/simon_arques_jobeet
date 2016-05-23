<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fec07a27f8f586670f36364d980b0cc121fc2137d45ba499d1459d9bad2f4f2d extends Twig_Template
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
        $__internal_b4184aa9e3cbc2e9457d1a471d721675a4675fe8dbc3b591e282692d5aed05a7 = $this->env->getExtension("native_profiler");
        $__internal_b4184aa9e3cbc2e9457d1a471d721675a4675fe8dbc3b591e282692d5aed05a7->enter($__internal_b4184aa9e3cbc2e9457d1a471d721675a4675fe8dbc3b591e282692d5aed05a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b4184aa9e3cbc2e9457d1a471d721675a4675fe8dbc3b591e282692d5aed05a7->leave($__internal_b4184aa9e3cbc2e9457d1a471d721675a4675fe8dbc3b591e282692d5aed05a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
