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
        $__internal_34843242218dfddc2aa97bd12158aa1a731144e904bc5e3aaba918deb8a7b89c = $this->env->getExtension("native_profiler");
        $__internal_34843242218dfddc2aa97bd12158aa1a731144e904bc5e3aaba918deb8a7b89c->enter($__internal_34843242218dfddc2aa97bd12158aa1a731144e904bc5e3aaba918deb8a7b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_34843242218dfddc2aa97bd12158aa1a731144e904bc5e3aaba918deb8a7b89c->leave($__internal_34843242218dfddc2aa97bd12158aa1a731144e904bc5e3aaba918deb8a7b89c_prof);

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
