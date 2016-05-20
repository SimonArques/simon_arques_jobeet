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
        $__internal_316145394edbcf48c96f322fab7766e7940895ee1290d12fa6e73176e0811afe = $this->env->getExtension("native_profiler");
        $__internal_316145394edbcf48c96f322fab7766e7940895ee1290d12fa6e73176e0811afe->enter($__internal_316145394edbcf48c96f322fab7766e7940895ee1290d12fa6e73176e0811afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_316145394edbcf48c96f322fab7766e7940895ee1290d12fa6e73176e0811afe->leave($__internal_316145394edbcf48c96f322fab7766e7940895ee1290d12fa6e73176e0811afe_prof);

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
