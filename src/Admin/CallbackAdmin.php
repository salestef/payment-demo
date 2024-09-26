<?php

namespace App\Admin;

use App\Entity\Callback;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

final class CallbackAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('info')  // Uklonjeno polje 'signal'
            ->add('status'); // Dodato polje 'status'
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('info', TextareaType::class, [
                'label' => 'Info',
                'required' => false,
            ])
            ->add('status', TextType::class, [
                'label' => 'Status',
                'required' => true,
            ]); // Dodato polje 'status'
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('info')
            ->add('status'); // Dodato polje 'status'
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('info')
            ->add('status'); // Dodato polje 'status'
    }
}
