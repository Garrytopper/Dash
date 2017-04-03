<?php

namespace Dash\DventeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Dash\CoreBundle\Form\DocumentType;

class DossierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('rue', TextType::class)
                ->add('ville', TextType::class)
                ->add('cp', TextType::class)
                ->add('email', EmailType::class)
                ->add('rcheque', CheckboxType::class)
                ->add('chgranite', CheckboxType::class)
                ->add('document', DocumentType::class, array('required' => false))
                ->add('prestpose', ChoiceType::class, array('choices' => array(
                                                                    'Pose' => 'Pose',
                                                                    'Aide' => 'Aide',
                                                                    'Aide + M' => 'Aide + M',
                                                                    'Hors pose' => 'Hors pose')))
                ->add('prestliv', ChoiceType::class, array('choices' => array(
                                                                    'Livraison' => 'Livraison',
                                                                    'Hors Liv' => 'Hors Liv')))
                ->add('dateliv', DateType::class)
                ->add('Valider', SubmitType::class)        
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dash\DventeBundle\Entity\Dossier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dash_dventebundle_dossier';
    }


}
