<?php

namespace Esprit\MangerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MangerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('telephone', 'text')
                ->add('date', 'birthday')
                ->add('email', 'email')
                ->add("service", 'text')
                ->add('image', new ImageType())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\MangerBundle\Entity\Manger'
        ));
    }

    public function getName() {
        return 'esprit_mangerbundle_mangertype';
    }

}
