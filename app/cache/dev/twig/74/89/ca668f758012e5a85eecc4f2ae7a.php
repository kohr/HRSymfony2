<?php

/* SonataAdminBundle:CRUD:list_text.html.twig */
class __TwigTemplate_7489ca668f758012e5a85eecc4f2ae7a extends Twig_Template
{
    protected $parent;

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

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
