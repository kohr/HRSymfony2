<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d8103abc2604ddd17a780f297bf9f97f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo $this->env->getExtension('translator')->trans("registration.email", array("%username%" => $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false), "%confirmationUrl%" => $this->getContext($context, 'confirmationUrl')), "FOSUserBundle");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
