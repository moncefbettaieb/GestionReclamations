<?php

namespace Esprit\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('prenom', 'text')
                ->add('nom', 'text')
                ->add('email', 'email')
                ->add('telephone', 'text')
                ->add('date', 'birthday')
                ->add('image', new \Esprit\MangerBundle\Form\ImageType())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\ClientBundle\Entity\Client'
        ));
    }

    public function getName() {
        return 'esprit_clientbundle_clienttype';
    }

}
