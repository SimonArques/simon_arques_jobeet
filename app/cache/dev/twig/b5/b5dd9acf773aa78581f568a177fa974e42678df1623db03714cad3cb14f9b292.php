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
        $__internal_81ec3907130d6622774138fa88e660dd22469e9aaf5ffd2317331926ed58844c = $this->env->getExtension("native_profiler");
        $__internal_81ec3907130d6622774138fa88e660dd22469e9aaf5ffd2317331926ed58844c->enter($__internal_81ec3907130d6622774138fa88e660dd22469e9aaf5ffd2317331926ed58844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81ec3907130d6622774138fa88e660dd22469e9aaf5ffd2317331926ed58844c->leave($__internal_81ec3907130d6622774138fa88e660dd22469e9aaf5ffd2317331926ed58844c_prof);

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
