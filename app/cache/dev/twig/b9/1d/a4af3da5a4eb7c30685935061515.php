<?php

/* LiipHelloBundle:Rest:getArticles.html.twig */
class __TwigTemplate_b91da4af3da5a4eb7c30685935061515 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'articles'));
        foreach ($context['_seq'] as $context['_key'] => $context['article']) {
            // line 6
            echo "
        <div>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
            echo " in html</a>,
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'), "_format" => "json")), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
            echo " in json</a> and
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'), "_format" => "xml")), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
            echo " in xml</a>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_article", array("article" => $this->getContext($context, 'article'))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
            echo " in the default format</a>,
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "
    <div><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles", array("_format" => "json")), "html");
        echo "\">list articles in json</a></div>
    <div><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles", array("_format" => "xml")), "html");
        echo "\">list articles in xml</a></div>
    <div><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_articles"), "html");
        echo "\">list articles in the default format</a></div>

    <div><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_hello_rest_get_new_articles", array("_format" => "html")), "html");
        echo "\">form to create a new article in html</a></div>

    Rendered with twig.

";
    }

    public function getTemplateName()
    {
        return "LiipHelloBundle:Rest:getArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
