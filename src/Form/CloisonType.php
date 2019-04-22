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
        ->add('typeCloisons', ChoiceType::class,[
            'choices' => [
            'La cloison en plâtre' => 'cloison_platre',
            'La cloison en panneaux alvéolaires' => 'cloison_alveolaire',
            'La cloison en béton cellulaire' => 'cloison_beton',
            'La cloison en bois' => 'cloison_bois'
            
            ],
            'label' => false
        ]
    )
    ->add('surfaceTotale', NumberType::class, ['label' => false]);
 
        
       
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Cloison::class,
        ));
    }
}