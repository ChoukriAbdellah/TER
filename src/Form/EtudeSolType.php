<?php
namespace App\Form;
 
use App\Entity\EtudeSol;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
 
class EtudeSolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeSol', ChoiceType::class,[
                'choices' => [
                'Sol argileux' => 'ARGILEUX',
                'Sol calcaire' => 'CALCAIRE',
                'Sol humifère' => 'HUMIFERE',
                'Sol limoneux' => 'LIMONEUX',
                'Sol sableux' => 'SABLEUX'
                ],
                'label' => false
            ]
        );
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => EtudeSol::class,
        ));
    }
}