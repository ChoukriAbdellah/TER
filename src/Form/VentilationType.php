<?php
namespace App\Form;
 
use App\Entity\Ventilation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
 
class VentilationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('typeVentilation', ChoiceType::class,[
            'choices' => [
            'Ventilation simple flux ' => 'ventilation_simple_flux',
            'Ventilation double flux ' => 'ventilation_double_flux',
            'Puits climatique' => 'puits_climatique'
            ],
            'label' => false
        ]
    )
    ->add('surfaceChambreSalon', NumberType::class, ['label' => false])
    ->add('surfaceCuisineWc', NumberType::class, ['label' => false]);
 
        
       
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Ventilation::class,
        ));
    }
}