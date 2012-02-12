<?php
namespace Mr\GraphBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\GraphBundle\Entity\MrGraph;
use Mr\StartBundle\Entity\MrUserStep;

class MrGraphAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('from_id')
            ->add('from_type')
            ->add('to_id')
            ->add('to_type')
            ->add('traffic')
            ->add('last_time')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('From')
                ->add('from_type', 'choice', array('choices' => MrUserStep::getTypeList(), 'expanded' => true, 'multiple' => false))
                ->add('from_id')
            ->end()
            ->with('To')
                ->add('to_type', 'choice', array('choices' => MrUserStep::getTypeList(), 'expanded' => true, 'multiple' => false))
                ->add('to_id')
            ->end()
            ->with('Data')
                ->add('traffic')
                ->add('last_time')
            ->end()
        ;
    }
}
