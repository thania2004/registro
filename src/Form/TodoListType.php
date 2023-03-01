<?php

namespace App\Form;

use App\Entity\TodoList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TodoListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Asignatura')
            ->add('Turno')
            ->add('Tiempo')
            ->add('Observarciones')
            ->add('Prioridades')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TodoList::class,
        ]);
    }
}
