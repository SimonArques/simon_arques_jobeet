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
        $__internal_335ebb9ea488eaf650558c27bef610b5626ed017837f7605c045b9648f459a21 = $this->env->getExtension("native_profiler");
        $__internal_335ebb9ea488eaf650558c27bef610b5626ed017837f7605c045b9648f459a21->enter($__internal_335ebb9ea488eaf650558c27bef610b5626ed017837f7605c045b9648f459a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_335ebb9ea488eaf650558c27bef610b5626ed017837f7605c045b9648f459a21->leave($__internal_335ebb9ea488eaf650558c27bef610b5626ed017837f7605c045b9648f459a21_prof);

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
