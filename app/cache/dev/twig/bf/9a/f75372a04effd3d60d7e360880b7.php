<?php

/* SonataAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_bf9af75372a04effd3d60d7e360880b7 extends Twig_Template
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
        // line 15
        echo "    ";
        if ($this->getContext($context, 'value')) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getContext($context, 'field_description'), "hasAssociationAdmin", array(), "any", false) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "hasRoute", array("edit", ), "method", false)) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "isGranted", array("EDIT", ), "method", false))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "generateUrl", array("edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "id", array($this->getContext($context, 'value'), ), "method", false)), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'value'), $this->getContext($context, 'field_description'));
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'value'), $this->getContext($context, 'field_description'));
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
