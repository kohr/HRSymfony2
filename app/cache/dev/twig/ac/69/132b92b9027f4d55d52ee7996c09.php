<?php

/* MrStartBundle:Admin:edituser.html.twig */
class __TwigTemplate_ac69132b92b9027f4d55d52ee7996c09 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
<input type=\"submit\" class=\"submit\" id=\"form_submit\" value=\"Save\" />
</form>

User Experiences";
    }

    public function getTemplateName()
    {
        return "MrStartBundle:Admin:edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
