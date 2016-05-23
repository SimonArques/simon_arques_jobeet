<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6305a0e51a99263d49c117651627c1b5dcbd555a6a07087561c28f7dae020105 extends Twig_Template
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
        $__internal_4079a18b615c4506d513df8a733d51e7ea21b42b947aa0030e1c8d286088350c = $this->env->getExtension("native_profiler");
        $__internal_4079a18b615c4506d513df8a733d51e7ea21b42b947aa0030e1c8d286088350c->enter($__internal_4079a18b615c4506d513df8a733d51e7ea21b42b947aa0030e1c8d286088350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4079a18b615c4506d513df8a733d51e7ea21b42b947aa0030e1c8d286088350c->leave($__internal_4079a18b615c4506d513df8a733d51e7ea21b42b947aa0030e1c8d286088350c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
