<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0e7f184676c29b44dd05456b5e99b195b019be2c1a846eeac445e8fd7172528b extends Twig_Template
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
        $__internal_bc180255812e83719b9420abc2ebe0fff131a0c26efd32d9310bb60708dbb0da = $this->env->getExtension("native_profiler");
        $__internal_bc180255812e83719b9420abc2ebe0fff131a0c26efd32d9310bb60708dbb0da->enter($__internal_bc180255812e83719b9420abc2ebe0fff131a0c26efd32d9310bb60708dbb0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bc180255812e83719b9420abc2ebe0fff131a0c26efd32d9310bb60708dbb0da->leave($__internal_bc180255812e83719b9420abc2ebe0fff131a0c26efd32d9310bb60708dbb0da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
