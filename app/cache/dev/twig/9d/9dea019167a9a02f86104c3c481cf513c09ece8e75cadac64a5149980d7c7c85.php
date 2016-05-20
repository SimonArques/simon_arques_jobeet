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
        $__internal_04d4fa93a8b2ce45dde53f8f004205ce92265a5cce42745cc79de81f10ab4fc0 = $this->env->getExtension("native_profiler");
        $__internal_04d4fa93a8b2ce45dde53f8f004205ce92265a5cce42745cc79de81f10ab4fc0->enter($__internal_04d4fa93a8b2ce45dde53f8f004205ce92265a5cce42745cc79de81f10ab4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_04d4fa93a8b2ce45dde53f8f004205ce92265a5cce42745cc79de81f10ab4fc0->leave($__internal_04d4fa93a8b2ce45dde53f8f004205ce92265a5cce42745cc79de81f10ab4fc0_prof);

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
