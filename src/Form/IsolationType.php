<?php
namespace App\Form;
 
use App\Entity\Isolation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

 
class IsolationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surfaceThermique', NumberType::class,[
                'label' => false
            ])
            ->add('surfacePhonique', NumberType::class,[
                'label' => false
            ]);

        
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Isolation::class,
        ));
    }
}