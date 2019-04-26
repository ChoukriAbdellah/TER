<?php
namespace App\Form;
 
use App\Entity\PreparationEtAcces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class PreparationEtAccesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('submit', ButtonType::class, array(
            'attr' => array(
                'class' => 'btn btn-primary btn-block' ,'onClick'=>'update()','id'=>'chk','label' => 'false'
            )
        ))
        /*->add('choixArbre', ChoiceType::class,[
            'choices' => [
            'PVC' => 'PVC',
            'Cuivre' => 'CUIVRE',
            'Acier' => 'ACIER'
            ],
            'label' => false
        ]);*/
        ->add('nb_pins', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_sapins', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_bouleaux', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_chenes', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_erables', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_frenes', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_noyers', IntegerType::class, ['label' => false,'required' => false])
        ->add('nb_autres', IntegerType::class, ['label' => false,'required' => false])
        ->add('taille_pins', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_sapins', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_bouleaux', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_chenes', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_erables', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_frenes', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_noyers', NumberType::class, ['label' => false,'required' => false])
        ->add('taille_autres', NumberType::class, ['label' => false,'required' => false])
        ->add('positionTerrain', ChoiceType::class,[
            'choices' => [
            'Pente montante' => 'PENTE MONTANTE',
            'Pente descendante' => 'PENTE DESCENDANTE',
            'Relief montant' => 'RELIEF MONTANT',
            'Relief descendant' => 'RELIEF DESCENDANT',
            'Dénivelé montant' => 'DENIVELE MONTANT',
            'Dénivelé descendant' => 'DENIVELE DESCENDANT',
            'Terrain plat' => 'TERRAIN PLAT'
            ],
            'label' => false
        ]
    );
       
        
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => PreparationEtAcces::class,
        ));
    }
}