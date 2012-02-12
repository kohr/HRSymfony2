<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_64022ea5577e87e2620f3593f0c60b9e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if (($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("DELETE", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("delete", ), "method", false))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("delete", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
            echo "\" class=\"delete_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/delete.png"), "html");
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
