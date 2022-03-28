<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('old_password',PasswordType::class,[
                'label'=>'Votre mot de passe actuel',
                'mapped'=>false,
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre mot de passe'
                ]
            ])
            ->add('new_password',RepeatedType::class,[
                'type'=>PasswordType::class,
                'mapped'=>false,
                'label'=>'Le mot de passe et la confirmation doivent etre identique',
                'required'=>true,
                'first_options'=>[
                    'label'=>'Nouveau mot de passe',
                    'attr'=>[
                        'placeholder'=>"Merci de saisir votre mot de passe"
                    ]

                ],
                'second_options'=>[
                    'label'=>'Confirmer nouveau mot de passe',
                    'attr'=>[
                        'placeholder'=>'Merci de confirmer votre mot de passe'
                    ]
                ]

    ])
            ->add('email',EmailType::class,[
                'disabled'=>true
            ])
            ->add('firstname',TextType::class,[
                'disabled'=>true
            ])
            ->add('lastname',TextType::class,[
                'disabled'=>true
            ])
            ->add('submit',SubmitType::class,[
                'label'=>"metre à jour"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
