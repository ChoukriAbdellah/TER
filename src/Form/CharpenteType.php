<?php
namespace App\Form;
 
use App\Entity\Charpente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
 
class CharpenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeCharpente', ChoiceType::class,[
                'choices' => [
                'Charpente traditionnelle' => 'TRADITIONNELLE',
                'Charpente industrielle (fermette)' => 'INDUSTRIELLE',
                'Charpente métallique' => 'METALLIQUE',
                'Charpente maçonnée' => 'MACONNEE'
                ],
                'label' => false
            ]
        );

        $builder
        ->add('formeCharpente', ChoiceType::class,[
            'choices' => [
            'En 2 pentes' => '2 PENTES',
            'En 3 pentes' => '3 PENTES',
            'En 4 pentes' => '4 PENTES',
            'En L' => 'L'
            ],
            'label' => false
        ]
    );

    $builder
    ->add('nbMC', NumberType::class, ['label' => false]);
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Charpente::class,
        ));
    }
}