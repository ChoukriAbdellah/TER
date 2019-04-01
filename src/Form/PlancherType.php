<?php
namespace App\Form;
 
use App\Entity\Plancher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class PlancherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder 
			->add('plancherVs', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('plancherEtage', NumberType::class,[
                'label' => false
            ]);
		
		$builder 
			->add('plancherTerrasse', NumberType::class,[
                'label' => false
            ]);
			
		$builder 
			->add('longueurEntrevous', NumberType::class,[
                'label' => false
            ]);
			
			
			
		//->add('materielUtilise', ChoiceType::class;
		
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Plancher::class,
        ));
    }
}