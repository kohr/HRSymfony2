<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_3346d1651c8f634e739cc74c3a605559 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("edit", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("EDIT", ), "method", false))) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("edit", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_edit", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("create", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false))) {
            // line 22
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 24
        echo "        </ul>
    </div>
";
    }

    // line 28
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), "render", array(), "any", false);
    }

    // line 30
    public function block_show($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "showgroups", array(), "any", false));
        foreach ($context['_seq'] as $context['name'] => $context['view_group']) {
            // line 33
            echo "            <table>
                ";
            // line 34
            if ($this->getContext($context, 'name')) {
                // line 35
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'name'), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 41
            echo "
                ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'view_group'), "fields", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['field_name']) {
                // line 43
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 44
                if ($this->getAttribute((($this->getAttribute(((array_key_exists("admin", $context)) ? (twig_default_filter($this->getContext($context, 'admin'))) : ("")), "show", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'admin'), "show", array(), "any", false))) : ("")), $this->getContext($context, 'field_name'), array(), "array", true)) {
                    // line 45
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "show", array(), "any", false), $this->getContext($context, 'field_name'), array(), "array", false), $this->getContext($context, 'object'));
                    echo "
                        ";
                }
                // line 47
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 49
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
