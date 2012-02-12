<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_acc0acd636cc3bab29905a3c807cb7dd extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'value' => array($this, 'block_value'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_value($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getContext($context, 'value'), "F j, Y"), "html");
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
