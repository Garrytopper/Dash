<?php

namespace Dash\PortefeuilleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ClientIntType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('required'=>false))
                ->add('prenom', TextType::class, array('required'=>false))
                ->add('tel', TextType::class, array('required'=>false))
                ->add('dateRdv', DateType::class)
                ->add('etat', ChoiceType::class, array('choices' => array(
                                                                    'Decouverte' => 'Decouverte',
                                                                    'Retour' => 'Retour',
                                                                    'Relance' => 'Relance',
                                                                    'Vendu' => 'Vendu',
                                                                    'Perdu' => 'Perdu'
                                                                    )))
                ->add('budget', Moneytype::class)
                ->add('Valider', SubmitType::class)
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dash\PortefeuilleBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dash_portefeuillebundle_client';
    }


}
