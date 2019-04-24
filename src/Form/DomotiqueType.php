<?php
namespace App\Form;
 
use App\Entity\Domotique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class DomotiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    $builder
    ->add('regularisationChauffage', CheckboxType::class, [
    'label'    => 'Chauffage autonome',
    'required' => false,
        ]);

    $builder
    ->add('eclairageAuto', CheckboxType::class, [
    'label'    => 'Eclairage automatique',
    'required' => false,
        ]);
    $builder
    ->add('ouvertureFermetureAuto', CheckboxType::class, [
    'label'    => 'ouverture et fermeture automatique des fenêtre',
    'required' => false,
            ]);
     
     $builder
     ->add('autonomieEau', CheckboxType::class, [
     'label'    => 'Autonomie du débit d\'eau',
    'required' => false,
            ]);
    $builder
    ->add('detecteurEtAlarme', CheckboxType::class, [
    'label'    => 'Alarme et détecteur',
    'required' => false,
             ]);        
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Domotique::class,
        ));
    }
}
