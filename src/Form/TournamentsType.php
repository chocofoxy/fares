<?php

namespace App\Form;

use App\Entity\Tournaments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournamentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trCover')
            ->add('gameId')
            ->add('team1Id')
            ->add('team2Id')
            ->add('team3Id')
            ->add('team4Id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tournaments::class,
        ]);
    }
}
