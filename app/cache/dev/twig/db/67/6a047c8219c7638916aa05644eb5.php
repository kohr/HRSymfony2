<?php

/* SonataAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_db676a047c8219c7638916aa05644eb5 extends Twig_Template
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
        if ((($this->getAttribute($this->getContext($context, 'field_description'), "hasassociationadmin", array(), "any", false) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "hasRoute", array("edit", ), "method", false)) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "isGranted", array("edit", ), "method", false))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'value'));
            foreach ($context['_seq'] as $context['_key'] => $context['element']) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "generateUrl", array("edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "associationadmin", array(), "any", false), "id", array($this->getContext($context, 'element'), ), "method", false)), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'element'), $this->getContext($context, 'field_description'));
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'value'));
            foreach ($context['_seq'] as $context['_key'] => $context['element']) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'element'), $this->getContext($context, 'field_description'));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
