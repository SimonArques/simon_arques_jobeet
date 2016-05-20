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
        $__internal_711c037ce56c97976130ddcd4cf9db1a44047faa92a842ee4ab1beda7a0d53d2 = $this->env->getExtension("native_profiler");
        $__internal_711c037ce56c97976130ddcd4cf9db1a44047faa92a842ee4ab1beda7a0d53d2->enter($__internal_711c037ce56c97976130ddcd4cf9db1a44047faa92a842ee4ab1beda7a0d53d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_711c037ce56c97976130ddcd4cf9db1a44047faa92a842ee4ab1beda7a0d53d2->leave($__internal_711c037ce56c97976130ddcd4cf9db1a44047faa92a842ee4ab1beda7a0d53d2_prof);

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
