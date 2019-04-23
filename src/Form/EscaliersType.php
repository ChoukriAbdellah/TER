<?php
namespace App\Form;
 
use App\Entity\Escaliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class EscaliersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeEscalier', ChoiceType::class,[
                'choices' => [
                'Droit' => 'DROIT',
                'Hélicoidal' => 'HELIDOIDAL',
                'Tournant' => 'TOURNANT'
                ],
                'label' => false
            ]);
		$builder 
			->add('dimensions', NumberType::class,[
                'label' => false
            ]);


        $builder
            ->add('materiaux', ChoiceType::class,[
                'choices' => [
                    'Bois tendres' => 'BOISTENDRE',
                    'Bois exotiques' => 'BOISEXOTIQUE',
                    'Beton' => 'beton'
                ],
                'label' => false
            ]);

			
		//->add('materielUtilise', ChoiceType::class;
		
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Escaliers::class,
        ));
    }
}