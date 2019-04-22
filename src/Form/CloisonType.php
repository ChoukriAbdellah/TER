<?php
namespace App\Form;
 
use App\Entity\Cloison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
 
class CloisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder 
			->add('cloisonsAmovibles', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('cloisonsSeches', NumberType::class,[
                'label' => false
            ]);
		
		$builder 
			->add('cloisonsPiecesHumides', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('cloisonsVerre', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('cloisonsJaponaises', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('claustraInterieur', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('cloisonsVitreesStyleAtelier', NumberType::class,[
                'label' => false
            ]);

            $builder 
			->add('cloisonsVegetales', NumberType::class,[
                'label' => false
            ]);
       
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Cloison::class,
        ));
    }
}