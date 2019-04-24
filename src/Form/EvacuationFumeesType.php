<?php
namespace App\Form;
 
use App\Entity\EvacuationFumees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
 
class EvacuationFumeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('materieauUtilise', ChoiceType::class,[
                'choices' => [
                'En bois' => 'CHEMINEE_BOIS',
                'En pierre' => 'CHEMINEE_PIERRE',
                'En marbre' => 'CHEMINEE_MARBRE',
                'En brique' => 'CHEMINEE_BRIQUE',
                'En béton' => 'CHEMINEE_BETON',
                'En métal' => 'CHEMINEE_METAL',
                'En céramique' => 'CHEMINEE_CERAMIQUE'
                ],
                'label' => false
            ]
        );

        $builder
        ->add('forme', ChoiceType::class,[
            'choices' => [
            'Cheminée centrale' => 'CHEMINEE_CENTRALE',
            'Cheminée murale' => 'CHEMINEE_MURALE',
            'Cheminée suspendue' => 'CHEMINEE_SUSPENDUE',
            'Cheminée d\'angle' => 'CHEMINEE_ANGLE'
            ],
            'label' => false
        ]
    );

        $builder
        ->add('typeCheminee', ChoiceType::class,[
            'choices' => [
            'Cheminée double face' => 'CHEMINEE_DOUBLE FACE',
            'Cheminée 3 faces' => 'CHEMINEE_3_FACES',
            'Cheminée 4 faces' => 'CHEMINEE_4_FACES',
            'Cheminée panoramique' => 'CHEMINEE_PANORAMIQUE'
            ],
            'label' => false
        ]
    );
    }

 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => EvacuationFumees::class,
        ));
    }
}