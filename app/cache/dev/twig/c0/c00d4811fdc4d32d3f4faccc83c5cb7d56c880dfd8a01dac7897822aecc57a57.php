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
        $__internal_a89b552520f5b3ffab464010cbea4260df613a6d1c29ea9af78b3933c6383d0a = $this->env->getExtension("native_profiler");
        $__internal_a89b552520f5b3ffab464010cbea4260df613a6d1c29ea9af78b3933c6383d0a->enter($__internal_a89b552520f5b3ffab464010cbea4260df613a6d1c29ea9af78b3933c6383d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a89b552520f5b3ffab464010cbea4260df613a6d1c29ea9af78b3933c6383d0a->leave($__internal_a89b552520f5b3ffab464010cbea4260df613a6d1c29ea9af78b3933c6383d0a_prof);

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
