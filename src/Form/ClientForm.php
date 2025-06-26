<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputClass = 'block w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent';

        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => $inputClass],
                'label' => 'Nom',
                'label_attr' => ['class' => 'block mb-1 text-sm font-medium text-gray-700'],
                'required' => false, // <-- Désactive required HTML
            ])
            ->add('prenom', TextType::class, [
                'attr' => ['class' => $inputClass],
                'label' => 'Prénom',
                'label_attr' => ['class' => 'block mb-1 text-sm font-medium text-gray-700'],
                'required' => false,
            ])
            ->add('telephone', TextType::class, [
                'attr' => ['class' => $inputClass],
                'label' => 'Téléphone',
                'label_attr' => ['class' => 'block mb-1 text-sm font-medium text-gray-700'],
                'required' => false,
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
