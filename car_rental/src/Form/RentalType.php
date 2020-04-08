<?php

namespace App\Form;

use App\Entity\Rental;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RentalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('img', null, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('description', null, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('year', null, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('price', null, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rental::class,
        ]);
    }
}
