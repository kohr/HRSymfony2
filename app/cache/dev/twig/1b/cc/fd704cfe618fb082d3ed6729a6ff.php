<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_1bccfd704cfe618fb082d3ed6729a6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field_description'), "type", array(), "any", false), "html");
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false), "html");
        echo "\">
    ";
        // line 13
        if (($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "identifier", array(), "any", true) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array(array(0 => "EDIT", 1 => "SHOW"), ), "method", false))) {
            // line 14
            echo "
        ";
            // line 15
            if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("edit", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("EDIT", ), "method", false))) {
                // line 16
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("edit", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
                echo "\">
        ";
            } elseif ($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("show", ), "method", false)) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("show", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
                echo "\">
        ";
            }
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('field', $context, $blocks);
            // line 22
            echo "        </a>

    ";
        } else {
            // line 25
            echo "        ";
            $this->displayBlock('field', $context, $blocks);
            echo "
    ";
        }
        // line 27
        echo "</td>";
    }

    // line 21
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
