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
        $__internal_dbd4c4e0c363c8253084cfbd93cd822e3f855a7822749591c729e3fdfcd53e57 = $this->env->getExtension("native_profiler");
        $__internal_dbd4c4e0c363c8253084cfbd93cd822e3f855a7822749591c729e3fdfcd53e57->enter($__internal_dbd4c4e0c363c8253084cfbd93cd822e3f855a7822749591c729e3fdfcd53e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dbd4c4e0c363c8253084cfbd93cd822e3f855a7822749591c729e3fdfcd53e57->leave($__internal_dbd4c4e0c363c8253084cfbd93cd822e3f855a7822749591c729e3fdfcd53e57_prof);

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
