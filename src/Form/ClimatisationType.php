<?php
namespace App\Form;
 
use App\Entity\Climatisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
 
class ClimatisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('typeClimatisation', ChoiceType::class,[
            'choices' => [
            'Monobloc mobile ' => 'Monobloc_mobile',
            'Monobloc fixe' => 'Monobloc fixe',
            'Monobloc windows' => 'Monobloc_windows',
            'Split mobile' => 'Split_mobile',
            'Split mural ' => 'split_mural',
            'Split console' => 'Split_console',
            'Split gainable ' => 'Split_gainable'
            ],
            'label' => false
        ]
        );     
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Climatisation::class,
        ));
    }
}