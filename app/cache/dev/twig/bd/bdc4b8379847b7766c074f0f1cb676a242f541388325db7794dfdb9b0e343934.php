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
        $__internal_b2b441561de85929be50e73de1cd2bc85e5c907f3e5da850972f07f0097efc34 = $this->env->getExtension("native_profiler");
        $__internal_b2b441561de85929be50e73de1cd2bc85e5c907f3e5da850972f07f0097efc34->enter($__internal_b2b441561de85929be50e73de1cd2bc85e5c907f3e5da850972f07f0097efc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b2b441561de85929be50e73de1cd2bc85e5c907f3e5da850972f07f0097efc34->leave($__internal_b2b441561de85929be50e73de1cd2bc85e5c907f3e5da850972f07f0097efc34_prof);

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
