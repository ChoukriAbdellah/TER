<?php
namespace App\Form;

use App\Entity\Menuiserie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
 
class MenuiserieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dimensionBoisRouge', NumberType::class, ['label' => false])
            ->add('dimensionBoisHetre', NumberType::class, ['label' => false])
            ->add('dimensionAluminium', NumberType::class, ['label' => false])
            ;

    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Menuiserie::class,
        ));
    }
}