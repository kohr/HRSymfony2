<?php

/* LiipHelloBundle:Hello:facebook.html.twig */
class __TwigTemplate_8709534b05b4d0e05f34dfeaf3d11ab6 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("LiipHelloBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true));
        echo "

    ";
        // line 7
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "

    ";
        // line 9
        if ($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) {
            // line 10
            echo "
        | ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "fullName", array(), "any", false), "html");
            echo "

        | <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hello_facebook_logout"), "html");
            echo "\">logout</a>

    ";
        } else {
            // line 16
            echo "
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hello_facebook_check"), "html");
            echo "\">login</a>

    ";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "LiipHelloBundle:Hello:facebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
