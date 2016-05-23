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
        $__internal_55cbcac3171c1ccd4267cd38206c8b916a2f04a41d4f759207faa79c38ec5e19 = $this->env->getExtension("native_profiler");
        $__internal_55cbcac3171c1ccd4267cd38206c8b916a2f04a41d4f759207faa79c38ec5e19->enter($__internal_55cbcac3171c1ccd4267cd38206c8b916a2f04a41d4f759207faa79c38ec5e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_55cbcac3171c1ccd4267cd38206c8b916a2f04a41d4f759207faa79c38ec5e19->leave($__internal_55cbcac3171c1ccd4267cd38206c8b916a2f04a41d4f759207faa79c38ec5e19_prof);

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
