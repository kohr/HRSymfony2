<?php

/* SonataAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_39cc72d9313ab2f2bac5a9170e065ad3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "hasassociationadmin", array(), "any", false))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'value'));
            foreach ($context['_seq'] as $context['_key'] => $context['element']) {
                // line 13
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, 'element'), $this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 16
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">
        <span id=\"field_widget_";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\" >
            ";
            // line 18
            if (($this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false) == "inline")) {
                // line 19
                echo "                ";
                if (($this->getAttribute($this->getContext($context, 'sonata_admin'), "inline", array(), "any", false) == "table")) {
                    // line 20
                    echo "                    <table>
                        <tbody class=\"sonata-ba-tbody\">
                            ";
                    // line 22
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'form'), "children", array(), "any", false));
                    foreach ($context['_seq'] as $context['nested_group_field_name'] => $context['nested_group_field']) {
                        // line 23
                        echo "                                <tr>
                                    ";
                        // line 24
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'nested_group_field'), "children", array(), "any", false));
                        foreach ($context['_seq'] as $context['field_name'] => $context['nested_field']) {
                            // line 25
                            echo "                                        <td class=\"sonata-ba-td-";
                            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                            echo "-";
                            echo twig_escape_filter($this->env, $this->getContext($context, 'field_name'), "html");
                            echo "\">
                                            ";
                            // line 26
                            if ($this->getAttribute((($this->getAttribute((($this->getAttribute((($this->getAttribute(((array_key_exists("sonata_admin", $context)) ? (twig_default_filter($this->getContext($context, 'sonata_admin'))) : ("")), "field_description", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false))) : ("")), "associationadmin", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false))) : ("")), "formfielddescriptions", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "formfielddescriptions", array(), "any", false))) : ("")), $this->getContext($context, 'field_name'), array(), "array", true)) {
                                // line 27
                                echo "                                                ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'nested_field'));
                                echo "

                                                ";
                                // line 29
                                $context['dummy'] = $this->getAttribute($this->getContext($context, 'nested_group_field'), "setrendered", array(), "any", false);
                                // line 30
                                echo "                                            ";
                            } else {
                                // line 31
                                echo "                                                ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'nested_field'));
                                echo "
                                            ";
                            }
                            // line 33
                            echo "                                        </td>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 35
                        echo "                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 37
                    echo "                        </tbody>
                    </table>
                ";
                } else {
                    // line 40
                    echo "                    <div>
                        ";
                    // line 41
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'form'), "children", array(), "any", false));
                    foreach ($context['_seq'] as $context['nested_group_field_name'] => $context['nested_group_field']) {
                        // line 42
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'nested_group_field'), "children", array(), "any", false));
                        foreach ($context['_seq'] as $context['field_name'] => $context['nested_field']) {
                            // line 43
                            echo "                                ";
                            if ($this->getAttribute((($this->getAttribute((($this->getAttribute((($this->getAttribute(((array_key_exists("sonata_admin", $context)) ? (twig_default_filter($this->getContext($context, 'sonata_admin'))) : ("")), "field_description", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false))) : ("")), "associationadmin", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false))) : ("")), "formfielddescriptions", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "formfielddescriptions", array(), "any", false))) : ("")), $this->getContext($context, 'field_name'), array(), "array", true)) {
                                // line 44
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'nested_field'), array("inline" => "natural", "edit" => "inline"));
                                // line 47
                                echo "
                                    ";
                                // line 48
                                $context['dummy'] = $this->getAttribute($this->getContext($context, 'nested_group_field'), "setrendered", array(), "any", false);
                                // line 49
                                echo "                                ";
                            } else {
                                // line 50
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'nested_field'));
                                echo "
                                ";
                            }
                            // line 52
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 53
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 54
                    echo "                    </div>
                ";
                }
                // line 56
                echo "            ";
            } else {
                // line 57
                echo "                ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
                echo "
            ";
            }
            // line 59
            echo "
        </span>

        ";
            // line 62
            if (($this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false) == "inline")) {
                // line 63
                echo "
            ";
                // line 64
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "hasroute", array("create", ), "method", false) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "isGranted", array("CREATE", ), "method", false))) {
                    // line 65
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "\" >
                    <a
                        href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "generateUrl", array("create", ), "method", false), "html");
                    echo "\"
                        onclick=\"start_field_retrieve_";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "(event)\"
                        class=\"sonata-ba-action\"
                        >
                        <img
                            src=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                    echo "\"
                            alt=\"";
                    // line 73
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                </span>
            ";
                }
                // line 78
                echo "
            ";
                // line 80
                echo "            ";
                if ($this->getAttribute((($this->getAttribute((($this->getAttribute(((array_key_exists("sonata_admin", $context)) ? (twig_default_filter($this->getContext($context, 'sonata_admin'))) : ("")), "field_description", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "options", array(), "any", false))) : ("")), "sortable", array(), "any", true)) {
                    // line 81
                    echo "                <script>
                    jQuery('div#field_container_";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "
                    });

                    function apply_position_value_";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "-position').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "-position input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "();
                        jQuery('div#field_container_";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "();

                </script>
            ";
                }
                // line 113
                echo "
            ";
                // line 115
                echo "            ";
                $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 116
                echo "
        ";
            } else {
                // line 118
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "\" >
                ";
                // line 119
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "hasroute", array("create", ), "method", false) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "isGranted", array("CREATE", ), "method", false))) {
                    // line 120
                    echo "                    <a
                        href=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "associationadmin", array(), "any", false), "generateUrl", array("create", ), "method", false), "html");
                    echo "\"
                        onclick=\"start_field_dialog_form_add_";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                    echo "(event)\"
                        class=\"sonata-ba-action\"
                        >
                        <img
                            src=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                    echo "\"
                            alt=\"";
                    // line 127
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                ";
                }
                // line 131
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 133
                echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
                echo "\">

            </div>

            ";
                // line 137
                $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 138
                echo "        ";
            }
            // line 139
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
