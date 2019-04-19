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
                'Charpente traditionnelle' => 'charpente_traditionnelle',
                'Charpente industrielle (fermette)' => 'charpente_industrielle',
                'Charpente métallique' => 'charpente_metallique',
                'Charpente maçonnée' => 'charpente_maconnee'
                ],
                'label' => false
            ]
        );

        $builder
        ->add('formeCharpente', ChoiceType::class,[
            'choices' => [
            'En 2 pentes' => 'charpente_2_pentes',
            'En 3 pentes' => 'charpente_3_pentes',
            'En 4 pentes' => 'charpente_4_pentes',
            'En L' => 'charpente_L'
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