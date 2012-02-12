<?php

/* MrRestBundle:Rest:postArticles.html.twig */
class __TwigTemplate_e27121560e0b4151c6f968f2b7b4089d extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("LiipHelloBundle:Rest:getNewArticles.html.twig");
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
        echo "    Failure!

    ";
        // line 6
        echo $this->renderParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MrRestBundle:Rest:postArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
