<?php
namespace App\Form;

use App\Entity\Toiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

 
class ToitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typetoit', ChoiceType::class,[
                'choices' => [
                'Toit moderne' => 'MODERNE',
                'Toit classique' => 'CLASSIQUE',
                
                ],
                'label' => false
            ]
        )
            ->add('degPente', NumberType::class, ['label' => false])
            ->add('renforcement', ChoiceType::class,[
            'choices' => [
            'Oui' => true,
            'Non' => false,
            
            ],
            'label' => false
        ])
        ;
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Toiture::class,
        ));
    }
}