<?php

/* SonataAdminBundle:CRUD:list_decimal.html.twig */
class __TwigTemplate_d9912c87d258001e0bebbcc17482bb75 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
