<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_4f8dd319718726034502132d4440bd18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'value' => array($this, 'block_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('value', $context, $blocks);
        echo "</td>";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field_description'), "name", array(), "any", false), "html");
    }

    // line 13
    public function block_value($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
