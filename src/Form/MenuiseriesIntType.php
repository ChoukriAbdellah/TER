<?php
namespace App\Form;
 
use App\Entity\MenuiseriesInt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
 
class MenuiseriesIntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder 
			->add('portesPleines', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('portesVitrees', NumberType::class,[
                'label' => false
            ]);
		
		$builder 
			->add('portesBattantes', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('portesCoulissantes', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('portesPlacardPliantes', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('portesPlacardBattantes', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('portesPlacardCoulissantes', NumberType::class,[
                'label' => false
            ]);

            $builder
            ->add('materieauRampes', ChoiceType::class,[
                'choices' => [
                    'En bois' => 'RAMPE_BOIS',
                    'En marbre' => 'RAMPE_MARBRE',
                    'En métal' => 'RAMPE_METAL',
                    'En céramique' => 'RAMPE_CERAMIQUE'
                    ],
                    'label' => false
                ]
        );

        $builder 
        ->add('tailleRampes', NumberType::class,[
            'label' => false
        ]);

        $builder
        ->add('materieauBalustrades', ChoiceType::class,[
            'choices' => [
            'En bois' => 'BALUSTRADE_BOIS',
            'En marbre' => 'BALUSTRADE_MARBRE',
            'En métal' => 'BALUSTRADE_METAL',
            'En céramique' => 'BALUSTRADE_CERAMIQUE'
            ],
            'label' => false
        ]
    );

    $builder 
    ->add('tailleBalustrades', NumberType::class,[
        'label' => false
    ]);
       
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => MenuiseriesInt::class,
        ));
    }
}