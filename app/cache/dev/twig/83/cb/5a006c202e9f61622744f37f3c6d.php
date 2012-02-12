<?php

/* MrRestBundle:Extra:index.html.twig */
class __TwigTemplate_83cb5a006c202e9f61622744f37f3c6d extends Twig_Template
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
    <div>Hello ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!</div>

    Rendered with twig.

";
    }

    public function getTemplateName()
    {
        return "MrRestBundle:Extra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
