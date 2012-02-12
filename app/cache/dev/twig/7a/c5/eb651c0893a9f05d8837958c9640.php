<?php

/* SonataAdminBundle:CRUD:filter_checkbox.html.twig */
class __TwigTemplate_7ac5eb651c0893a9f05d8837958c9640 extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_filter_field.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:filter_checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
