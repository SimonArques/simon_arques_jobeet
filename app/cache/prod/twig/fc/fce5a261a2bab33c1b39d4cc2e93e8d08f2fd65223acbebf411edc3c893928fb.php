<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f3d181d611ca36317e898bf148ef00bb7da76f1b0f9d0307c6798e9a75c4f58b extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
