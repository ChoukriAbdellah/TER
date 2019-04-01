<?php
namespace App\Form;
 
use App\Entity\Elevation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
 
class ElevationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nb_poutres', IntegerType::class, ['label' => false])
        ->add('LongueurPoutre', NumberType::class, ['label' => false])
        ->add('TaillePoutre', NumberType::class, ['label' => false])
        ->add('TypeMateriauxMur', ChoiceType::class,[
            'choices' => [
            'mur en agglo ' => 'Agglo',
            'mur en brique' => 'Brique',
            'mur en bloc pense' => 'Bloc_pense',
            'mur en stuporeux' => 'Stuporeux',
            'mur en bois' => 'Bois'
            ],
            'label' => false
        ]
    )
    ->add('HauteurMur', NumberType::class, ['label' => false])
    ->add('NombreFenetre', IntegerType::class, ['label' => false])
    ->add('TypeFenetre', TextType::class, ['label' => false])
    ->add('TypeLinteaux', TextType::class, ['label' => false]);
        
       
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Elevation::class,
        ));
    }
}