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
        $__internal_b69d080308bdfb0a375a31a98e6527d0a90ab19159337f318233694e82742b6a = $this->env->getExtension("native_profiler");
        $__internal_b69d080308bdfb0a375a31a98e6527d0a90ab19159337f318233694e82742b6a->enter($__internal_b69d080308bdfb0a375a31a98e6527d0a90ab19159337f318233694e82742b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b69d080308bdfb0a375a31a98e6527d0a90ab19159337f318233694e82742b6a->leave($__internal_b69d080308bdfb0a375a31a98e6527d0a90ab19159337f318233694e82742b6a_prof);

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
