<?php

/* SonataAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_6141a5290d25cd5f95d8319dd38b7577 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false)) {
            // line 13
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">
        <span id=\"field_widget_";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\" >
            ";
            // line 15
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "
        </span>

        <span id=\"field_actions_";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "hasRoute", array("create", ), "method", false) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "isGranted", array("CREATE", ), "method", false))) {
                // line 20
                echo "                <a
                    href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "generateUrl", array("create", ), "method", false), "html");
                echo "\"
                    onclick=\"start_field_dialog_form_add_";
                // line 22
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                        <img
                            src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                echo "\"
                            alt=\"";
                // line 27
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                echo "\"
                        />
                </a>
            ";
            }
            // line 31
            echo "        </span>

        <div style=\"display: none\" id=\"field_dialog_";
            // line 33
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">
        </div>
    </div>

    ";
            // line 37
            $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
