<?php

/* SonataAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_08b55bd60f2d2a14950c349577b31a01 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "hasassociationadmin", array(), "any", false))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'value'), $this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false));
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "formfielddescriptions", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['field_description']) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "getChild", array($this->getAttribute($this->getContext($context, 'field_description'), "name", array(), "any", false), ), "method", false));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">

        ";
            // line 21
            if (($this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false) == "list")) {
                // line 22
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "\" >
                ";
                // line 23
                if ($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "admin", array(), "any", false), "id", array($this->getAttribute($this->getContext($context, 'sonata_admin'), "value", array(), "any", false), ), "method", false)) {
                    // line 24
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderAction("SonataAdminBundle:Helper:getShortObjectDescription", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "code", array(), "any", false), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "id", array($this->getAttribute($this->getContext($context, 'sonata_admin'), "value", array(), "any", false), ), "method", false), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "uniqid", array(), "any", false))));
                    // line 31
                    echo "                ";
                }
                // line 32
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 34
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
                echo "
            </span>
        ";
            } else {
                // line 37
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "\" >
                ";
                // line 38
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
                echo "
            </span>
        ";
            }
            // line 41
            echo "
        <span id=\"field_actions_";
            // line 42
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\" >

            ";
            // line 44
            if (((($this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "hasRoute", array("list", ), "method", false)) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "isGranted", array("LIST", ), "method", false))) {
                // line 45
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "generateUrl", array("list", ), "method", false), "html");
                echo "\"
                    onclick=\"start_field_dialog_form_list_";
                // line 46
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                    <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html");
                echo "\"
                         alt=\"";
                // line 50
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                echo "\"
                    />
                </a>
            ";
            }
            // line 54
            echo "
            ";
            // line 55
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "hasRoute", array("create", ), "method", false) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "isGranted", array("CREATE", ), "method", false))) {
                // line 56
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "generateUrl", array("create", ), "method", false), "html");
                echo "\"
                    onclick=\"start_field_dialog_form_add_";
                // line 57
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                        <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                echo "\" />
                </a>
            ";
            }
            // line 63
            echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 65
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">

        </div>
    </div>

    ";
            // line 70
            $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
