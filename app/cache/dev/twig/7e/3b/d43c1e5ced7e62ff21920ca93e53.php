<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_7e3bd43c1e5ced7e62ff21920ca93e53 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if (($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("EDIT", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("edit", ), "method", false))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("edit", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
            echo "\" class=\"edit_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/page_white_edit.png"), "html");
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
