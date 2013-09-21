<?php

namespace Cerambyxtasy\Oltree\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JournalEntryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('hexagon_json_infos')
            ->add('terrain')
            ->add('exploration_level')
            ->add('patrollers')
            ->add('events')
            ->add('session_date')
            ->add('game_date')
            ->add('hexagon')
            ->add('journal')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cerambyxtasy_oltree_mainbundle_journalentry';
    }
}
