<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9f05ad2c2d8a37b8dd50208b185931d129b5eb90e8bf0ff1acae2bbf88f92881 extends Twig_Template
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
        $__internal_7c389e4f721914262d150391c30343576d412c127c2f0ed146f0089a0a3adb22 = $this->env->getExtension("native_profiler");
        $__internal_7c389e4f721914262d150391c30343576d412c127c2f0ed146f0089a0a3adb22->enter($__internal_7c389e4f721914262d150391c30343576d412c127c2f0ed146f0089a0a3adb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7c389e4f721914262d150391c30343576d412c127c2f0ed146f0089a0a3adb22->leave($__internal_7c389e4f721914262d150391c30343576d412c127c2f0ed146f0089a0a3adb22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
