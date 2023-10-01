<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SizeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Size'))
            ->add('precio',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Precio/Unidad'))
            ->add('impuesto',null, array('attr'=>array('class'=>'form-control'),'required'=> true,'label'=>'Impuesto/Unidad'))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Size'
        ));
    }
}
