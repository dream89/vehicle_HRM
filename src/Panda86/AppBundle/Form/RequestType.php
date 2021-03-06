<?php

namespace Panda86\AppBundle\Form;

use Panda86\AppBundle\Entity\RequestAccomodation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('requester', 'entity',array(
                'class' => 'Panda86AppBundle:Employee',
                'property' => 'name',
                'label' => false,
            ))
            ->add('journey_type', 'choice', array(
            'choices'   => array(
                'single' => 'Single',
                'return' => 'Single and Return',
                ),
             'label' => false,
             'expanded'  => true,
            ))
            ->add('days', 'hidden')
            ->add('vtype', 'entity',array(
                'empty_value' => '--',
                'class' => 'Panda86AppBundle:VType',
                'property' => 'name',
                'label' => false,
            ))
            ->add('pickup_time','dateTimePicker', array(
                'label' => false,
            ))
            ->add('pickup_loc', 'text', array(
                'label' => false,
            ))
            ->add('destination', 'text', array(
                'label' => false,
            ))
            ->add('return_time','dateTimePicker', array(
                'label' => false,
            ))
            ->add('purpose', 'text', array(
                'label' => false,
            ))
            ->add('accomodation', new RequestAccomodationType(), array(
                'label' => false,
                'required' => false,
            ))
            ->add('accompanied_by', 'entity',array(
                'class' => 'Panda86AppBundle:Employee',
                'property' => 'name',
                'label' => false,
                'multiple'  => true,
            ))
            ->add('more_info', 'textarea', array(
                'required' => false,
                'label' => false,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Panda86\AppBundle\Entity\Request'
        ));
    }

    public function getName()
    {
        return 'request';
    }
}
