<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_61740da1063bab02ddb74603a6e10ce82bcae1139e8eec386d1d8a9efabdc503 extends Twig_Template
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
        $__internal_90b80f6f659681f89b20433bb7a1bdf40fefd03609fc240a90f954d76e7bed7b = $this->env->getExtension("native_profiler");
        $__internal_90b80f6f659681f89b20433bb7a1bdf40fefd03609fc240a90f954d76e7bed7b->enter($__internal_90b80f6f659681f89b20433bb7a1bdf40fefd03609fc240a90f954d76e7bed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_90b80f6f659681f89b20433bb7a1bdf40fefd03609fc240a90f954d76e7bed7b->leave($__internal_90b80f6f659681f89b20433bb7a1bdf40fefd03609fc240a90f954d76e7bed7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
