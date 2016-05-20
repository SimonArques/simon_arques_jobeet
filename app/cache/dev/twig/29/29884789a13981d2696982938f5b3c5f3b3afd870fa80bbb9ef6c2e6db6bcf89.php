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
        $__internal_f7780eb5bb000fd2af4a622f5bf0507273c339b0824ffb13abda7e05649e94cf = $this->env->getExtension("native_profiler");
        $__internal_f7780eb5bb000fd2af4a622f5bf0507273c339b0824ffb13abda7e05649e94cf->enter($__internal_f7780eb5bb000fd2af4a622f5bf0507273c339b0824ffb13abda7e05649e94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f7780eb5bb000fd2af4a622f5bf0507273c339b0824ffb13abda7e05649e94cf->leave($__internal_f7780eb5bb000fd2af4a622f5bf0507273c339b0824ffb13abda7e05649e94cf_prof);

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
