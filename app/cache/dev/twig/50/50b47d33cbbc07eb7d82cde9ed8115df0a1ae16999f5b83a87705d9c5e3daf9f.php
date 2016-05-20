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
        $__internal_36b5e0da6f7506ecb02b177e308ff3c2e9d2b49a5c56d928c58b20198b61a012 = $this->env->getExtension("native_profiler");
        $__internal_36b5e0da6f7506ecb02b177e308ff3c2e9d2b49a5c56d928c58b20198b61a012->enter($__internal_36b5e0da6f7506ecb02b177e308ff3c2e9d2b49a5c56d928c58b20198b61a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_36b5e0da6f7506ecb02b177e308ff3c2e9d2b49a5c56d928c58b20198b61a012->leave($__internal_36b5e0da6f7506ecb02b177e308ff3c2e9d2b49a5c56d928c58b20198b61a012_prof);

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
