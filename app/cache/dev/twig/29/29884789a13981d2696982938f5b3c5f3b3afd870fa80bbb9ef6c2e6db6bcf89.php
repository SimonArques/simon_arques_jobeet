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
        $__internal_c6b5f4ca85d362d3cb3262e6f7c90f72ac4e286badc98e41321a7863812cd81a = $this->env->getExtension("native_profiler");
        $__internal_c6b5f4ca85d362d3cb3262e6f7c90f72ac4e286badc98e41321a7863812cd81a->enter($__internal_c6b5f4ca85d362d3cb3262e6f7c90f72ac4e286badc98e41321a7863812cd81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c6b5f4ca85d362d3cb3262e6f7c90f72ac4e286badc98e41321a7863812cd81a->leave($__internal_c6b5f4ca85d362d3cb3262e6f7c90f72ac4e286badc98e41321a7863812cd81a_prof);

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
