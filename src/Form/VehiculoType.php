<?php

namespace App\Form;

use App\Entity\Vehiculo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Para subir imagen
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

// Para subir multiples archivos
use Symfony\Component\Validator\Constraints\All;

class VehiculoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marca')
            ->add('modelo')
            ->add('descripcion')
            ->add('precio')
            ->add('images', FileType::class, [
                'label' => 'Imágenes',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // upload multiple files
                'multiple' => true,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new All([
                        'constraints' => [
                            new File([
                                'maxSize' => '1024k',
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                ],
                                'mimeTypesMessage' => 'Please upload a valid imagen',
                            ])
                        ]
                    ])
                    
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehiculo::class,
        ]);
    }
}
