<?php

namespace App\Form;

use App\Entity\Cv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CvFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ad', TextType::class, [
                'label' => 'Ad',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Ad'
                ]
            ])
            ->add('Soyad', TextType::class, [
                'label' => 'Soyad',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Soyad'
                ]
            ])
            ->add('Gmail', TextType::class, [
                'label' => 'Gmail',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Gmail'
                ]
            ])
            ->add('Tel_No', TextType::class, [
                'label' => 'Tel_No',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Telefon Numarası'
                ]
            ])
            ->add('Tecrube', TextType::class, [
                'label' => 'Tecrube',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Yıl Olarak'
                ]
            ])

            ->add('dil', TextType::class, [
                'label' => 'Dil',
                'attr' => [
                    'class' => 'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500',
                    'placeholder' => 'Dil'
                ]
            ])

            ->add('description', TextareaType::class, [
                'attr'=>array(
                    'class'=>'bg-white font-bold py-2 px-4 ml-6 rounded-lg shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500', '
                    outline-style:solid ;
                    outline-color: red; border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500','placeholder'=>' Enter Description...'
                ),
                'label'=>false
            ])
            ->add('imagePath',FileType::class, array(
                'required'=>false,
                'mapped'=>false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cv::class,
        ]);
    }
}
