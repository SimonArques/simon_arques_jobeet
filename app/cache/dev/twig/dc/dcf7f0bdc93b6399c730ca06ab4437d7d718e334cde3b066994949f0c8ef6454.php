<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d713604d401c19990e9a5cfc6512858758391e2137cb270d21935214e4bae46 extends Twig_Template
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
        $__internal_897ad41bf5bf665ad14f611ab647843b6c3a7845e4dcb6242118a264bc35d774 = $this->env->getExtension("native_profiler");
        $__internal_897ad41bf5bf665ad14f611ab647843b6c3a7845e4dcb6242118a264bc35d774->enter($__internal_897ad41bf5bf665ad14f611ab647843b6c3a7845e4dcb6242118a264bc35d774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_897ad41bf5bf665ad14f611ab647843b6c3a7845e4dcb6242118a264bc35d774->leave($__internal_897ad41bf5bf665ad14f611ab647843b6c3a7845e4dcb6242118a264bc35d774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
