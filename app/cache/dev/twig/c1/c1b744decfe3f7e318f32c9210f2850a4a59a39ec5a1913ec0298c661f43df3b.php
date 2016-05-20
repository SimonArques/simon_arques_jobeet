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
        $__internal_5515148d70dc7ab3616f9474485a09959a17cee47a44596489ec5be81cc5ce73 = $this->env->getExtension("native_profiler");
        $__internal_5515148d70dc7ab3616f9474485a09959a17cee47a44596489ec5be81cc5ce73->enter($__internal_5515148d70dc7ab3616f9474485a09959a17cee47a44596489ec5be81cc5ce73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5515148d70dc7ab3616f9474485a09959a17cee47a44596489ec5be81cc5ce73->leave($__internal_5515148d70dc7ab3616f9474485a09959a17cee47a44596489ec5be81cc5ce73_prof);

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
