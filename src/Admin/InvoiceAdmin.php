<?php

namespace App\Admin;

use App\Entity\Invoice;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class InvoiceAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('status')
            ->add('qrCode')
            ->add('requestData')
            ->add('responseData');
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Created' => Invoice::STATUS_CREATED,
                    'Pending' => Invoice::STATUS_PENDING,
                    'Successful' => Invoice::STATUS_SUCCESSFUL,
                    'Error' => Invoice::STATUS_ERROR,
                    'Expired' => Invoice::STATUS_EXPIRED,
                    'Rejected' => Invoice::STATUS_REJECTED,
                ],
            ])
            ->add('requestData', TextareaType::class)
            ->add('responseData', TextareaType::class)
            ->add('qrCode', TextType::class);
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('status')
            ->add('requestData')
            ->add('responseData')
            ->add('qrCode');
    }
}
