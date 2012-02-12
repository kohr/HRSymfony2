<?php

/* SonataAdminBundle:CRUD:list__action_view.html.twig */
class __TwigTemplate_5e532325dc39a45f023da30727f99252 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("show", ), "method", false)) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("show", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
            echo "\" class=\"view_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_view", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/magnifier.png"), "html");
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_view", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
