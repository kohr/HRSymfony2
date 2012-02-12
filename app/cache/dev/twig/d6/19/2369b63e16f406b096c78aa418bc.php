<?php

/* SonataAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_d6192369b63e16f406b096c78aa418bc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<script>

    <!-- edit one association -->

    // handle the add link
    var field_add_";
        // line 26
        echo $this->getContext($context, 'id');
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "admin", array(), "any", false), "root", array(), "any", false), "code", array(), "any", false), "elementId" => $this->getContext($context, 'id'), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "admin", array(), "any", false), "root", array(), "any", false), "id", array($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "admin", array(), "any", false), "root", array(), "any", false), "subject", array(), "any", false), ), "method", false), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "admin", array(), "any", false), "root", array(), "any", false), "uniqid", array(), "any", false)));
        // line 40
        echo "',
            type: \"POST\",
            data: { _xml_http_request: true },
            success: function(html) {
                jQuery('#field_container_";
        // line 44
        echo $this->getContext($context, 'id');
        echo "')
                    .replaceWith(html) // replace the html
                    .trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 53
        echo $this->getContext($context, 'id');
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 57
        echo $this->getContext($context, 'id');
        echo "(event) {
        event.preventDefault();

        // remove the html event a
        var a = jQuery(event.target).closest('a');
        a.attr('onclick', '');

        // initialize component
        field_widget_";
        // line 65
        echo $this->getContext($context, 'id');
        echo " = jQuery(\"#field_widget_";
        echo $this->getContext($context, 'id');
        echo "\");

        // add the jQuery event to the a element
        a.click(field_add_";
        // line 68
        echo $this->getContext($context, 'id');
        echo ");

        // trigger the event
        a.trigger('click');

        return false;
    }

    <!-- edit one association -->

</script>

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
