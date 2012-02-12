<?php

/* SonataAdminBundle:CRUD:list_bigint.html.twig */
class __TwigTemplate_9801732c5370cd789f0bf06e039c394b extends Twig_Template
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
        return "SonataAdminBundle:CRUD:list_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
