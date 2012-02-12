<?php

/* MrRestBundle:Rest:getNewArticles.html.twig */
class __TwigTemplate_450bcb974b73de3ffbf749d34e2d83e3 extends Twig_Template
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
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_post_articles"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "

        <input type=\"submit\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "MrRestBundle:Rest:getNewArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
