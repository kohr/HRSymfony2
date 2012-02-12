<?php

/* LiipHelloBundle::vie.html.twig */
class __TwigTemplate_289aaf5ad647415113385ceb4cb29cfc extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"http://aloha-editor.org/aloha-0.9.3/aloha/aloha.js\"></script>
    <script src=\"http://aloha-editor.org/aloha-0.9.3/aloha/plugins/com.gentics.aloha.plugins.Format/plugin.js\"></script>
    <script src=\"http://aloha-editor.org/aloha-0.9.3/aloha/plugins/com.gentics.aloha.plugins.HighlightEditables/plugin.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/underscore-min.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/backbone-min.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/vie.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/vie-containermanager.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/vie-collectionmanager.js\"></script>
    <script src=\"/bundles/liipvie/js/vie/vie-aloha.js\"></script>

";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
    <h1>Vie Application</h1>

    <p>Click on the content below to edit it, then <button id=\"savebutton\">Save</button>.</p>

    ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "LiipHelloBundle::vie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
