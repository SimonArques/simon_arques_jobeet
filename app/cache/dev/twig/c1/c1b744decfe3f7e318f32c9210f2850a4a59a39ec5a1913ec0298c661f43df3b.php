<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e1fd3dcf328f45276bcb2f6509978f0946e01c7be45d9f332dfc47d622dedd99 extends Twig_Template
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
        $__internal_04e1bdea3d72d0d4af90657a0791e77a942fc7d05bf38b2260580f15044d683e = $this->env->getExtension("native_profiler");
        $__internal_04e1bdea3d72d0d4af90657a0791e77a942fc7d05bf38b2260580f15044d683e->enter($__internal_04e1bdea3d72d0d4af90657a0791e77a942fc7d05bf38b2260580f15044d683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_04e1bdea3d72d0d4af90657a0791e77a942fc7d05bf38b2260580f15044d683e->leave($__internal_04e1bdea3d72d0d4af90657a0791e77a942fc7d05bf38b2260580f15044d683e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
