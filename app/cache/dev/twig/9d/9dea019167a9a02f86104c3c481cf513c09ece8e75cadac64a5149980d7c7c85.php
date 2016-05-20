<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ab9e52dcf114bd80f372602589a8141223922fd020ddc8e22944b55bc39a65ee extends Twig_Template
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
        $__internal_0115b4960c7d5807e3f1fbe505ce50509f2f90196e1574d92be66e1e45045cda = $this->env->getExtension("native_profiler");
        $__internal_0115b4960c7d5807e3f1fbe505ce50509f2f90196e1574d92be66e1e45045cda->enter($__internal_0115b4960c7d5807e3f1fbe505ce50509f2f90196e1574d92be66e1e45045cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0115b4960c7d5807e3f1fbe505ce50509f2f90196e1574d92be66e1e45045cda->leave($__internal_0115b4960c7d5807e3f1fbe505ce50509f2f90196e1574d92be66e1e45045cda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
