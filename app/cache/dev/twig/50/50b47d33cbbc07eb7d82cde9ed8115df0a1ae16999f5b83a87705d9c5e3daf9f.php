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
        $__internal_02672f6a2d62687cb0a2c91c7a005c9fe4ec280fa4b1c3fb7d21370519ea3edf = $this->env->getExtension("native_profiler");
        $__internal_02672f6a2d62687cb0a2c91c7a005c9fe4ec280fa4b1c3fb7d21370519ea3edf->enter($__internal_02672f6a2d62687cb0a2c91c7a005c9fe4ec280fa4b1c3fb7d21370519ea3edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_02672f6a2d62687cb0a2c91c7a005c9fe4ec280fa4b1c3fb7d21370519ea3edf->leave($__internal_02672f6a2d62687cb0a2c91c7a005c9fe4ec280fa4b1c3fb7d21370519ea3edf_prof);

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
