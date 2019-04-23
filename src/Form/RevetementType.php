<?php
namespace App\Form;
 
use App\Entity\Revetement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

 
class RevetementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surfRevetClassique', NumberType::class,[
                'label' => false
            ])
            ->add('surfRevetMotif', NumberType::class,[
                'label' => false
            ]);

        
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Revetement::class,
        ));
    }
}