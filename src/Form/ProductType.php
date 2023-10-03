<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => false,
                'label' => 'Titre de l\'oeuvre',
                'attr' => ['placeholder' => 'Saisissez le titre de l\'oeuvre'],
            ])
            ->add('picture_src', TextType::class, [
                'required' => false,
                'label' => 'Source de l\'image',
                'attr' => ['placeholder' => 'Saisissez le type de média'],
            ])
            ->add('picture_name', TextType::class, [
                'required' => false,
                'label' => 'Nom de l\'image',
                'attr' => ['placeholder' => 'Saisissez le nom de l\'image'],
            ])
            ->add('price', IntegerType::class, [
                'required' => false,
                'label' => 'Prix',
                'attr' => ['placeholder' => 'Saisissez le prix'],
            ])
            ->add('disponibility', CheckboxType::class, [
                'required' => false,
                'label' => 'Disponibilité',
                


            ])
            ->add('description', TextType::class, [
                'required' => false,
                'label' => 'Description',
                'attr' => ['placeholder' => 'Saisissez une description'],
            ])
            ->add('commande', TextType::class, [
                'required' => false,
                'label' => 'Commande',
                
            ])
            ->add('category', TextType::class, [
                'required' => false,
                'label' => 'Catégorie',
                'attr' => ['placeholder' => 'Choisissez une catégorie'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
//Plus haut j'ai fait tout ça pour paramétré le formulaire de ProductType