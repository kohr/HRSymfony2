<?php

/*
 * This file is part of sonata-project.
 *
 * (c) 2010 Thomas Rabaix
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Twig\Extension;

use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Filter\FilterInterface;
use Sonata\AdminBundle\Admin\NoValueException;

use Symfony\Component\Form\FormView;

class SonataAdminExtension extends \Twig_Extension
{
    /**
     * @var \Twig_Environment
     */
    protected $environment;

    /**
     * {@inheritdoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            'render_list_element'     => new \Twig_Filter_Method($this, 'renderListElement', array('is_safe' => array('html'))),
            'render_filter_element'   => new \Twig_Filter_Method($this, 'renderFilterElement', array('is_safe' => array('html'))),
            'render_view_element'     => new \Twig_Filter_Method($this, 'renderViewElement', array('is_safe' => array('html'))),
            'render_relation_element' => new \Twig_Filter_Method($this, 'renderRelationElement', array('is_safe' => array('html'))),
        );
    }

    public function getTokenParsers()
    {
        return array();
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'sonata_admin';
    }

    /**
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param string $default
     * @return \Twig_TemplateInterface
     */
    protected function getTemplate(FieldDescriptionInterface $fieldDescription, $default)
    {
        // todo: find a better solution
        try {
            $template = $this->environment->loadTemplate($fieldDescription->getTemplate());
        } catch(\Twig_Error_Loader $e) {
            $template = $this->environment->loadTemplate($default);
        }

        return $template;
    }

    /**
     * render a list element from the FieldDescription
     *
     * @param mixed $object
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param array $params
     * @return
     */
    public function renderListElement($object, FieldDescriptionInterface $fieldDescription, $params = array())
    {
        $template = $this->getTemplate($fieldDescription, 'SonataAdminBundle:CRUD:base_list_field.html.twig');

        return $this->output($fieldDescription, $template, array_merge($params, array(
            'admin'  => $fieldDescription->getAdmin(),
            'object' => $object,
            'value'  => $this->getValueFromFieldDescription($object, $fieldDescription),
            'field_description' => $fieldDescription
        )));
    }

    /**
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param string $content
     * @return string
     */
    public function output(FieldDescriptionInterface $fieldDescription, \Twig_TemplateInterface $template, array $parameters = array())
    {
        $content = $template->render($parameters);

        if ($this->environment->isDebug()) {
            return sprintf("\n<!-- START  \n  fieldName: %s\n  template: %s\n  compiled template: %s\n -->\n%s\n<!-- END - fieldName: %s -->",
                $fieldDescription->getFieldName(),
                $fieldDescription->getTemplate(),
                $template->getTemplateName(),
                $content,
                $fieldDescription->getFieldName()
            );
        }

        return $content;
    }

    /**
     * return the value related to FieldDescription, if the associated object does no
     * exists => a temporary one is created
     *
     * @param object $object
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param array $params
     * @return mixed
     */
    public function getValueFromFieldDescription($object, FieldDescriptionInterface $fieldDescription, array $params = array())
    {
        if (isset($params['loop']) && $object instanceof \ArrayAccess) {
            throw new \RuntimeException('remove the loop requirement');
        }

        $value = null;
        try {
          $value = $fieldDescription->getValue($object);
        } catch (NoValueException $e) {
            if ($fieldDescription->getAssociationAdmin()) {
                $value = $fieldDescription->getAssociationAdmin()->getNewInstance();
            }
        }

        return $value;
    }

    /**
     * render a filter element
     *
     * @param \Sonata\AdminBundle\Filter\FilterInterface $filter
     * @param array $params
     * @return string
     */
    public function renderFilterElement(FilterInterface $filter, array $params = array())
    {
        $fieldDescription = $filter->getFieldDescription();

        $template = $this->getTemplate($fieldDescription, 'SonataAdminBundle:CRUD:base_filter_field.html.twig');

        return $this->output($fieldDescription, $template, array_merge($params, array(
            'filter'        => $filter,
            'filter_form'   => $filter->getField()->createView()
        )));
    }

    /**
     * render a view element
     *
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param mixed $object
     * @return string
     */
    public function renderViewElement(FieldDescriptionInterface $fieldDescription, $object)
    {
        $template = $this->getTemplate($fieldDescription, 'SonataAdminBundle:CRUD:base_show_field.html.twig');

        try {
            $value = $fieldDescription->getValue($object);
        } catch (NoValueException $e) {
            $value = null;
        }

        return $this->output($fieldDescription, $template, array(
            'field_description' => $fieldDescription,
            'object'            => $object,
            'value'             => $value
        ));
    }

    /**
     * @throws \RunTimeException
     * @param $element
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @return mixed
     */
    public function renderRelationElement($element, FieldDescriptionInterface $fieldDescription)
    {
        $method = $fieldDescription->getOption('associated_tostring', '__toString');

        if (!method_exists($element, $method)) {
            throw new \RunTimeException(sprintf('You must define an `associated_tostring` option or create a `%s::__toString` method to the field option %s from service %s is ', get_class($element), $fieldDescription->getName(), $fieldDescription->getAdmin()->getCode()));
        }

        return call_user_func(array($element, $method));
    }
}
