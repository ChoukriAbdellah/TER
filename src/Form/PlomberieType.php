<?php
namespace App\Form;
 
use App\Entity\Plomberie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class PlomberieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbMetreTuyau', NumberType::class,[
                'label' => false
            ]);
        $builder
            ->add('typeTuyau', ChoiceType::class,[
                'choices' => [
                'PVC' => 'PVC',
                'Cuivre' => 'CUIVRE',
                'Acier' => 'ACIER'
                ],
                'label' => false
            ]);
		$builder 
			->add('nbRobinets', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbWC', NumberType::class,[
                'label' => false
            ]);


        $builder
            ->add('typeChauffageEau', ChoiceType::class,[
                'choices' => [
                    'Chauffe eau' => 'CHAUFFEEAU',
                    'Chaudière' => 'CHAUDIERE',
                    'Ballon eau chaude' => 'BALLONEAU'
                ],
                'label' => false
            ]);

        $builder
            ->add('typeCompteur', ChoiceType::class,[
                'choices' => [
                    'Compteur vitesse' => 'VITESSE',
                    'Compteur volumétrique' => 'VOLUMETRIQUE'
                ],
                'label' => false
            ]);

        $builder
            ->add('nbBaignoire', NumberType::class,[
                'label' => false
            ]);

        $builder
            ->add('nbDouche', NumberType::class,[
                'label' => false
            ]);


			
		//->add('materielUtilise', ChoiceType::class;
		
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Plomberie::class,
        ));
    }
}