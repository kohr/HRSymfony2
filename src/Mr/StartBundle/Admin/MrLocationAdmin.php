<?php
namespace Mr\StartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Mr\StartBundle\Entity\MrLocation;

class MrLocationAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('adress')
            ->add('zipcode')
            ->add('city')
            ->add('url')
            ->add('email')
            ->add('twitterhash')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Name')
                ->add('name')
            ->end()
            ->with('Contact')
                ->add('adress')
                ->add('zipcode')
                ->add('city')
                ->add('url')
                ->add('email')
                ->add('twitterhash')
            ->end()
        ;
    }
}