<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_a5127b81071108cb2b1daed44f07e297 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<fb:login-button perms=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'permissions'), "html");
        echo "\" autologoutlink=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'autologoutlink'), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
        echo "</fb:login-button>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
