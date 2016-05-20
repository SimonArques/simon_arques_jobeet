<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3eb08c82d20102389ad23d590008113399c2f1b9c8014508d6dae2b667e3db6c extends Twig_Template
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
        $__internal_1a50cff47d62cf98a26c65ae5a547ba2945d0db4ab7219c06c6768faccd92b49 = $this->env->getExtension("native_profiler");
        $__internal_1a50cff47d62cf98a26c65ae5a547ba2945d0db4ab7219c06c6768faccd92b49->enter($__internal_1a50cff47d62cf98a26c65ae5a547ba2945d0db4ab7219c06c6768faccd92b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1a50cff47d62cf98a26c65ae5a547ba2945d0db4ab7219c06c6768faccd92b49->leave($__internal_1a50cff47d62cf98a26c65ae5a547ba2945d0db4ab7219c06c6768faccd92b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
