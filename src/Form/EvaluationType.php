<?php

namespace App\Form;

use App\Entity\Evaluation;
use App\Entity\Apprenant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('discipline')
            ->add('categorie', ChoiceType::class, [
                'choices'  => [
                    'Theorique' => 'Theorique',
                    'Pratique' => 'Pratique',
                    
                ],
            ])
            ->add('note')
            ->add('apprenant', EntityType::class, [
                'class' => Apprenant::class,
                'choice_label' => 'id'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
