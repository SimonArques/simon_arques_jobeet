<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d2c3b8954357171b253de686ebeb4d6bc625f007ad8feab93ebef5fbcaa9bd4a extends Twig_Template
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
        $__internal_d3e2871f90158e0bca377db6c08b40150647eb68671ecb1fbab44c0e8f8925d9 = $this->env->getExtension("native_profiler");
        $__internal_d3e2871f90158e0bca377db6c08b40150647eb68671ecb1fbab44c0e8f8925d9->enter($__internal_d3e2871f90158e0bca377db6c08b40150647eb68671ecb1fbab44c0e8f8925d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d3e2871f90158e0bca377db6c08b40150647eb68671ecb1fbab44c0e8f8925d9->leave($__internal_d3e2871f90158e0bca377db6c08b40150647eb68671ecb1fbab44c0e8f8925d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
