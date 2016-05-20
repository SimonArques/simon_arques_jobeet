<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f57f1c941a22b143c077e1b701aed33a977cde6e2b425ede79f6c690f8eb9673 extends Twig_Template
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
        $__internal_1de043d9c029ca397d738b416e1c33b94d970ceac01473b0bcb6142ea69a187b = $this->env->getExtension("native_profiler");
        $__internal_1de043d9c029ca397d738b416e1c33b94d970ceac01473b0bcb6142ea69a187b->enter($__internal_1de043d9c029ca397d738b416e1c33b94d970ceac01473b0bcb6142ea69a187b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1de043d9c029ca397d738b416e1c33b94d970ceac01473b0bcb6142ea69a187b->leave($__internal_1de043d9c029ca397d738b416e1c33b94d970ceac01473b0bcb6142ea69a187b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
