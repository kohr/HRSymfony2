<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_9545a87f6bbb32295a3f95a00d41da09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_element'), "vars", array(), "any", false), "id", array(), "any", false), "html");
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, 'edit'), "html");
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, 'inline'), "html");
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_element'), "vars", array(), "any", false), "errors", array(), "any", false))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, 'inline') == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'), $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "name", array(), "any", false));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'));
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'field_element'));
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'field_element'));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
