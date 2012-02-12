<?php
namespace Mr\StartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrDiplomaLevel;

class MrDiplomaLevelAdmin extends Admin
{
    protected $list = array(
        'name',
        'age',
        '_action' => array(
            'actions' => array(
                'delete' => array(),
                'edit' => array(),
            )
        )
    );

    protected $form = array(
        'name',
        'age'
    );

    protected $filter = array(

    );
}