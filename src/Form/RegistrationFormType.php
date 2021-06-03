<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'label' => ' ',
                'attr' => array(
                    'placeholder' => 'Email',
                    'class' => 'redondearInput'
                )
            ))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Debería aceptar los términos de privacidad.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'invalid_message' => 'Passwords invalidos.',
                'options' => ['attr' => ['class' => 'redondearInput', 'placeholder' =>'Password']],
                'required' => true,
                'first_options'  => ['label' => ' '],
                'second_options' => ['label' => ' '],
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Password inferior a {{ limit }} carácteres',
                        // max length allowed by Symfony for security reasons
                        'max' => 32,
                        'maxMessage' => 'Password superior a {{ limit }} carácteres'
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
