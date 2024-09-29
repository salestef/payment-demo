<?php

namespace App\Admin;

use App\Entity\Invoice;
use App\Enum\InvoiceStatusEnum;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class InvoiceAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('status')
            ->add('currency')
            ->add('amount')
            ->add('requestData')
            ->add('responseData')
            ->add('qrCode')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Created' => InvoiceStatusEnum::STATUS_CREATED,
                    'Pending' => InvoiceStatusEnum::STATUS_PENDING,
                    'Successful' => InvoiceStatusEnum::STATUS_SUCCESSFUL,
                    'Error' => InvoiceStatusEnum::STATUS_ERROR,
                    'Expired' => InvoiceStatusEnum::STATUS_EXPIRED,
                    'Rejected' => InvoiceStatusEnum::STATUS_REJECTED,
                ],
            ])
            ->add('currency', TextType::class)
            ->add('amount', NumberType::class)
            ->add('requestData', TextareaType::class)
            ->add('responseData', TextareaType::class)
            ->add('qrCode', TextType::class);
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('status')
            ->add('currency')
            ->add('amount')
            ->add('requestData')
            ->add('responseData')
            ->add('qrCode');
    }
}
