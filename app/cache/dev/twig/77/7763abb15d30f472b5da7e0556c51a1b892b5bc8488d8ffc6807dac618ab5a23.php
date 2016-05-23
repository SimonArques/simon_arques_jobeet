<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d7b7962c27c20c33140b67f45c2cf5a559a88ffeff8855d6f76406574241f47b extends Twig_Template
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
        $__internal_d6a57fd7fe9c8fc744e99e068e632049874db9563d0134702ee670d2d6731f1c = $this->env->getExtension("native_profiler");
        $__internal_d6a57fd7fe9c8fc744e99e068e632049874db9563d0134702ee670d2d6731f1c->enter($__internal_d6a57fd7fe9c8fc744e99e068e632049874db9563d0134702ee670d2d6731f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d6a57fd7fe9c8fc744e99e068e632049874db9563d0134702ee670d2d6731f1c->leave($__internal_d6a57fd7fe9c8fc744e99e068e632049874db9563d0134702ee670d2d6731f1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'submit')) ?>*/
/* */
