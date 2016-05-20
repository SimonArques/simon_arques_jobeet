<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3b84b58da164193eff407f638899f7451ab663bab5c8b2da91b8ae1bbb53dc29 extends Twig_Template
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
        $__internal_9d0c56acfdf4d04b0677d3f7e70200f7656a89b083f09d3a127afca616e29fa7 = $this->env->getExtension("native_profiler");
        $__internal_9d0c56acfdf4d04b0677d3f7e70200f7656a89b083f09d3a127afca616e29fa7->enter($__internal_9d0c56acfdf4d04b0677d3f7e70200f7656a89b083f09d3a127afca616e29fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9d0c56acfdf4d04b0677d3f7e70200f7656a89b083f09d3a127afca616e29fa7->leave($__internal_9d0c56acfdf4d04b0677d3f7e70200f7656a89b083f09d3a127afca616e29fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
