<?php
namespace Mr\StartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrJob;

class MrJobAdmin extends Admin
{
    protected $list = array(
        'name' => array('identifier' => true),
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        )
    );

    protected $form = array(
        'name',
    );

    protected $filter = array(
        'name',
    );
}