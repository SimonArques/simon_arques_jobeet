<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6305a0e51a99263d49c117651627c1b5dcbd555a6a07087561c28f7dae020105 extends Twig_Template
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
        $__internal_79bec11ab40968cd8bc692424d890aac1349cbf7125b7fd5573b702c5fc134ad = $this->env->getExtension("native_profiler");
        $__internal_79bec11ab40968cd8bc692424d890aac1349cbf7125b7fd5573b702c5fc134ad->enter($__internal_79bec11ab40968cd8bc692424d890aac1349cbf7125b7fd5573b702c5fc134ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_79bec11ab40968cd8bc692424d890aac1349cbf7125b7fd5573b702c5fc134ad->leave($__internal_79bec11ab40968cd8bc692424d890aac1349cbf7125b7fd5573b702c5fc134ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
