<?php

namespace Dash\TachesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('etat', ChoiceType::class, array('choices' => array(
                                                                    'Standard' => 'Standard',
                                                                    'Prioritaire' => 'Prioritaire')))
                ->add('tache', ChoiceType::class, array('choices' => array(
                                                                    'Autre' => 'Autre',
                                                                    'Dessin' => 'Dessin',
                                                                    'Plan tech' => 'Plan tech',
                                                                    'Dossier metre' => 'Dossier metre',
                                                                    'Commander' => 'Commander',
                                                                    'Dossier pose' => 'Dossier pose',
                                                                    'Relance Cheque' => 'Relance Cheque',
                                                                    'Facture' => 'Facture',
                                                                    'Application' => 'Application')))
                ->add('description', TextareaType::class, array('required' => false))  
                ->add('Enregister', SubmitType::class)      
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dash\TachesBundle\Entity\Task'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dash_tachesbundle_task';
    }


}
