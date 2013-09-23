<?php

namespace Cerambyxtasy\Oltree\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class JournalEntryType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
//                ->add('hexagon', 'entity', array(
//                    'class' => 'CerambyxtasyOltreeMainBundle:Hexagon',
//                    'property' => 'extended_id',
//                    'query_builder' => function(EntityRepository $er) {
//                        return $er->createQueryBuilder('u')
//                                ->orderBy('u.extended_id', 'ASC')
//                                ->where('u.map=1');
//                    }
//                ))
                ->add('name', 'text', array('required' => false))
//                ->add('id', 'hidden')
                ->add('terrain', 'textarea', array('required' => false))
                ->add('events', 'textarea', array('required' => false))
                ->add('exploration_level', 'choice', array(
                    'choices' => array(
                        '1' => 'Traversé',
                        '2' => 'Visité',
                        '3' => 'Exploré',
                        '4' => 'Pacifié',
                        '5' => 'Maitrisé',                       
                        '6' => 'Sécurisé',
                    ),
                    'multiple' => false,
                    'expanded' => true))
                ->add('patrollers', 'textarea', array('required' => false))
                ->add('session_date', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice',
                ))
                ->add('game_date', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice',
                ))
                ->add('save', 'submit')
                ->getForm();
    }

    public function getName() {
        return 'journalEntry';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry',
        ));
    }

}

?>
