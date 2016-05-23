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
        $__internal_c50c0ae24b6ba00dcee017762230c0763b6e7722ef368db223492418c95ae412 = $this->env->getExtension("native_profiler");
        $__internal_c50c0ae24b6ba00dcee017762230c0763b6e7722ef368db223492418c95ae412->enter($__internal_c50c0ae24b6ba00dcee017762230c0763b6e7722ef368db223492418c95ae412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c50c0ae24b6ba00dcee017762230c0763b6e7722ef368db223492418c95ae412->leave($__internal_c50c0ae24b6ba00dcee017762230c0763b6e7722ef368db223492418c95ae412_prof);

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
