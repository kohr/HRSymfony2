<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_12d95c4c730d2ff3efff4c1076b61fd3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'group'), "getName", array(), "method", false), "html");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
