<?php
namespace App\Form;
 
use App\Entity\Electricite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class ElectriciteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dimensionCable', NumberType::class,[
                'label' => false
            ]);

        $builder
			->add('nbChauffage', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbInterrupteur', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbSortieLumieres', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbPriseElectrique', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbVoletRoulant', NumberType::class,[
                'label' => false
            ]);

    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Electricite::class,
        ));
    }
}