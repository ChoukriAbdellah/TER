<?php
namespace App\Form;
 
use App\Entity\Vrd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class VrdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('distanceEauPotable', NumberType::class,[
                'label' => false
            ]);
			
			
		$builder
			->add('distanceElectricite', NumberType::class,[
                'label' => false
            ]);
			
			
		$builder
			->add('distanceTelephonique', NumberType::class,[
                'label' => false
            ]);
			
		$builder->add('pompeRelevage', CheckboxType::class, [
    'label'    => 'Pompe de relevage',
		'required' => false,
	]);
	
		$builder->add('fosseSeptique', CheckboxType::class, [
    'label'    => 'Fosse septique',
		'required' => false,
	]);
	
		$builder->add('microStation', CheckboxType::class, [
    'label'    => 'Micro station',
		'required' => false,
	]);
	
		$builder->add('etudeHydrogeologique', CheckboxType::class, [
    'label'    => 'Etude hydrogeologique',
		'required' => false,
	]);
			
			
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Vrd::class,
        ));
    }
}