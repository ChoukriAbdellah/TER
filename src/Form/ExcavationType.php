<?php
namespace App\Form;
 
use App\Entity\Excavation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class ExcavationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeTerrassement', ChoiceType::class,[
                'choices' => [
                'Semelle Filante' => 'FILANTE',
                'Longrines' => 'LONGRINES'
                ],
                'label' => false
            ]);
		$builder 
			->add('mursPeripherique', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('mursRefont', NumberType::class,[
                'label' => false
            ]);
		
		$builder 
			->add('largeurFouille', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('profondeurFouille', NumberType::class,[
                'label' => false
            ]);
			
			
			
		//->add('materielUtilise', ChoiceType::class;
		
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Excavation::class,
        ));
    }
}