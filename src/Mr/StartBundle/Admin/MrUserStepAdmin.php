<?php
namespace Mr\StartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrUserStep;

class MrUserStepAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('object_type')
                ->add('object_id')
                ->add('user')
                ->add('location')
                ->add('start_at')
                ->add('end_at')
                ->add('current')
                ->add('comment')
                ->add('liked')
                ->add('stepacquaintance')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Step')
                ->add('object_type', 'choice', array('choices' => MrUserStep::getTypeList(), 'expanded' => true, 'multiple' => false))
                ->add('object_id')
                ->add('user', 'sonata_type_model', array(), array('edit' => 'list'))
                ->add('location', 'sonata_type_model', array(), array('edit' => 'list'))
            ->end()
            ->with('Date')
                ->add('start_at')
                ->add('end_at')
                ->add('current')
            ->end()
            ->with('Feedback')
                ->add('comment')
                ->add('liked')
            ->end()
            ->with('Acquaintances')
                ->add('stepacquaintance', 'sonata_type_model', array('required' => false))
            ->end()
        ;
    }
}