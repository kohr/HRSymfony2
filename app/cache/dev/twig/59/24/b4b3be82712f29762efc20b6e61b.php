<?php

/* MrRestBundle:Rest:getArticle.html.twig */
class __TwigTemplate_5924b4b3be82712f29762efc20b6e61b extends Twig_Template
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
    <div>
        Hello ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
        echo "!
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'), "_format" => "json")), "html");
        echo "\">show this article in json</a>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'), "_format" => "xml")), "html");
        echo "\">show this article in xml</a>
    </div>

    <div><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles"), "html");
        echo "\">list articles in html</a></div>
    <div><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles", array("_format" => "json")), "html");
        echo "\">list articles in json</a></div>
    <div><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles", array("_format" => "xml")), "html");
        echo "\">list articles in xml</a></div>

    <div><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_new_articles", array("_format" => "html")), "html");
        echo "\">form to create a new article in html</a></div>

    Rendered with twig.

";
    }

    public function getTemplateName()
    {
        return "MrRestBundle:Rest:getArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
