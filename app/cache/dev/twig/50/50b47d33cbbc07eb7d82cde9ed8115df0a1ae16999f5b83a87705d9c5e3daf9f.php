<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_50c7315e76711f327a55823bdba6b632797dab6c9d15f7284df42e3747135f31 extends Twig_Template
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
        $__internal_992a10084c5bbdb9043b51237b6d144c793abb5dc5756b76e416692c723983bb = $this->env->getExtension("native_profiler");
        $__internal_992a10084c5bbdb9043b51237b6d144c793abb5dc5756b76e416692c723983bb->enter($__internal_992a10084c5bbdb9043b51237b6d144c793abb5dc5756b76e416692c723983bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_992a10084c5bbdb9043b51237b6d144c793abb5dc5756b76e416692c723983bb->leave($__internal_992a10084c5bbdb9043b51237b6d144c793abb5dc5756b76e416692c723983bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
