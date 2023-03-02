<?php

namespace App\Form;

use App\Entity\TodoList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class TodoListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Asignatura', TextType::class, [
                'attr' => ['class' => 'materia'],
            ])
            ->add('Turno', TextType::class, [
                'attr' => ['class' => 'turn'],
            ])
            ->add('Tiempo', DateTimeType::class, [
                'attr' => ['class' => 'horario'],
            ])
            ->add('Observarciones', TextType::class, [
                'attr' => ['class' => 'observations-input'],
            ])
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
