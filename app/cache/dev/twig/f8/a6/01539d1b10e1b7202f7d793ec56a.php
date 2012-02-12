<?php

/* SonataAdminBundle:CRUD:list_smallint.html.twig */
class __TwigTemplate_f8a601539d1b10e1b7202f7d793ec56a extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:list_integer.html.twig");
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
        return "SonataAdminBundle:CRUD:list_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
