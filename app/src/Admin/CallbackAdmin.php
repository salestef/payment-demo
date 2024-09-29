<?php

namespace App\Admin;

use App\Entity\Callback;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class CallbackAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('rawData')
            ->add('status')
            ->add('info');
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('rawData', TextareaType::class)
            ->add('status', TextType::class, [
                'label' => 'Status',
                'required' => true,
            ])
            ->add('info', TextareaType::class, [
                'label' => 'Info',
                'required' => false,
            ])
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('rawData')
            ->add('status')
            ->add('info');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('rawData')
            ->add('status')
            ->add('info');
    }
}
