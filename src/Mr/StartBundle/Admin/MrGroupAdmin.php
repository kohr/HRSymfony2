<?php
namespace Mr\StartBundle\Admin;

/*use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;*/
use Sonata\UserBundle\Admin\Entity\GroupAdmin;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrGroup;

class MrGroupAdmin extends GroupAdmin
{
    protected $list = array(
        'name' => array('identifier' => true),
        'users',
        'roles',
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        )
    );

    protected $form = array(
        'name',
        'users'   => array('form_field_options' => array('required' => false)),
    );

    protected $filter = array(
        'name',
    );

}