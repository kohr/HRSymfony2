<?php

/* LiipHelloBundle::layout.html.twig */
class __TwigTemplate_f95dda9d987e44da3e1a0d37d198e2c5 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false))), "html");
            echo "\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false)), "FOSUserBundle"), "html");
            echo "
            </a> |
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html");
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html");
            echo "
            </a>
        ";
        } else {
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html");
            echo "</a> |
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html");
            echo "</a>
        ";
        }
        // line 16
        echo "    </div>

    <h1>Hello Application</h1>

    <div>

    Choose theme:
    <form>
        <select id=\"cookie\" onChange=\"if (!this.value) { return false }; var now = new Date(); document.cookie = 'device='+this.value+''; expires=''+new Date(now.getTime() + 1000).toGMTString()+';'; window.location.reload();\">
            <option value=\"\">choose</option>
            <option value=\"desktop\">desktop</option>
            <option value=\"tablet\">tablet</option>
            <option value=\"phone\">phone</option>
        </select>
    </form>

    </div>
    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "LiipHelloBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
