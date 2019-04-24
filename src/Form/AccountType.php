<?php
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('oldPassword', PasswordType::class, array(
                'mapped' => false,
                'label' => false
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les deux mots de passe doivent être identiques',
                'options' => array(
                    'attr' => array(
                        'class' => 'password-field'
                    ),
                    'label' => false
                ),
                'required' => true
            ))
            ->add('email', EmailType::class, array(
                'mapped' => false,
                'label' => false,
                'required' => false
            ))
            ->add('submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary btn-block'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}

