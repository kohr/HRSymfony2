<?php

/* MrRestBundle:Hello:index.html.twig */
class __TwigTemplate_1dccc0066eba3c656819da7f68b55001 extends Twig_Template
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
    Hello ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!

    ";
        // line 7
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true));
        echo "

    ";
        // line 9
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "MrRestBundle:Hello:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
