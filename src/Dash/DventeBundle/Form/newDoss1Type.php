<?php

namespace Dash\DventeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('rue')
                ->add('ville')
                ->add('cp')
                ->add('email')
                ->add('rcheque')
                ->add('chgranite')
                ->add('photo')
                ->add('prestpose')
                ->add('prestliv')
                ->add('dateliv')        ;
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