<?php

namespace App\Form;

use App\DTO\PaymentDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Invoice;

class InvoiceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount', MoneyType::class, [
                'currency' => 'USD',
                'label' => 'Amount',
            ])
            ->add('first_name', TextType::class, [
                'required' => false,
                'label' => 'First Name'
            ])
            ->add('last_name', TextType::class, [
                'required' => false,
                'label' => 'Last Name'
            ])
            ->add('email', TextType::class, [
                'required' => false,
                'label' => 'Email'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit Payment'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PaymentDTO::class,
        ]);
    }
}
