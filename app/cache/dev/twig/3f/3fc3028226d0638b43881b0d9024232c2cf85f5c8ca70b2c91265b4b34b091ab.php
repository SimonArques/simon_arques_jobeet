<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d7e5cf6037127d7d775c7295850ca912bb84780f7f520bcc1fd59175102b4d0 extends Twig_Template
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
        $__internal_5233e97a0240a74538a452ca2186272796d4f62465e5c95c874e94953317c31c = $this->env->getExtension("native_profiler");
        $__internal_5233e97a0240a74538a452ca2186272796d4f62465e5c95c874e94953317c31c->enter($__internal_5233e97a0240a74538a452ca2186272796d4f62465e5c95c874e94953317c31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5233e97a0240a74538a452ca2186272796d4f62465e5c95c874e94953317c31c->leave($__internal_5233e97a0240a74538a452ca2186272796d4f62465e5c95c874e94953317c31c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
