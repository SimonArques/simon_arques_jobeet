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
        $__internal_68665d130dfa0952a13c517b7ebfcffb343828420644c198e56e0203f2e933a8 = $this->env->getExtension("native_profiler");
        $__internal_68665d130dfa0952a13c517b7ebfcffb343828420644c198e56e0203f2e933a8->enter($__internal_68665d130dfa0952a13c517b7ebfcffb343828420644c198e56e0203f2e933a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_68665d130dfa0952a13c517b7ebfcffb343828420644c198e56e0203f2e933a8->leave($__internal_68665d130dfa0952a13c517b7ebfcffb343828420644c198e56e0203f2e933a8_prof);

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
