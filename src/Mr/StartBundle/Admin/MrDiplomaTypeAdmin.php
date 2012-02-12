<?php
namespace Mr\StartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrDiplomaType;

class MrDiplomaTypeAdmin extends Admin
{
    protected $maxPerPage = 25;

    protected $list = array(
        'name' => array('identifier' => true),
        'level',
        'country',
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        ),
    );

    protected $form = array(
        'name',
        'level',
        'country',
    );

    protected $filter = array(
        'name',
        //'level',
        //'country',
    );
}