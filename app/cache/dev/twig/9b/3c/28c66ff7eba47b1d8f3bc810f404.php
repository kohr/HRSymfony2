<?php

/* LiipHelloBundle:Vie:article.html.twig */
class __TwigTemplate_9b3c28c66ff7eba47b1d8f3bc810f404 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("LiipHelloBundle::vie.html.twig");
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
    ";
        // line 5
        echo $this->renderParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        GENTICS_Aloha_base = 'http://aloha-editor.org/aloha-0.9.3/aloha/';
        jQuery(document).ready(function() {

            VIE.EntityManager.initializeCollection();

            VIE.EntityManager.entities.bind('add', function(model) {
                model.url = '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liip_vie_phpcr_odm_put_document", array("id" => $this->getAttribute($this->getContext($context, 'article'), "relativePath", array(), "any", false), "_method" => "PUT")), "html");
        echo "';
                model.toJSON = model.toJSONLD;
            });

            // Load all RDFa entities into VIE
            VIE.RDFaEntities.getInstances();

            // Make all RDFa entities editable
            jQuery('[typeof][about]').each(function() {
                jQuery(this).vieSemanticAloha();
            });

            jQuery('#savebutton').bind('click', function() {
                // Go through all Backbone model instances loaded for the page
                VIE.EntityManager.entities.each(function(objectInstance) {
                    if (!VIE.AlohaEditable.refreshFromEditables(objectInstance)) {
                        // No changes to this object, skip
                        return true;
                    }

                    // Set the modified properties to the model instance
                    objectInstance.save(null, {
                        success: function(savedModel, response) {
                            alert(savedModel.id + \" was saved, see JS console for details\");
                            jQuery.each(modifiedProperties, function(propertyName, propertyValue) {
                                savedModel.editables[propertyName].setUnmodified();
                            });
                        },
                        error: function(response) {
                            console.log(\"Save failed\");
                        }
                    });
                });
            });
        });
    </script>

";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "
    <div about=\"http://symfony-standard.lo/liip\" rel=\"dcterms:hasPart\" rev=\"dcterms:partOf\">

        <article typeof=\"article\" about=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'article'), "fullpath", array(), "any", false), "html");
        echo "\">
            <h1 property=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'article'), "title", array(), "any", false), "html");
        echo "</h1>
            <div property=\"body\">
                ";
        // line 60
        echo $this->getAttribute($this->getContext($context, 'article'), "body", array(), "any", false);
        echo "
            </div>
       </article>

    </div>

";
    }

    public function getTemplateName()
    {
        return "LiipHelloBundle:Vie:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
