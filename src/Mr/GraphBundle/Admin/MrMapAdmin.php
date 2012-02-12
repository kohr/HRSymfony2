<?php
namespace Mr\GraphBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\GraphBundle\Entity\MrMap;
use Mr\StartBundle\Entity\MrUserStep;

class MrMapAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('prev_type')
            ->add('prev_id')
            ->add('next_type')
            ->add('next_id')
            ->add('distance')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
      $formMapper
            ->with('Prev')
                ->add('prev_type', 'choice', array('choices' => MrUserStep::getTypeList(), 'expanded' => true, 'multiple' => false))
                ->add('prev_id')
            ->end()
            ->with('Next')
                ->add('next_type', 'choice', array('choices' => MrUserStep::getTypeList(), 'expanded' => true, 'multiple' => false))
                ->add('next_id')
            ->end()
            ->with('Distance')
                ->add('distance')
            ->end()
        ;
    }
}