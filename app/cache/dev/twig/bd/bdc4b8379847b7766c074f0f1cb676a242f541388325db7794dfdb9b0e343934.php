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
        $__internal_110730968d7c0401b439458d76d4e8bf8063b1bd07fa78155cd8c8568b4504f9 = $this->env->getExtension("native_profiler");
        $__internal_110730968d7c0401b439458d76d4e8bf8063b1bd07fa78155cd8c8568b4504f9->enter($__internal_110730968d7c0401b439458d76d4e8bf8063b1bd07fa78155cd8c8568b4504f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_110730968d7c0401b439458d76d4e8bf8063b1bd07fa78155cd8c8568b4504f9->leave($__internal_110730968d7c0401b439458d76d4e8bf8063b1bd07fa78155cd8c8568b4504f9_prof);

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
