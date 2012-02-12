<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_0d0ca96415a7d2a6a63107aac4ddd529 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->getContext($context, 'base_template');
            if (!$this->parent instanceof Twig_Template) {
                $this->parent = $this->env->loadTemplate($this->parent);
            }
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("create", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false))) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("list", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("LIST", ), "method", false))) {
            // line 21
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "        </ul>
    </div>
";
    }

    // line 27
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), "render", array(), "any", false);
        }
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
