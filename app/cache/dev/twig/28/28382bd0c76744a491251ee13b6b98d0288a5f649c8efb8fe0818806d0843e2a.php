<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_76d3f3fdb3ac50b73f45e696ea4647e60a55cc6767d7555dffe32fa0295db3e9 extends Twig_Template
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
        $__internal_e98dea3869415bdfbb9feefa4ab08ff11fb019dc5c1010a5190d34a7443da943 = $this->env->getExtension("native_profiler");
        $__internal_e98dea3869415bdfbb9feefa4ab08ff11fb019dc5c1010a5190d34a7443da943->enter($__internal_e98dea3869415bdfbb9feefa4ab08ff11fb019dc5c1010a5190d34a7443da943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e98dea3869415bdfbb9feefa4ab08ff11fb019dc5c1010a5190d34a7443da943->leave($__internal_e98dea3869415bdfbb9feefa4ab08ff11fb019dc5c1010a5190d34a7443da943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
