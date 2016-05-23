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
        $__internal_56463fcc9f67ef18d5d6726673eea327f3efd5b954bde288d5d7b52fa3d3200a = $this->env->getExtension("native_profiler");
        $__internal_56463fcc9f67ef18d5d6726673eea327f3efd5b954bde288d5d7b52fa3d3200a->enter($__internal_56463fcc9f67ef18d5d6726673eea327f3efd5b954bde288d5d7b52fa3d3200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_56463fcc9f67ef18d5d6726673eea327f3efd5b954bde288d5d7b52fa3d3200a->leave($__internal_56463fcc9f67ef18d5d6726673eea327f3efd5b954bde288d5d7b52fa3d3200a_prof);

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
